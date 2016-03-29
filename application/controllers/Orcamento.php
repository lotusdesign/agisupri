<?php
class Orcamento extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'orcamento_model' );
		$this->load->model ( 'categoria_model' );
		$this->load->model ( 'segmento_model' );
		$this->load->model ( 'produto_model' );
		$this->load->model ( 'usuario_model' );
		$this->load->model ( 'cor_model' );
		$this->load->model ( 'cliente_model' );
		$this->load->library('email');
	}
	
	public function excluir($id_item = 0) {
		$pedidos = $this->session->userdata('pedido');
		$data = array();
		
		foreach ($pedidos as $pedido) {
			if($pedido['id_produto'] != $id_item) {
				array_push($data, $pedido);
			}
		}
		if(count($data) == 0) {
			$this->session->sess_destroy();
		} else {
			$this->session->set_userdata('pedido', $data);
		}
		$this->load->view ( 'orcamento/confirma_exclusao', $data);
	}
	
	public function orcar_catalogo() {
		
		$cliente = $this->session->userdata('cliente');
		
		$email_message = "Pedido solicitado pelo site:<br/><br/>";
		$email_message .= "Nome do cliente: " .$cliente['nome'] ."<br>";
		$email_message .= "E-mail: " .$cliente['email'] ."<br>";
		$email_message .= "Telefone: " .$cliente['telefone'] ."<br>";
		$email_message .= "Empresa: " .$cliente['razaoSocial'] ."<br>";
		$email_message .= "CNPJ: " .$cliente['cnpj'] ."<br><br>";
		$email_message .= "<b>Itens do Pedido: <br>";
		
		$email_message .= "<table border='1' cellpading='0' cellspacing='0'>";
		$email_message .= "<tr>";
		$email_message .= "<td>Produto</td>";
		$email_message .= "<td>Cor</td>";
		$email_message .= "<td>Quantidade</td>";
		$email_message .= "</tr>";
		
		$cores_selecionadas = $this->input->post('cor');
		$ids_produto = $this->input->post('id_produto');
		$produtos = $this->input->post('nome_produto');
		$quantidade = $this->input->post('quantidade');
		
		
		for ($i = 0; $i < count($cores_selecionadas); $i++) {
			if($cores_selecionadas[$i] != '' && ($quantidade[$i] != '')) {
				
				$cor_desc = $this-> cor_model -> obter_cor($cores_selecionadas[$i]);
				var_dump($cor_desc);
				
				$email_message .= "<tr>";
				$email_message .= "<td>" .$produtos[$i] ."</td>";
				$email_message .= "<td>" .$cor_desc['nome_cor'] ."</td>";
				$email_message .= "<td>" .$quantidade[$i] ."</td>";
				$email_message .= "</tr>";
			}
		}
		$email_message .= "</table>";
		
		$this -> orcamento_model -> salvar_orcamento_catalogo($cores_selecionadas, $ids_produto, $quantidade, $cliente);
		
		$this->email->from('sandro33@gmail.com', 'Site Agisupri - Orçamento');
		$this->email->to('sandro33@gmail.com');
		
		$this->email->subject('Solicitação de Orçamento');
		$this->email->message($email_message);
		
		$this->email->send();
		
		$this->session->sess_destroy();
		$this->load->view ( 'orcamento/confirma_solicitacao');
	}
	
	public function solicitar() {
		$pedidos = $this->session->userdata('pedido');;
		
		$email_message = "Pedido solicitado pelo site:<br/><br/>";
		$email_message .= "Nome do cliente: " .$pedidos[0]['nome_cliente'] ."<br>";
		$email_message .= "E-mail: " .$pedidos[0]['email'] ."<br>";
		$email_message .= "Telefone: " .$pedidos[0]['telefone'] ."<br>";
		$email_message .= "Empresa: " .$pedidos[0]['empresa'] ."<br>";
		$email_message .= "CNPJ: " .$pedidos[0]['cnpj'] ."<br><br>";
		$email_message .= "<b>Itens do Pedido: <br>";
		
		$email_message .= "<table border='1' cellpading='0' cellspacing='0'>";
		$email_message .= "<tr>";
		$email_message .= "<td>Produto</td>";
		$email_message .= "<td>Cor</td>";
		$email_message .= "<td>Quantidade</td>";
		$email_message .= "</tr>";
		
		foreach ($pedidos as $pedido) {
			$email_message .= "<tr>";
			$email_message .= "<td>" .$pedido['nome_produto'] ."</td>";
			$email_message .= "<td>" .$pedido['nome_cor'] ."</td>";
			$email_message .= "<td>" .$pedido['quantidade'] ."</td>";
			$email_message .= "</tr>";
		}
		$email_message .= "</table>";
		
		$this -> orcamento_model -> salvar_orcamento($pedidos);
		
		$this->email->from('sandro33@gmail.com', 'Site Agisupri - Orçamento');
		$this->email->to('tarcizo@agisupri.com.br');
		
		$this->email->subject('Solicitação de Orçamento');
		$this->email->message($email_message);
		
		$this->email->send();
		
		$this->session->sess_destroy();
		$this->load->view ( 'orcamento/confirma_solicitacao');
	}

	public function salvar() {
		$pedido = array();
		if(! $this->session->userdata('pedido')) {
			$item_pedido = array('id_produto' => $this->input->post('id_produto'),
								 'nome_produto' => $this->input->post('nome_produto'),
								 'id_cor' => $this->input->post('id_cor'),
								 'descricao' => $this->input->post('descricao'),
								 'nome_cor' => $this->input->post('nome_cor'),
								 'quantidade' => $this->input->post('quantidade'),
								 'nome_cliente' => $this->input->post('nome_cliente'),
								 'email' => $this->input->post('email'),
							 	 'telefone' => $this->input->post('telefone'),
								 'empresa' => $this->input->post('empresa'),
								 'imagem_produto' => $this->input->post('imagem_produto'),
								 'cnpj' => $this->input->post('cnpj'));
			
			array_push($pedido, $item_pedido);
			$this->session->set_userdata('pedido', $pedido);
			
		} else {
			$element = array('id_produto' => $this->input->post('id_produto'),
							 'nome_produto' => $this->input->post('nome_produto'),
							 'id_cor' => $this->input->post('id_cor'),
							 'descricao' => $this->input->post('descricao'),
							 'nome_cor' => $this->input->post('nome_cor'),
							 'quantidade' => $this->input->post('quantidade'),
							 'nome_cliente' => $this->input->post('nome_cliente'),
							 'email' => $this->input->post('email'),
							 'telefone' => $this->input->post('telefone'),
							 'empresa' => $this->input->post('empresa'),
							 'imagem_produto' => $this->input->post('imagem_produto'),
							 'cnpj' => $this->input->post('cnpj'));
			
			$pedido = $this->session->userdata('pedido');;
			array_push($pedido, $element);
			
			$this->session->set_userdata('pedido', $pedido);
		}
		$data['cores'] = $this -> cor_model -> get_cores();
		$data['produto_detalhe'] = $this -> produto_model -> get_produtos($this->input->post('id_produto'));
		$data['produto_detalhe']['categoria'] = $this -> categoria_model -> obter_categoria($data['produto_detalhe']['id_categoria']);
		$data['produto_detalhe']['segmento'] = $this -> segmento_model -> obter_segmento($data['produto_detalhe']['categoria']['id_segmento']);
			
		$i = 0;
		while ($i < 5) {
			$data['produtos_relacionados'][$i] = $this -> produto_model -> get_produtos(mt_rand(1, 50));
				
			if($data['produtos_relacionados'][$i] != null) {
				$i++;
			}
		}
		$this->load->view ( 'produto/produto_interna', $data);
	}
	
	public function listar_pedido() {
		$data = $this->session->userdata('pedido');
		$this->load->view ( 'orcamento/lista', $data);
	}
	
	public function listar_orcamentos() {
		$data['orcamentos'] = $this -> orcamento_model -> buscar_orcamentos();
		$this->load->view ( 'admin/listar_orcamentos', $data);
	}
	
	public function ver_itens_pedido($id_orcamento = 0) {
		$data['orcamento'] = $this -> orcamento_model -> obter_orcamento($id_orcamento);
		$this->load->view ( 'admin/ver_itens_pedido', $data);
	}
}
?>
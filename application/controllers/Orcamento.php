<?php
class Orcamento extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'orcamento_model' );
		$this->load->model ( 'produto_model' );
		$this->load->model ( 'categoria_model' );
		$this->load->model ( 'segmento_model' );
		$this->load->model ( 'cor_model' );
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
	
	public function solicitar() {
	
		$pedidos = $this->session->userdata('pedido');;
	
		foreach ($pedidos as $pedido) {
			$data = array('id_produto' => $pedido['id_produto'],
						  'id_cor' => $pedido['id_cor'],
						  'quantidade' => $pedido['quantidade'],
						  'nome_cliente' => $pedido['nome_cliente'],
						  'email' => $pedido['email'],
						  'telefone' => $pedido['telefone'],
						  'empresa' => $pedido['empresa'],
						  'cnpj' => $pedido['cnpj']);
			
			$this->db->insert('orcamentos', $data);
			$this->db->insert_id();
		}
		
		$this->email->from('sandro33@gmail.com', 'Agisupri');
		$this->email->to('sandro33@gmail.com');
		
		$this->email->subject('Solicitação de Orçamento');
		$this->email->message('Testing the email class.');
		
		$this->email->send();
		echo $this->email->print_debugger();
		
		$this->session->sess_destroy();
		$this->load->view ( 'orcamento/confirma_solicitacao', $data);
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
	
	public function listar() {
		$data = $this->session->userdata('pedido');
		$this->load->view ( 'orcamento/lista', $data);
	}
}
?>
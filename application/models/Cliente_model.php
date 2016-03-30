<?php
class Cliente_model extends CI_Model {

	public function __construct() {
		
	}
	
	public function salvarCliente() {
		$imagem1 = $_FILES["logotipo"];
		$caminho_imagem1 = mt_rand().".jpg";
		move_uploaded_file($imagem1["tmp_name"], "design_core/img/logotipos/" .$caminho_imagem1);
		
		$data = array(
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'cargo' => $this->input->post('cargo'),
				'telefone' => $this->input->post('telefone'),
				'celular' => $this->input->post('celular'),
				'razaoSocial' => $this->input->post('razaoSocial'),
				'cnpj' => $this->input->post('cnpj'),
				'endereco' => $this->input->post('endereco'),
				'numero' => $this->input->post('numero'),
				'bairro' => $this->input->post('bairro'),
				'complemento' => $this->input->post('complemento'),
				'cidade' => $this->input->post('cidade'),
				'estado' => $this->input->post('estado'),
				'nome_usuario' => $this->input->post('nome_usuario'),
				'senha' => $this->input->post('senha'),
				'observacoes' => $this->input->post('observacoes'),
				'logotipo_path' => $caminho_imagem1
		);
		$this->db->insert('clientes', $data);
		return;
	}
	
	public function editarCliente() {
		$imagem1 = $_FILES["logotipo"];
		$caminho_imagem1 = mt_rand().".jpg";
		move_uploaded_file($imagem1["tmp_name"], "design_core/img/logotipos/" .$caminho_imagem1);
	
		$data = array(
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'cargo' => $this->input->post('cargo'),
				'telefone' => $this->input->post('telefone'),
				'celular' => $this->input->post('celular'),
				'razaoSocial' => $this->input->post('razaoSocial'),
				'cnpj' => $this->input->post('cnpj'),
				'endereco' => $this->input->post('endereco'),
				'numero' => $this->input->post('numero'),
				'bairro' => $this->input->post('bairro'),
				'complemento' => $this->input->post('complemento'),
				'cidade' => $this->input->post('cidade'),
				'estado' => $this->input->post('estado'),
				'nome_usuario' => $this->input->post('nome_usuario'),
				'senha' => $this->input->post('senha'),
				'observacoes' => $this->input->post('observacoes'),
				'logotipo_path' => $caminho_imagem1
		);
		$this->db->where('idCliente', $this -> input -> post('id_cliente'));
		$this->db->update('clientes', $data);
		
		return;
	}
	
	public function get_clientes($id = 0) {
		if ($id === 0) {
			$query = $this->db->get_where ( 'clientes');
			return $query->result_array ();
		}
		$query = $this->db->get_where ( 'clientes', array ('idCliente' => $id) );
		return $query->row_array ();
	}
	
	public function autenticar() {
		$query = $this->db->get_where ( 'clientes', array ('nome_usuario' => $this -> input -> post('usuario_cliente'),
														   'senha' => $this -> input -> post('senha_cliente')));
		return $query->row_array();
	}
}
?>
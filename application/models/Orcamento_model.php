<?php
class Orcamento_model extends CI_Model {

	public function __construct() {
		$this->load->database ();
	}
	
	public function salvar_orcamento() {
		$data = array(
				'id_produto' => $this->input->get('id_produto'),
				'id_cor' => $this->input->get('id_cor'),
				'quantidade' => $this->input->get('quantidade'),
				'nome_cliente' => $this->input->get('nome_cliente'),
				'email' => $this->input->get('email'),
				'telefone' => $this->input->get('telefone'),
				'empresa' => $this->input->get('empresa'),
				'cnpj' => $this->input->get('cnpj')
		);
		return $this->db->insert('orcamentos', $data);
	}
}
?>
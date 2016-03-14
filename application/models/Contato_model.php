<?php
class Contato_model extends CI_Model {

	public function __construct() {
		
	}
	
	public function salvar_contato() {
		$data = array(
				'nome' => $this->input->get('nome'),
				'email' => $this->input->get('email'),
				'telefone' => $this->input->get('telefone'),
				'empresa' => $this->input->get('empresa'),
				'assunto' => $this->input->get('assunto'),
				'texto' => $this->input->get('texto')
		);
		return $this->db->insert('contato', $data);
	}
}

?>
<?php
class Usuario_model extends CI_Model {

	public function __construct() {
		$this->load->database ();
	}
	
	public function autenticar() {
		
		$data = array(
				'login' => $this->input->post('txt_usuario'),
				'senha' => $this->input->post('txt_senha')
		);
		$query = $this->db->get_where ( 'usuarios', $data);
		return $query->row_array ();
	}
}

?>
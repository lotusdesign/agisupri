<?php
class Cor_model extends CI_Model {

	public function __construct() {
		
	}

	public function obter_cor($id_cor) {
		$query = $this->db->get_where ( 'cores', array ('status' => 1, 'id_cor' => $id_cor));
		return $query->row_array ();
	}
	
	public function get_cores() {
		$query = $this->db->get_where ( 'cores', array ('status' => 1));
		return $query->result_array ();
	}
	
	public function salvar_cor() {
		$data = array('nome_cor' => $this->input->post('nome_cor'));
		$this->db->insert('cores', $data);
	}
	
	public function excluir_cor($id_cor = 0) {
		$this-> db -> where ( 'id_cor',  $id_cor );
		$this-> db -> update( 'cores', array('status' => 0));
	}
}
?>
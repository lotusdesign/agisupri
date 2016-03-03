<?php
class Cor_model extends CI_Model {

	public function __construct() {
		$this->load->database ();
	}

	public function get_cores() {
		$query = $this->db->get_where ( 'cores');
		return $query->result_array ();
	}
}
?>
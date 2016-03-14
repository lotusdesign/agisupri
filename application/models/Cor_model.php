<?php
class Cor_model extends CI_Model {

	public function __construct() {
		
	}

	public function get_cores() {
		$query = $this->db->get_where ( 'cores');
		return $query->result_array ();
	}
}
?>
<?php

class Segmento_model extends CI_Model {

	public function __construct() {
		$this->load->database ();
	}
	
	public function get_segmentos() {
		$query = $this->db->get_where ( 'segmentos');
		return $query->result_array ();
	}
	
	public function obter_segmento($id_segmento = 0) {
		if($id_segmento === 0) {
			return null;
		}
		$query = $this->db->get_where ( 'segmentos', array("id_segmento" => $id_segmento));
		return $query->row_array ();
	}
}
?>
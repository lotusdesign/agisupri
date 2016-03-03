<?php

class Categoria_model extends CI_Model {

	public function __construct() {
		$this->load->database ();
	}
	
	public function get_categorias() {
		$query = $this->db->get_where ( 'categorias');
		return $query->result_array ();
	}
	
	public function obter_categoria($id_categoria = 0) {
		if($id_categoria === 0) {
			return null;
		}
		$query = $this->db->get_where ( 'categorias', array("id_categoria" => $id_categoria));
		return $query->row_array ();
	}
	
	public function obter_categoria_por_segmento($id_segmento = 0) {
		if($id_segmento === 0) {
			return null;
		}
		$query = $this->db->get_where ( 'categorias', array("id_segmento" => $id_segmento));
		return $query->result_array ();
	}
}
?>
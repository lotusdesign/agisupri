<?php

class Segmento_model extends CI_Model {

	public function __construct() {
		
	}
	
	public function get_segmentos() {
		$query = $this -> db -> get_where ( 'segmentos', array("status" => 1));
		return $query -> result_array ();
	}
	
	public function obter_segmento($id_segmento = 0) {
		if($id_segmento === 0) {
			return null;
		}
		$query = $this->db->get_where ( 'segmentos', array("id_segmento" => $id_segmento, "status" => 1));
		return $query->row_array ();
	}
	
	public function salvar_segmento() {
		$data = array('nome_segmento' => $this->input->post('nome_segmento'));
		$this->db->insert('segmentos', $data);
//		$insert_id = $this->db->insert_id();
//		return  $insert_id;
	}
	
	public function excluir_segmento($id_segmento = 0) {
		$this->db->where('id_segmento', $id_segmento);
		$this->db->update('segmentos', array('status' => 0)); 
	}
	
	public function editar_segmento() {
		$dados = array('nome_segmento' => $this -> input -> post('nome_segmento'));
		
		$this->db->where('id_segmento', $this -> input -> post('id_segmento'));
		$this->db->update('segmentos', $dados);
	}
}
?>
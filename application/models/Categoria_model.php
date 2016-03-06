<?php

class Categoria_model extends CI_Model {

	public function __construct() {
		$this->load->database ();
	}
	
	public function get_categorias() {
		$query = $this->db->query ( "SELECT * FROM categorias a, segmentos b where a.status = 1 and b.status = 1 and a.id_segmento = b.id_segmento");
		return $query->result_array ();
	}
	
	public function obter_categoria($id_categoria = 0) {
		if($id_categoria === 0) {
			return null;
		}
		$query = $this -> db -> get_where ( 'categorias', array("id_categoria" => $id_categoria));
		return $query->row_array ();
	}
	
	public function excluir_categoria($id_categoria = 0) {
		$this->db->where('id_categoria', $id_categoria);
		$this->db->update('categorias', array('status' => 0));
	}
	
	
	public function salvar_categoria() {
		$data = array('nome_categoria' => $this->input->post('nome_categoria'), 
					  'id_segmento' => $this->input->post('id_segmento'));
		$this->db->insert('categorias', $data);
	}
	
	public function obter_categoria_por_segmento($id_segmento = 0) {
		if($id_segmento === 0) {
			return null;
		}
		$query = $this->db->get_where ( 'categorias', array("id_segmento" => $id_segmento));
		return $query->result_array ();
	}
	
	public function editar_categoria() {
		$dados = array('nome_categoria' => $this -> input -> post('nome_categoria'),
					   'id_segmento' => $this -> input -> post('id_segmento') );
	
		$this->db->where('id_categoria', $this -> input -> post('id_categoria'));
		$this->db->update('categorias', $dados);
	}
}
?>
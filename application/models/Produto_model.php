<?php
class Produto_model extends CI_Model {
	
	public function __construct() {
		$this->load->database ();
	}
	
	public function get_produtos($id = 0) {

		if ($id === 0) {
			$query = $this->db->get_where ( 'produtos' );
			return $query->result_array ();
		}
		$query = $this->db->get_where ( 'produtos', array ('id_produto' => $id) );
		return $query->row_array ();
	}
	
	public function get_produtos_por_categoria($id_categoria = 0) {
		$query = $query = $this->db->get_where ( 'produtos', array ('id_categoria' => $id_categoria) );
		return $query->result_array ();
	}
	
	public function obter_produtos_paginados($inicial = 0, $final = 10) {
		$query = $this-> db -> query ( 'SELECT * FROM produtos LIMIT ' .$inicial .',' .$final );
		return $query->result_array ();
	}
	
	public function obter_busca_produtos($palavra_chave = '') {

		$query = $this-> db -> like ( 'palavras_chave',  $palavra_chave);
		$query = $this-> db -> or_like ( 'descricao',  $palavra_chave);
		$query = $this-> db -> or_like ( 'nome',  $palavra_chave);
		$query = $this-> db -> get ( 'produtos' );

		return $query->result_array ();
	}
	
	public function excluir_produto($id_produto = 0) {
		$query = $this-> db -> where ( 'id_produto',  $id_produto );
		$query = $this-> db -> delete( 'produtos');
	}
}
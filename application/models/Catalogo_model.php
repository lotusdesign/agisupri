<?php
class Catalogo_model extends CI_Model {

	public function __construct() {	
	}
	
	public function salvar_catalogo() {
		$produtos = $this->input->post('codigo_produto');
		
		foreach ($produtos as $produto) {
			$data = array(
					'id_produto' => $produto,
					'id_cliente' => $this->input->post('codigo_cliente')
			);
			$this -> db -> insert ('catalogo', $data);
		}
		return;
	}
	
	public function obter_catalogo($id_cliente) {
		$str_query =  ' SELECT * FROM agisufnv_site.catalogo A, agisufnv_site.produtos B ';
		$str_query .= ' WHERE ';
		$str_query .= ' 	A.id_produto = B.id_produto';
		$str_query .= ' AND A.id_cliente = ' .$id_cliente;
		
		$query = $this->db->query ( $str_query );
		return $query->result_array ();
	}
}
?>
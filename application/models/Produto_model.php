<?php
class Produto_model extends CI_Model {
	
	public function __construct() {
	}
	
	public function get_produtos($id = 0) {

		if ($id === 0) {
			$str_query = 'SELECT * FROM agisufnv_site.produtos P, agisufnv_site.segmentos S, agisufnv_site.categorias C';
			$str_query .= ' WHERE'; 
			$str_query .= '	P.ID_CATEGORIA = C.ID_CATEGORIA';
			$str_query .= ' AND C.ID_SEGMENTO = S.ID_SEGMENTO';
			$str_query .= ' AND S.STATUS = 1';
			$str_query .= ' AND C.STATUS = 1';
			$str_query .= ' AND P.STATUS = 1';
			$str_query .= ' ORDER BY P.ID_PRODUTO';
			
			$query = $this->db->query ( $str_query );
			return $query->result_array ();
		}
		$query = $this->db->query ( 'SELECT * FROM agisufnv_site.produtos WHERE id_produto = ' .$id .' AND status = 1');
		return $query->row_array ();
	}
	
	public function obter_produto($id_produto) {
		$str_query = 'SELECT * FROM agisufnv_site.produtos P, agisufnv_site.segmentos S, agisufnv_site.categorias C';
		$str_query .= ' WHERE';
		$str_query .= '	P.ID_CATEGORIA = C.ID_CATEGORIA';
		$str_query .= ' AND C.ID_SEGMENTO = S.ID_SEGMENTO';
		$str_query .= ' AND S.STATUS = 1';
		$str_query .= ' AND C.STATUS = 1';
		$str_query .= ' AND P.STATUS = 1';
		$str_query .= ' AND P.ID_PRODUTO = ' .$id_produto;
		$str_query .= ' ORDER BY P.ID_PRODUTO';
		
		$query = $this->db->query ( $str_query );
		return $query->row_array ();
	}
	
	public function get_produtos_por_categoria($id_categoria = 0) {
		$query = $query = $this->db->get_where ( 'produtos', array ('id_categoria' => $id_categoria, 'status' => 1) );
		return $query->result_array ();
	}
	
	public function obter_produtos_paginados($inicial = 0, $final = 10) {
		$query = $this-> db -> query ( 'SELECT * FROM agisufnv_site.produtos WHERE status = 1 LIMIT ' .$inicial .',' .$final );
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
		$this-> db -> where ( 'id_produto',  $id_produto );
		$this-> db -> update( 'produtos', array('status' => 0));
	}
	
	public function editar_produto() {
		$imagem1 = $_FILES["imagem1"];
		$caminho_imagem1 = mt_rand().".jpg";
		move_uploaded_file($imagem1["tmp_name"], "design_core/img/produtos/" .$caminho_imagem1);
		
		$imagem2 = $_FILES["imagem2"];
		$caminho_imagem2 = mt_rand().".jpg";
		move_uploaded_file($imagem2["tmp_name"], "design_core/img/produtos/" .$caminho_imagem2);
		
		$imagem3 = $_FILES["imagem3"];
		$caminho_imagem3 = mt_rand().".jpg";
		move_uploaded_file($imagem3["tmp_name"], "design_core/img/produtos/" .$caminho_imagem3);
		
		$data = array(
				'nome' => $this->input->post('nome'),
				'id_categoria' => $this->input->post('id_categoria'),
				'referencia' => $this->input->post('referencia'),
				'descricao' => $this->input->post('descricao'),
				'largura' => $this->input->post('largura'),
				'altura' => $this->input->post('altura'),
				'comprimento' => $this->input->post('comprimento'),
				'capacidade' => $this->input->post('capacidade'),
				'palavras_chave' => $this->input-> post('palavras_chave'),
				'imagem_produto1' => $caminho_imagem1,
				'imagem_produto2' => $caminho_imagem2,
				'imagem_produto3' => $caminho_imagem3
		);
		
		$this->db->where('id_produto', $this -> input -> post('id_produto'));
		$this->db->update('produtos', $data);
	}
	
	public function salvarProduto() {
		$imagem1 = $_FILES["imagem1"];
		$caminho_imagem1 = mt_rand().".jpg";
		move_uploaded_file($imagem1["tmp_name"], "design_core/img/produtos/" .$caminho_imagem1);
		
		$imagem2 = $_FILES["imagem2"];
		$caminho_imagem2 = mt_rand().".jpg";
		move_uploaded_file($imagem2["tmp_name"], "design_core/img/produtos/" .$caminho_imagem2);
		
		$imagem3 = $_FILES["imagem3"];
		$caminho_imagem3 = mt_rand().".jpg";
		move_uploaded_file($imagem3["tmp_name"], "design_core/img/produtos/" .$caminho_imagem3);
		
		$data = array(
				'nome' => $this->input->post('nome'),
				'id_categoria' => $this->input->post('id_categoria'),
				'referencia' => $this->input->post('referencia'),
				'descricao' => $this->input->post('descricao'),
				'largura' => $this->input->post('largura'),
				'altura' => $this->input->post('altura'),
				'comprimento' => $this->input->post('comprimento'),
				'capacidade' => $this->input->post('capacidade'),
				'palavras_chave' => $this->input->post('palavras_chave'),
				'imagem_produto1' => $caminho_imagem1,
				'imagem_produto2' => $caminho_imagem2,
				'imagem_produto3' => $caminho_imagem3);
		$this->db->insert('produtos', $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}
}
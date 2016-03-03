<?php
class Cadastrar_produto_model extends CI_Model {

	public function __construct() {
		$this->load->database ();
	}
	
	public function salvarProduto() {
		$data = array(
				'nome' => $this->input->post('nome'),
				'id_categoria' => $this->input->post('id_categoria'),
				'referencia' => $this->input->post('referencia'),
				'descricao' => $this->input->post('descricao'),
				'largura' => $this->input->post('largura'),
				'altura' => $this->input->post('altura'),
				'comprimento' => $this->input->post('comprimento'),
				'capacidade' => $this->input->post('capacidade'),
				'palavras_chave' => $this->input->post('palavras_chave')
		);
		$this->db->insert('produtos', $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}
}
?>
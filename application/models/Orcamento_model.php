<?php
class Orcamento_model extends CI_Model {

	public function __construct() {
	}
	
	public function salvar_orcamento_catalogo($cores_selecionadas, $ids_produto, $quantidade, $cliente) {
		$data = array(
				'nome_cliente' => $cliente['nome'],
				'email' => $cliente['email'],
				'telefone' => $cliente['telefone'],
				'empresa' => $cliente['razaoSocial'],
				'cnpj' => $cliente['cnpj']);
	
		$this->db->insert('orcamentos', $data);
		$insert_id = $this->db->insert_id();
	
		for ($i = 0; $i < count($cores_selecionadas); $i++) {
			if(!empty($cores_selecionadas[$i]) && (!empty($quantidade[$i]))) {
				$data = array(
						'id_orcamento' => $insert_id,
						'id_produto' => $ids_produto[$i],
						'quantidade' => $quantidade[$i],
						'id_cor' => $cores_selecionadas[$i]
				);
			
				$this->db->insert('itens_orcamento', $data);
			}
		}
		return;
	}
	
	public function salvar_orcamento($pedidos) {
		$data = array(			
				'nome_cliente' => $pedidos[0]['nome_cliente'],
				'email' => $pedidos[0]['email'],
				'telefone' => $pedidos[0]['telefone'],
				'empresa' => $pedidos[0]['empresa'],
				'cnpj' => $pedidos[0]['cnpj']);
		
		$this->db->insert('orcamentos', $data);
		$insert_id = $this->db->insert_id();
	
		foreach ($pedidos as $pedido) {
			$data = array(
					'id_orcamento' => $insert_id,
					'id_produto' => $pedido['id_produto'],
					'quantidade' => $pedido['quantidade'],
					'id_cor' => $pedido['id_cor']
			);
			
			$this->db->insert('itens_orcamento', $data);
		}
		return;
	}
	
	public function buscar_orcamentos() {
		$str_query =  ' SELECT * FROM agisufnv_site.orcamentos A, agisufnv_site.produtos B, '; 
		$str_query .= ' agisufnv_site.cores C, agisufnv_site.itens_orcamento D ';
		$str_query .= ' WHERE ';
		$str_query .= ' B.id_produto   = D.id_produto ';
		$str_query .= ' AND A.id_orcamento = D.id_orcamento ';
		$str_query .= ' AND D.id_cor	   = C.id_cor ';

		$query = $this->db->query ( $str_query );
		return $query->result_array ();
	}
	
	public function obter_orcamento($id_orcamento) {
		$str_query =  ' SELECT * FROM agisufnv_site.orcamentos A, agisufnv_site.produtos B, ';
		$str_query .= ' agisufnv_site.cores C, agisufnv_site.itens_orcamento D ';
		$str_query .= ' WHERE ';
		$str_query .= ' B.id_produto   = D.id_produto ';
		$str_query .= ' AND A.id_orcamento = D.id_orcamento ';
		$str_query .= ' AND D.id_cor	   = C.id_cor ';
		$str_query .= ' AND A.id_orcamento = ' .$id_orcamento;
	
		$query = $this->db->query ( $str_query );
		return $query->result_array ();
	}
}
?>
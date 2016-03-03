<?php
class Cadastrar_cliente_model extends CI_Model {

	public function __construct() {
		$this->load->database ();
	}
	
	public function salvarCliente() {
		$imagem1 = $_FILES["logotipo"];
		$caminho_imagem1 = mt_rand().".jpg";
		move_uploaded_file($imagem1["tmp_name"], "design_core/img/logotipos/" .$caminho_imagem1);
		
		$data = array(
				'nome' => $this->input->post('nome'),
				'logotipo_path' => $caminho_imagem1
		);
		$this->db->insert('clientes_home', $data);
		return;
	}
	
	public function get_clientes($id = 0) {
		if ($id === 0) {
			$query = $this->db->get_where ( 'clientes_home');
			return $query->result_array ();
		}
		$query = $this->db->get_where ( 'clientes_home', array ('idClientesHome' => $id) );
		return $query->row_array ();
	}
}
?>
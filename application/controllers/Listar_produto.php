<?php
class Listar_produto extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'produto_model' );
	}

	public function view() {
		$data ['produtos'] = $this->produto_model->get_produtos();
		$this->load->view ( 'admin/listar_produto', $data);
	}
	

	public function excluir($id_produto = 0) {
		$data ['produtos'] = $this->produto_model->excluir_produto($id_produto);
		$this->view();
	}
}
?>
<?php
class Listar_produto extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'produto_model' );
	}

	public function view() {
		session_start();
		
		if(array_key_exists('usuario', $_SESSION)) {
			$data ['produtos'] = $this->produto_model->get_produtos();
			$this->load->view ( 'admin/listar_produto', $data);
		} else {
			$this->load->view ( 'admin/login');
		}
	}
	

	public function excluir($id_produto = 0) {
		session_start();
		
		if(array_key_exists('usuario', $_SESSION)) {
			$data ['produtos'] = $this->produto_model->excluir_produto($id_produto);
			$this->view();
		} else {
			$this->load->view ( 'admin/login');
		}
	}
}
?>
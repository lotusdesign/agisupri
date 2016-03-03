<?php
class Cadastro extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'cadastro_model' );
	}

	public function view() {
		$this->load->view ( 'cadastro/cadastro');
	}
}
?>
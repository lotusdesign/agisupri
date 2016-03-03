<?php
class Contato extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'contato_model' );
	}

	public function salvar_contato() {
		header('Content-Type: application/json');
		$this->contato_model->salvar_contato();
		echo json_encode("Dados de contato salvos com sucesso!");
	}
}
?>
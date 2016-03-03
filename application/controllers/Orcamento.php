<?php
class Orcamento extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'orcamento_model' );
	}

	public function salvar() {
		header('Content-Type: application/json');
		$this->orcamento_model->salvar_orcamento();
		echo json_encode("Orçamento enviado com sucesso! \n Entraremos em contato em breve!");
	}
}
?>
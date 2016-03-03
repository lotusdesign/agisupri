<?php
class Servicos extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'servicos_model' );
	}

	public function consultoria() {
		$this->load->view ( 'servicos/consultoria');
	}
	
	public function distribuicao() {
		$this->load->view ( 'servicos/distribuicao');
	}
	
	public function logistica() {
		$this->load->view ( 'servicos/logistica');
	}
	
	public function revenda() {
		$this->load->view ( 'servicos/revenda');
	}
}
?>
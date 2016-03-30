<?php
class Cor extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'cor_model' );
	}
	
	public function view() {
		$data ['cores'] = $this->cor_model->get_cores();
		$this->load->view ( 'admin/cadastrar_cor', $data);
	}
	
	public function salvar() {
		$this -> cor_model -> salvar_cor();
		$this -> view();
	}
	
	public function excluir($id_cor = 0) {
		$this -> cor_model -> excluir_cor($id_cor);			
		$this -> view();
	}
}
?>
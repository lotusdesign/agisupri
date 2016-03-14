<?php
class Home extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'produto_model' );
		$this->load->model ( 'cliente_model' );
		$this->load->library('session');
	}
	
	public function view() {
		$data ['produtos'] = $this->produto_model->obter_produtos_paginados(0, 20);
		$data ['clientes'] = $this->cliente_model->get_clientes();
		
		$this->load->view ( 'home_page/home', $data );
	}
}
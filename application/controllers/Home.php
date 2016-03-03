<?php
class Home extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'produto_model' );
		$this->load->model ( 'cadastrar_cliente_model' );
	}
	
	public function view() {
		
		if (! file_exists ( APPPATH . '/views/home_page/home.php' )) {
			show_404 ();
		}
		
		$data ['produtos'] = $this->produto_model->obter_produtos_paginados(0, 20);
		$data ['clientes'] = $this->cadastrar_cliente_model->get_clientes();
		
		$this->load->view ( 'home_page/home', $data );
	}
}
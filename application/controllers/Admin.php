<?php
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'usuario_model' );
	}

	public function view() {
		if($this->session->userdata('usuario')) {
			$data['usuario'] = $_SESSION['usuario'];
			$this->load->view ( 'admin/index', $data );
		} else {
			$this->load->view ( 'admin/login' );
		}
	}
	
	public function logar() {
		if($this->session->userdata('usuario')) {
			$this->session->set_userdata('usuario', $data['usuario']);
			$this->load->view ( 'admin/index', $data);
		} else {
			$data['usuario'] = $this->usuario_model->autenticar();
			
			if($data['usuario'] != null) {
				$this->session->set_userdata('usuario', $data['usuario']);
				$this->load->view ( 'admin/index', $data);
			} else {
				$data['mensagem'] = 'Usuário e/ou senha inválidos! Verifique e tente novamente';
				$this -> load -> view( 'admin/login', $data);
			}
		}
	}
}
?>
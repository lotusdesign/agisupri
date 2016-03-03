<?php
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'usuario_model' );
	}

	public function view() {
		session_start();
		
		if(array_key_exists('usuario', $_SESSION)) {
			$data['usuario'] = $_SESSION['usuario'];
			$this->load->view ( 'admin/index', $data);
		} else {		
			$this->load->view ( 'admin/login');
		}
	}
	
	public function logar() {
		session_start();
		
		if(array_key_exists('usuario', $_SESSION)) {
			$data['usuario'] = $this->usuario_model->autenticar();
			
			if($data['usuario'] != null) {
				$this->load->view ( 'admin/index', $data);
				$_SESSION["usuario"] = $data['usuario'];
			} else {
				$data['mensagem'] = 'Usuário e/ou senha inválidos! Verifique e tente novamente';
				$this->load->view ( 'admin/login', $data);
			}
		}
	}
}
?>
<?php

class Cadastrar_cliente extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'cadastrar_cliente_model' );
	}

	public function view() {
		session_start();
		
		if(array_key_exists('usuario', $_SESSION)) {
			$data ['mensagem'] = '';
			$this->load->view ( 'admin/cadastrar_cliente', $data);
		} else {
			$this->load->view ( 'admin/login');
		}
	}
	
	public function salvar() {
		
		session_start();
		
		if(array_key_exists('usuario', $_SESSION)) {
			$insert_id = $this->cadastrar_cliente_model->salvarCliente();
			$data ['mensagem'] = 'Cliente salvo com sucesso!';
			$this->load->view ( 'admin/cadastrar_cliente', $data);
		} else {
			$this->load->view ( 'admin/login');
		}
		
		
	}
	

}
?>
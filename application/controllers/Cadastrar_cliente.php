<?php

class Cadastrar_cliente extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'cadastrar_cliente_model' );
	}

	public function view() {
		$data ['mensagem'] = '';
		$this->load->view ( 'admin/cadastrar_cliente', $data);
	}
	
	public function salvar() {
		
		$insert_id = $this->cadastrar_cliente_model->salvarCliente();
		$data ['mensagem'] = 'Cliente salvo com sucesso!';
		$this->load->view ( 'admin/cadastrar_cliente', $data);
	}
	

}
?>
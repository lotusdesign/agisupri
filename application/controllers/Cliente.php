<?php

class Cliente extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'cliente_model' );
	}

	public function view() {
		if(array_key_exists('usuario', $_SESSION)) {
			$data ['mensagem'] = '';
			$data ['clientes'] = $this -> cliente_model -> get_clientes();
			$this->load->view ( 'admin/cadastrar_cliente', $data);
		} else {
			$this->load->view ( 'admin/login');
		}
	}
	
	public function salvar() {
		if(array_key_exists('usuario', $_SESSION)) {
			$insert_id = $this -> cliente_model -> salvarCliente();
			$data ['mensagem'] = 'Cliente salvo com sucesso!';
			$this->load->view ( 'admin/cadastrar_cliente', $data);
		} else {
			$this->load->view ( 'admin/login');
		}
	}
	
	public function editar() {
		if(array_key_exists('usuario', $_SESSION)) {
			$insert_id = $this -> cliente_model -> editarCliente();
			$data ['mensagem'] = 'Alterações salvas com sucesso!';
			$this -> carregar_cliente($this -> input -> post('id_cliente'));
		} else {
			$this->load->view ( 'admin/login');
		}
	}

	public function listar() {
		if(array_key_exists('usuario', $_SESSION)) {
			$data ['clientes'] = $this -> cliente_model -> get_clientes();
			$this->load->view ( 'admin/listar_clientes', $data);
		} else {
			$this->load->view ( 'admin/login');
		}
	}
	
	public function carregar_cliente($id_cliente) {
		if(array_key_exists('usuario', $_SESSION)) {
			$data ['cliente'] = $this -> cliente_model -> get_clientes($id_cliente);
			$this->load->view ( 'admin/editar_cliente', $data);
		} else {
			$this->load->view ( 'admin/login');
		}
	}
}
?>
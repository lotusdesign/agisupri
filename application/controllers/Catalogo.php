<?php
class Catalogo extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'catalogo_model' );
		$this->load->model ( 'cliente_model' );
		$this->load->model ( 'produto_model' );
		$this->load->model ( 'cor_model' );
	}

	public function criar_catalogo() {
		$data['clientes'] = $this -> cliente_model -> get_clientes();
		$data['produtos'] = $this -> produto_model -> get_produtos();
		var_dump($this->input->post('id_produto'));
		$this->load->view ( 'admin/criar_catalogo', $data);
	}
	
	public function salvar() {
		$this -> catalogo_model -> salvar_catalogo();
		$this -> criar_catalogo();
	}
	
	public function exibir() {
		$cliente = $this->session->userdata('cliente');
		
		$data ['cores'] = $this -> cor_model -> get_cores();
		$data ['itens'] = $this -> catalogo_model -> obter_catalogo($cliente['idCliente']);
		$this->load->view ( 'catalogo/exibir', $data);
	}
}
?>
<?php

class Administrar_produtos extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'segmento_model' );
		$this->load->model ( 'categoria_model' );
		$this->load->model ( 'produto_model' );
	}

	public function view() {
		if($this->session->userdata('usuario')) {		
			$data ['mensagem'] = '';
			$data ['produtos'] = $this->produto_model->get_produtos();
			$this->load->view ( 'admin/administrar_produtos', $data);
		} else {
			$this->load->view ( 'admin/login');
		}
	}
	
	public function excluir($id_categoria = 0) {
		$this -> produto_model -> excluir_produto($id_categoria);
		
		$data ['produtos'] = $this->produto_model->get_produtos();
		$this->load->view ( 'admin/administrar_produtos', $data);
	}
	
	public function carregar_produto($id_produto = 0) {
		$data ['produto'] = $this -> produto_model -> obter_produto($id_produto);
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$data ['categorias'] = $this->categoria_model->get_categorias();
		$this->load->view ( 'admin/editar_produto', $data);
	}
	
	public function salvar_edicao() {
		$this -> produto_model -> editar_produto();
	
		$data ['produto'] = $this -> produto_model -> obter_produto($id_produto);
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$data ['categorias'] = $this->categoria_model->get_categorias();
		$this->load->view ( 'admin/editar_produto', $data);
	}
}
?>
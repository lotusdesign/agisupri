<?php

class Cadastrar_produto extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'segmento_model' );
		$this->load->model ( 'categoria_model' );
		$this->load->model ( 'cadastrar_produto_model' );
	}

	public function view() {
		$data ['mensagem'] = '';
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$this->load->view ( 'admin/cadastrar_produto', $data);
	}
	
	public function obter_categorias_combo($id_segmento = 0) {
		header('Content-Type: application/json');

		$data['categorias'] = $this->categoria_model->obter_categoria_por_segmento($id_segmento);
		echo json_encode($data);
	}
	
	public function salvar() {
		$insert_id = $this->cadastrar_produto_model->salvarProduto();
		
		$data ['mensagem'] = 'Produto salvo com sucesso!';
		$this->load->view ( 'admin/cadastrar_produto', $data);
	}
}
?>
<?php
class Categoria extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'segmento_model' );
		$this->load->model ( 'categoria_model' );
		$this->load->helper('url');
	}
	
	public function view() {
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$data['categorias'] = $this->categoria_model->get_categorias();
		$this->load->view ( 'admin/cadastrar_categoria', $data);
	}
	
	public function salvar() {
		$this->categoria_model->salvar_categoria();
		
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$data['categorias'] = $this->categoria_model->get_categorias();
		$this->load->view ( 'admin/cadastrar_categoria', $data);
	}
	
	public function excluir($id_categoria = 0) {
		$this -> categoria_model -> excluir_categoria($id_categoria);			
		
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$data['categorias'] = $this->categoria_model->get_categorias();
		$data ['$mensagem'] = 'Categoria excluído com sucesso!';
		$this->load->view ( 'admin/cadastrar_categoria', $data);
	}
	
	public function carregar_categoria($id_categoria = 0) {
		$data ['categoria'] = $this -> categoria_model -> obter_categoria($id_categoria);
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$this->load->view ( 'admin/editar_categoria', $data);
	}
	
	public function salvar_edicao() {
		$this -> categoria_model -> editar_categoria();
		
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$data['categorias'] = $this->categoria_model->get_categorias();
		$data ['$mensagem'] = 'Categoria editada com sucesso!';
		
		$this->load->view ( 'admin/cadastrar_categoria', $data);
	}
}
?>
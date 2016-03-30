<?php
class Segmento extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'segmento_model' );
		$this->load->model ( 'categoria_model' );
		$this->load->helper('url');
	}
	
	public function view() {
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$this->load->view ( 'admin/cadastrar_segmento', $data);
	}
	
	public function salvar() {
		$this->segmento_model->salvar_segmento();
		
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$this->load->view ( 'admin/cadastrar_segmento', $data);
	}
	
	public function excluir($id_segmento = 0) {
		$this -> segmento_model -> excluir_segmento($id_segmento);			
		
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$data ['$mensagem'] = 'Segmento excluído com sucesso!';
		
		$this->load->view ( 'admin/cadastrar_segmento', $data);
	}
	
	public function carregar_segmento($id_segmento = 0) {
		$data ['segmento'] = $this->segmento_model->obter_segmento($id_segmento);
		$this->load->view ( 'admin/editar_segmento', $data);
	}
	
	public function salvar_edicao() {
		$this -> segmento_model -> editar_segmento();
		
		$data ['segmentos'] = $this->segmento_model->get_segmentos();
		$data ['$mensagem'] = 'Segmento editado com sucesso!';
		
		$this->load->view ( 'admin/cadastrar_segmento', $data);
	}
}
?>
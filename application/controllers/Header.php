<?php
class Header extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'produto_model' );
		$this->load->model ( 'categoria_model' );
	}

	public function obter_menu() {
		
		$data ['categorias'] = $this->categoria_model->get_categorias();
		
		for ($i = 0; $i < count($data['categorias']); $i ++) {
			$data ['categorias'][$i]['produtos'] = $this->produto_model->get_produtos_por_categoria($data['categorias'][$i]['id_categoria']);
		}
		
		$this->load->view ( 'templates/header', $data );
	}
}

?>
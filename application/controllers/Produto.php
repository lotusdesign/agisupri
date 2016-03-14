<?php
class Produto extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'produto_model' );
		$this->load->model ( 'categoria_model' );
		$this->load->model ( 'segmento_model' );
		$this->load->model ( 'cor_model' );
	}
	
	public function buscar() {
		$palavra_chave = $_POST['txt_busca'];
		
		$data['pesquisa'] = $palavra_chave;
		$data['resultado'] = $this -> produto_model -> obter_busca_produtos($palavra_chave);
		
		$this->load->view ( 'produto/resultado_busca', $data);
	}
	
	public function buscar_por_categoria($id_categoria) {
		$data['resultado'] = $this -> produto_model -> get_produtos_por_categoria($id_categoria);
		$data['busca_por_categoria'] = $this -> categoria_model -> obter_categoria($id_categoria);
		$data['segmento'] = $this -> segmento_model -> obter_segmento($data['busca_por_categoria']['id_segmento']);
		
		$this->load->view ( 'produto/resultado_busca_categoria', $data);
	}

	public function obter_produto($id_produto = 0) {
		$data['cores'] = $this -> cor_model -> get_cores();
		$data['produto_detalhe'] = $this -> produto_model -> get_produtos($id_produto);
		$data['produto_detalhe']['categoria'] = $this -> categoria_model -> obter_categoria($data['produto_detalhe']['id_categoria']);
		$data['produto_detalhe']['segmento'] = $this -> segmento_model -> obter_segmento($data['produto_detalhe']['categoria']['id_segmento']);
		
		$i = 0;
		while ($i < 5) {
			$data['produtos_relacionados'][$i] = $this -> produto_model -> get_produtos();
			
			if($data['produtos_relacionados'][$i] != null) {
				$i++;
			}
		}
		$this->load->view ( 'produto/produto_interna', $data);
	}
	
	public function home_produto() {
		$data ['categorias'] = $this->categoria_model->get_categorias();
		
		for ($i = 0; $i < count($data['categorias']); $i ++) {
			$data ['categorias'][$i]['produtos'] = $this->produto_model->get_produtos_por_categoria($data['categorias'][$i]['id_categoria']);
		}
		$this->load->view ( 'produto/produtos_home');
	}
	
	public function count_produto() {
		return $this->db->count_all_results('produtos');
	}
	
	public function listar_produtos($inicial = 1) {
		header('Content-Type: application/json');
		$quantidade = 12;

		$data['produtos'] = $this->produto_model->obter_produtos_paginados($inicial, $quantidade);
		echo json_encode($data);
	}
}
?>
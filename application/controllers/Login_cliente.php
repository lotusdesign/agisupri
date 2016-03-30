<?php
class Login_cliente extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'cliente_model' );
	}
	
	public function autenticar() {
		$cliente = $this -> cliente_model -> autenticar();
		$data['mensagem_login'] = 'Login efetuado com sucesso!<br/><a href=\'/agisupri/index.php/catalogo/exibir\'>Clique aqui para ver seu catálogo personalizado de produtos.</a>';
		
		if($cliente['idCliente'] != null) {
			$this->session->set_userdata('cliente', $cliente);
		} else {
			$data['mensagem_login'] = 'Usuário/Senha inválidos!<br/>Verifique os dados e tente novamente';
		}
		$this->load->view ( 'login/mensagem', $data);
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
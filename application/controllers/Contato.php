<?php
class Contato extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'contato_model' );
		$this->load->library('email');
	}

	public function salvar_contato() {
		header('Content-Type: application/json');
		$this->contato_model->salvar_contato();

		$email_message = "Contato efetuado pelo site:<br/><br/>";
		$email_message .= "Nome do cliente: " .$this->input->get('nome') ."<br>";
		$email_message .= "E-mail: " .$this->input->get('email') ."<br>";
		$email_message .= "Telefone: " .$this->input->get('telefone') ."<br>";
		$email_message .= "Empresa: " .$this->input->get('empresa') ."<br>";
		$email_message .= "Assunto: " .$this->input->get('Assunto') ."<br>";
		$email_message .= "Mensagem: " .nl2br($this->input->get('texto')) ."<br><br>";
		
		$this->email->from('sandro33@gmail.com', 'Site Agisupri - Contato');
		$this->email->to('tarcizo@agisupri.com.br');
		
		$this->email->subject('Contato efetuado pelo site');
		$this->email->message($email_message);
		
		$this->email->send();
		echo json_encode("Dados de contato salvos com sucesso!");
	}
}
?>
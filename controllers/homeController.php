<?php
class homeController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array();

		$this->loadView('home', $data);
	}

	public function send_email(){
		$data = array();

		$dados_form = filter_input_array(INPUT_POST,FILTER_SANITIZE_MAGIC_QUOTES);


		if(empty($dados_form['name'])):
			$data['return'] = ["card-panel yellow red-text","Preencha o nome."];

		elseif(empty($dados_form['email'])):
			$data['return'] = ["card-panel yellow red-text","Preencha o e-mail."];

		elseif(empty($dados_form['subject'])):
			$data['return'] = ["card-panel yellow red-text","Preencha o assunto."];

		elseif(empty($dados_form['message'])):
			$data['return'] = ["card-panel yellow red-text","Preencha a mensagem."];

		else:

			$dados_form['date'] = date("Y-m-d H-m-s");
			Contato::Create($dados_form);

			if(Contato::getResult()):
				$data['return'] = ["card-panel teal lighten-2 white-text","Mensagem enviada com sucesso, entraremos em contato."];

			else:
				$data['return'] = ["card-panel teal lighten-2 white-text","Não entrou no if"];
			endif;
		endif;

		echo json_encode($data);die;

	}
}

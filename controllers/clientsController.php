<?php
class clientsController extends Controller{

	public function index(){
		$data = array();

		Clients::ReadAll();
		$data['list_client'] = Clients::getResult();

		$this->loadTemplate("clients_list",$data);
	}

	public function add(){
		$data = array();

		$dados_form = filter_input_array(INPUT_POST,FILTER_SANITIZE_MAGIC_QUOTES);
		if(isset($dados_form['client_name']) && !empty($dados_form['client_name'])):
			$dados_form['client_genre'] = ucfirst($dados_form['client_genre']);

			Clients::Create($dados_form);
			if(Clients::getResult()):
				header("Location: ".BASE_URL."/clients");
			else:
				echo "Erro ao cadastrar";
			endif;
		endif;

		$this->loadTemplate("clients_add",$data);
	}

	public function edit($id){
		$data = array();

		Clients::ReadByField("id_client", $id);
		$data['list_client'] = Clients::getResult();

		$dados_form = filter_input_array(INPUT_POST,FILTER_SANITIZE_MAGIC_QUOTES);
		if(isset($dados_form['client_name']) && !empty($dados_form['client_name'])):
			$dados_form['client_genre'] = ucfirst($dados_form['client_genre']);

			Clients::Update($dados_form,"id_client",$id);
			if(Clients::getResult()):
				header("Location: ".BASE_URL."/clients");
			else:
				echo "Erro ao atualizar";
			endif;
		endif;

		$this->loadTemplate("clients_edit",$data);
	}

	public function del($id){
		Clients::Delete("id_client",$id);

		if(Clients::getResult()):
			header("Location: ".BASE_URL."/clients");
		endif;
	}
}
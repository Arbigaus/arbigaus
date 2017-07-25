<?php
class homeController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array();

		// $dados_clientes = array(
		// 	"name" => 'Fernando Arbigaus',
		// 	"sexo" => 'masculino'
		// 	);

		// Clientes::Create($dados_clientes);

		// if(Clientes::getResult()):
		// 	echo "O último cliente foi ".Clientes::getResult();
		// endif;

		// echo "<pre>";
		// print_r(Clientes::ReadByField('id_cliente', 1));
		// print_r(Clientes::ReadAll());

		// Clientes::Update($dados_clientes,'id_cliente',2);


		// Clientes::Delete("id_cliente",2);
		
		// $teste = array("id_cliente" => 3);

		// print_r(Clientes::FullRead("SELECT * FROM tab_clientes WHERE id_cliente = :id_cliente", $teste));

		$this->loadTemplate('home', $data);

	}
}

<?php
class homeController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array();

// 		$pagina = filter_input(INPUT_GET, 'clients');
// 		$pagina = (isset($pagina)?(int)$pagina:1);
// 		$max_pag = 2;
// 		$inicio = (($max_pag * $pagina) - $max_pag);
//
// 		$Query = "SELECT * FROM tab_clients ORDER BY id_client ASC LIMIT $inicio,$max_pag";
// 		Clients::FullRead($Query);
//
// 		echo "<pre>";
// 		print_r(Clients::getResult());
// 		echo "</pre>";
//
// 		$Query = "SELECT COUNT(*) AS Total FROM tab_clients";
// 		Clients::FullRead($Query);
//
// 		$total_registro = Clients::getResult()[0]['Total'];
// 		$maxlinks = 2;
// 		$total_paginas = ceil($total_registro / $max_pag);
//
// //	Primeiro 1 2 3 4 5 Ultimo
// 		if($total_registro > $max_pag){
// 			if($pagina != 1){
// 				echo '<a href="?clients=1">Primeira Página</a>';
// 			}
// 			// TODO: Imprimindo paginação, duas antes da página atual.
// 			for($i = $pagina - $maxlinks; $i <= $pagina - 1; $i++){
// 				if($i >= 1){
// 					echo '<a href="?clients='.$i.'">'.$i.'</a>';
// 				}
// 			}
// 			// Imprimir página atual
// 			echo '<span>'.$pagina.'</span>';
//
// 			for ($i = $pagina + 1; $i <= $pagina + $maxlinks ; $i++) {
// 				if($i <= $total_paginas){
// 					echo '<a href="?clients='.$i.'">'.$i.'</a>';
// 				}
// 			}
// 			// Imprimir última página
// 			if($pagina != $total_paginas){
// 				echo '<a href="?clients='.$total_paginas.'">Última Página</a>';
// 			}
// 		}

		Pagination::setTable('tab_clients');
		//Pagination::setPlaces(array("nome"=>'f'));
		echo "<pre>";
		print_r(Pagination::createPagination("","ORDER BY client_name ASC"));
		echo "</pre>";


		$this->loadTemplate('home', $data);

	}
}

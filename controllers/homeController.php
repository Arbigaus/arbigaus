<?php
class homeController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array();
		Pagination::setTable('tab_clients');
		$data['lista'] = Pagination::createPagination();
		$data['links'] = Pagination::createLinks();


		$this->loadTemplate('home', $data);

	}
}

<?php
class homeController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array();

		$this->loadView('home', $data);

	}
}

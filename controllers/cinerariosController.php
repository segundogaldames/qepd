<?php

class cinerariosController extends Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}
	}
}
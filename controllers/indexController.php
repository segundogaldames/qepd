<?php

class indexController extends Controller
{
	private $_enlace;

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		if (!Session::get('autenticado')) {
			$this->redireccionar('usuarios/login');
		}
		
		$this->_view->assign('titulo', 'Bienvenido Funerarias y Cementerios');
		


		$this->_view->renderizar('index');
	}
}
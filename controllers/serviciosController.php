<?php

class serviciosController extends Controller
{
	private $_tipoempresa;

	public function __construct(){
		parent::__construct();
		$this->_tipoempresa = $this->loadModel('tipoempresa');
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Servicio');
		$this->_view->assign('tipos', $this->_tipoempresa->getTipoEmpresas());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre del servicio');
				$this->_view->renderizar('add');
				exit;
			}
		}
		$this->_view->renderizar('add');
	}
}
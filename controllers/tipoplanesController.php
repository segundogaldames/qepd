<?php

class tipoplanesController extends Controller
{
	private $_tipoplan;

	public function __construct(){
		parent::__construct();
		$this->_tipoplan = $this->loadModel('tipoplan');
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Tipo de Plan');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_tipoplan->setTipoPlanes($this->getSql('nombre'));

			if ($this->_tipoplan->getTipoPlanesNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'El tipo plan se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_tipoplan->getTipoPlanesNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'El tipo plan no se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}
		$this->_view->renderizar('add');
	}
}
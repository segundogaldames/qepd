<?php

class tipoconstruccionesController extends Controller
{
	private $_tipoconstruccion;

	public function __construct(){
		parent::__construct();
		$this->_tipoconstruccion = $this->loadModel('tipoconstruccion');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Tipo Construcciones');
		$this->_view->assign('tipos', $this->_tipoconstruccion->getTipoConstrucciones());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Agregar Tipo Construcciones');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_tipoconstruccion->getTipoConstruccionesNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El dato ingresado ya existe. Intenta con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_tipoconstruccion->addTipoConstrucciones($this->getSql('nombre'));

			if ($this->_tipoconstruccion->getTipoConstruccionesNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'El Tipo Construcción se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_tipoconstruccion->getTipoConstruccionesNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El Tipo Construcción no se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}
		$this->_view->renderizar('add');
	}
}
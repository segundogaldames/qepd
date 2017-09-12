<?php

class terminacionesController extends Controller
{
	private $_terminacion;

	public function __construct(){
		parent::__construct();
		$this->_terminacion = $this->loadModel('terminacion');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}
		
		$this->_view->assign('titulo', 'Terminaciones');
		$this->_view->assign('terminaciones', $this->_terminacion->getTerminaciones());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Agregar terminaciones');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar una terminación');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_terminacion->getTerminacionNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'La terminación ya existe. Intente con otra');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_terminacion->addTerminaciones(
				$this->getSql('nombre')
				);

			if ($this->_terminacion->getTerminacionNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'La terminación ha sido ingresada correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_terminacion->getTerminacionNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'La terminación no ha sido ingresada correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}

		$this->_view->renderizar('add');
	}
}
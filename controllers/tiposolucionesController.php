<?php

class tiposolucionesController extends Controller
{
	private $_tiposolucion;

	public function __construct(){
		parent::__construct();
		$this->_tiposolucion = $this->loadModel('tiposolucion');
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Tipo Soluciones');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre del tipo de solución');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_tiposolucion->getTipoSolucionNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El tipo de solución ya existe... intente con otra');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_tiposolucion->addTipoSoluciones(
				$this->getSql('nombre')
				);

			if ($this->_tiposolucion->getTipoSolucionNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'El tipo de solución se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_tiposolucion->getTipoSolucionNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El tipo de solución no se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

		}
		$this->_view->renderizar('add');
	}
}
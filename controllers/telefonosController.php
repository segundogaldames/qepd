<?php

class telefonosController extends Controller
{
	private $_telefono;
	private $_sede;
	public function __construct(){
		parent::__construct();
		$this->_telefono = $this->loadModel('telefono');
		$this->_sede = $this->loadModel('sede');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Teléfono Sedes');
		$this->_view->assign('telefonos', $this->_telefono->getTelefonosSedesEmpresa());
		$this->_view->renderizar(index);
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Teléfono');
		$this->_view->assign('sedes', $this->_sede->getSedes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('telefono')) {
				$this->_view->assign('_error', 'Debe ingresar un número telefónico');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('sede')) {
				$this->_view->assign('_error', 'Debe seleccionar una sede');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_telefono->getTelefonoSede($this->getInt('telefono'), $this->getInt('sede'))) {
				$this->_view->assign('_error', 'El teléfono y la sede ya existen. Ingrese otro número');
				$this->_view->renderizar('add');
				exit;
			}

			if (strlen($this->getInt('telefono')) < 8) {
				$this->_view->assign('_error', 'Ingrese un número válido');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_telefono->setTelefonos(
				$this->getInt('telefono'), 
				$this->getInt('sede')
				);

			if (!$this->_telefono->getTelefonoSede($this->getInt('telefono'), $this->getInt('sede'))) {
				$this->_view->assign('_error', 'No se ha podido registrar el teléfono');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_telefono->getTelefonoSede($this->getInt('telefono'), $this->getInt('sede'))) {
				$this->_view->assign('_mensaje', 'Se ha registrar el teléfono correctamente');
				$this->_view->renderizar('add');
				exit;
			}

		}

		$this->_view->renderizar('add');
	}
}
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
		$this->verificarSession();

		$this->_view->assign('titulo', 'Teléfono Sedes');
		$this->_view->assign('telefonos', $this->_telefono->getTelefonosSedesEmpresa());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();

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

			if ($this->_telefono->getTelefonoNumero($this->getInt('telefono'))) {
				$this->_view->assign('_error', 'El teléfono ya existe. Ingrese otro número');
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
			$this->redireccionar('telefonos');
		}

		$this->_view->renderizar('add');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Teléfono');
		$this->_view->assign('telefono', $this->_telefono->getTelefonoId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Teléfono');
		$this->_view->assign('dato', $this->_telefono->getTelefonoId($this->filtrarInt($id)));
		$this->_view->assign('sedes', $this->_sede->getSedes());

		if ($this->getInt('enviar') == 1) {
			//print_r($_POST);exit;
			if (!$this->getInt('numero')) {
				$this->_view->assign('_error', 'Debe ingresar el número telefónico');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('sede')) {
				$this->_view->assign('_error', 'Debe seleccionar una sede');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_telefono->editTelefono(
				$this->filtrarInt($id), 
				$this->getInt('numero'),
				$this->getInt('sede')
			);

			$this->redireccionar('telefonos');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_telefono->deleteTelefono($this->filtrarInt($id));
		$this->redireccionar('telefonos');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('telefonos');
		}

		if (!$this->_telefono->getTelefonoId($this->filtrarInt($id))) {
			$this->redireccionar('telefonos');
		}
	}
}
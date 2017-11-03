<?php

class materialesController extends Controller
{
	private $_material;

	public function __construct(){
		parent::__construct();
		$this->_material = $this->loadModel('material');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Materiales');
		$this->_view->assign('materiales', $this->_material->getMateriales());
		$this->_view->renderizar('index');		
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Agregar materiales');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un material');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_material->getMaterialNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El material ya existe. Intenta con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_material->addMateriales(
				$this->getSql('nombre')
				);
			if ($this->_material->getMaterialNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'El material ha sido ingresado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_material->getMaterialNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El material no ha sido ingresado correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}
		$this->_view->renderizar('add');
	}
}
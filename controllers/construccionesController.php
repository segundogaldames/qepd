<?php

class construccionesController extends Controller
{
	private $_construccion;
	private $_tipoconstruccion;
	private $_material;
	private $_terminacion;
	private $_plan;

	public function __construct(){
		parent::__construct();
		$this->_construccion = $this->loadModel('construccion');
		$this->_tipoconstruccion = $this->loadModel('tipoconstruccion');
		$this->_material = $this->loadModel('material');
		$this->_terminacion = $this->loadModel('terminacion');
		$this->_plan = $this->loadModel('planes');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Construcciones');
		$this->_view->assign('construcciones', $this->_construccion->getConstrucciones());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Agregar Construcciones');
		$this->_view->assign('tipos', $this->_tipoconstruccion->getTipoConstrucciones());
		$this->_view->assign('materiales', $this->_material->getMateriales());
		$this->_view->assign('terminaciones', $this->_terminacion->getTerminaciones());
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('tipo')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo de construcción');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('material')) {
				$this->_view->assign('_error', 'Debe seleccionar un material');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('terminacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una terminación');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('grabado')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un plan');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_construccion->addConstrucciones(
				$this->getInt('tipo'), 
				$this->getInt('material'), 
				$this->getInt('terminacion'), 
				$this->getInt('grabado'), 
				$this->getInt('plan')
			);

			$this->redireccionar('construcciones/index');

		}

		$this->_view->renderizar('add');
	}
}
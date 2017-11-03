<?php

class trasladosController extends Controller
{
	private $_plan;
	private $_traslado;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_traslado = $this->loadModel('traslado');
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Traslado');
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('instalacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza de instalación');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('funeral')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza de funeral');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('conflores')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza con flores');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('acompanamiento')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en vehiculo de acompañamiento');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('pasajeros')) {
				$this->_view->assign('_error', 'Debe ingresar el número de pasajeros');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar el plan');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_traslado->addTraslado(
				$this->getInt('instalacion'), 
				$this->getInt('funeral'), 
				$this->getInt('conflores'), 
				$this->getInt('acompanamiento'), 
				$this->getInt('pasajeros'), 
				$this->getInt('plan')
				);

			if ($this->_traslado->getTrasladoPlan($this->getInt('plan'))) {
				$this->_view->assign('_mensaje', 'El traslado se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_traslado->getTrasladoPlan($this->getInt('plan'))) {
				$this->_view->assign('_error', 'El traslado no se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

		}
		$this->_view->renderizar('add');
	}
} 
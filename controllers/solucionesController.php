<?php

class solucionesController extends Controller
{
	private $_plan;
	private $_tiposolucion;
	private $_solucion;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_tiposolucion = $this->loadModel('tiposolucion');
		$this->_solucion = $this->loadModel('solucion');
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nueva Solución');
		$this->_view->assign('planes', $this->_plan->getPlanes());
		$this->_view->assign('tipo_soluciones', $this->_tiposolucion->getTipoSoluciones());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('solucion')) {
				$this->_view->assign('_error', 'Debe seleccionar una solución');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('periodo')) {
				$this->_view->assign('_error', 'Debe seleccionar un periodo');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('anio') || $this->getInt('anio') < 1) {
				$this->_view->assign('_error', 'Debe ingresar años en cifras mayor a cero');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('tipo_solucion')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo de solución');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un plan');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_solucion->addSolucion(
				$this->getInt('solucion'), 
				$this->getInt('periodo'), 
				$this->getInt('anio'), 
				$this->getInt('tipo_solucion'), 
				$this->getInt('plan')
				);
		}

		$this->_view->renderizar('add');
	}
}
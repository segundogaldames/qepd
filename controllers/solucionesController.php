<?php

class solucionesController extends Controller
{
	private $_plan;
	private $_tiposolucion;
	private $_solucion;
	private $_capacidad;
	private $_construccion;
	private $_ubicacion;
	private $_mantencion;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_tiposolucion = $this->loadModel('tiposolucion');
		$this->_solucion = $this->loadModel('solucion');
		$this->_capacidad = $this->loadModel('capacidad');
		$this->_construccion = $this->loadModel('construccion');
		$this->_ubicacion = $this->loadModel('ubicacion');
		$this->_mantencion = $this->loadModel('mantencion');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Soluciones');
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());
		$this->_view->renderizar('index');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Solución');
		$this->_view->assign('solucion', $this->_solucion->getSolucionId($this->filtrarInt($id)));
		$this->_view->assign('capacidad', $this->_capacidad->getCapacidadSolucion($this->filtrarInt($id)));
		$this->_view->assign('construccion', $this->_construccion->getConstruccionSolucion($this->filtrarInt($id)));
		$this->_view->assign('ubicacion', $this->_ubicacion->getUbicacionSolucion($this->filtrarInt($id)));
		$this->_view->assign('mantencion', $this->_mantencion->getMantencionSolucion($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function solucionPlan($plan = null){
		$this->verificarSession();

		if (!$this->_solucion->getSolucionPlan($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Solucion Plan');
		$this->_view->assign('solucion', $this->_solucion->getSolucionPlan($this->filtrarInt($plan)));
		$this->_view->renderizar('solucionPlan');
	}

	public function addSolucionPlan($plan = null){
		$this->verificarSession();

		if (!$this->filtrarInt($plan)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Nueva Solución');
		$this->_view->assign('tipo_soluciones', $this->_tiposolucion->getTipoSoluciones());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('solucion')) {
				$this->_view->assign('_error', 'Debe seleccionar una solución');
				$this->_view->renderizar('addSolucionPlan');
				exit;
			}

			if (!$this->getInt('periodo')) {
				$this->_view->assign('_error', 'Debe seleccionar un periodo');
				$this->_view->renderizar('addSolucionPlan');
				exit;
			}

			if (!$this->getInt('anio') || $this->getInt('anio') < 1) {
				$this->_view->assign('_error', 'Debe ingresar años en cifras mayor a cero');
				$this->_view->renderizar('addSolucionPlan');
				exit;
			}

			if (!$this->getInt('tipo_solucion')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo de solución');
				$this->_view->renderizar('addSolucionPlan');
				exit;
			}

			if ($this->_solucion->getSolucionPlan($this->filtrarInt($plan))) {
				$this->_view->assign('_error', 'Este plan ya tiene una solucion');
				$this->_view->renderizar('addSolucionPlan');
				exit;
			}

			$this->_solucion->addSolucion(
				$this->getInt('solucion'), 
				$this->getInt('periodo'), 
				$this->getInt('anio'), 
				$this->getInt('tipo_solucion'), 
				$this->filtrarInt($plan)
				);

			$this->redireccionar('planes');
		}

		$this->_view->renderizar('addSolucionPlan');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar solucion');
		$this->_view->assign('dato', $this->_solucion->getSolucionId($this->filtrarInt($id)));
		$this->_view->assign('tipo_soluciones', $this->_tiposolucion->getTipoSoluciones());

		if ($this->getInt('enviar') == 1) {
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

			$this->_solucion->editSolucion(
				$this->filtrarInt($id),
				$this->getInt('solucion'),
				$this->getInt('periodo'),
				$this->getInt('anio'),
				$this->getInt('tipo_solucion'),
				$this->getInt('plan')
			);

			$this->redireccionar('soluciones');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_solucion->deleteSolucion($this->filtrarInt($id));
		$this->redireccionar('soluciones');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('soluciones');
		}

		if (!$this->_solucion->getSolucionId($this->filtrarInt($id))) {
			$this->redireccionar('soluciones');
		}
	}
}
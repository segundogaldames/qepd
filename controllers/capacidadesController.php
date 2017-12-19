<?php

class capacidadesController extends Controller
{
	private $_capacidad;
	private $_solucion;
	private $_plan;

	public function __construct(){
		parent::__construct();
		$this->_capacidad = $this->loadModel('capacidad');
		$this->_solucion = $this->loadModel('solucion');
		$this->_plan = $this->loadModel('planes');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Capacidades');
		$this->_view->assign('capacidades', $this->_capacidad->getCapacidades());
		$this->_view->renderizar('index');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Capacidad');
		$this->_view->assign('capacidad', $this->_capacidad->getCapacidadId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Solucion');
		$this->_view->assign('dato', $this->_capacidad->getCapacidadId($this->filtrarInt($id)));
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			
			if ($this->getInt('adulto') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('parvulo') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('reducciones') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('anfora') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('soluciones')) {
				$this->_view->assign('_error', 'Debe seleccionar una solucion');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un plan');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_capacidad->editCapacidad(
				$this->filtrarInt($id),
				$this->getInt('adulto'),
				$this->getInt('parvulo'),
				$this->getInt('reducciones'),
				$this->getInt('anfora'),
				$this->getInt('soluciones'),
				$this->getInt('plan')
			);

			$this->redireccionar('capacidades');
		}

		$this->_view->renderizar('edit');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Nueva Capacidad');
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if ($this->getInt('adulto') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('parvulo') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('reducciones') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('anfora') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('soluciones')) {
				$this->_view->assign('_error', 'Debe seleccionar una solucion');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un plan');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_capacidad->getCapacidadSolucion($this->getInt('soluciones'))) {
				$this->_view->assign('_error', 'Esta solución ya tiene capacidades asignadas');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_capacidad->addCapacidades(
				$this->getInt('adulto'), 
				$this->getInt('parvulo'), 
				$this->getInt('reducciones'), 
				$this->getInt('anfora'), 
				$this->getInt('soluciones'),
				$this->getInt('plan')
			);

			$this->redireccionar('capacidades');
		}

		$this->_view->renderizar('add');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_capacidad->deleteCapacidad($this->filtrarInt($id));
		$this->redireccionar('capacidades');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('capacidades');
		}

		if (!$this->_capacidad->getCapacidadId($this->filtrarInt($id))) {
			$this->redireccionar('capacidades');
		}
	}
}
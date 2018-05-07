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
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Traslados');
		$this->_view->assign('traslados', $this->_traslado->getTraslados());
		$this->_view->renderizar('index');
	}

	public function addTrasladoPlan($plan = null){
		#print_r($plan);exit;
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		if (!$this->filtrarInt($plan)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($plan)) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Nuevo Traslado');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('instalacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza de instalación');
				$this->_view->renderizar('addTrasladoPlan');
				exit;
			}

			if (!$this->getInt('funeral')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza de funeral');
				$this->_view->renderizar('addTrasladoPlan');
				exit;
			}

			if (!$this->getInt('conflores')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza con flores');
				$this->_view->renderizar('addTrasladoPlan');
				exit;
			}

			if (!$this->getInt('acompanamiento')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en vehiculo de acompañamiento');
				$this->_view->renderizar('addTrasladoPlan');
				exit;
			}

			if ($this->getInt('acompanamiento') == 1) {
				if (!$this->getInt('pasajeros')) {
					$this->_view->assign('_error', 'Debe ingresar el número de pasajeros');
					$this->_view->renderizar('addTrasladoPlan');
					exit;
				}
			}			

			if ($this->_traslado->getTrasladoPlan($this->filtrarInt($plan))) {
				$this->_view->assign('_error', 'Este plan ya contiene una opción de traslado. Por favor escoja otro plan');
				$this->_view->renderizar('addTrasladoPlan');
				exit;
			}

			$this->_traslado->addTraslado(
				$this->getInt('instalacion'), 
				$this->getInt('funeral'), 
				$this->getInt('conflores'), 
				$this->getInt('acompanamiento'), 
				$this->getInt('pasajeros'), 
				$this->filtrarInt($plan)
				);
			$this->redireccionar('planes');

		}
		$this->_view->renderizar('addTrasladoPlan');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Traslado');
		$this->_view->assign('traslado', $this->_traslado->getTrasladoId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function trasladoPlan($plan = null){
		//$this->verificarSession();

		if (!$this->_traslado->getTrasladoPlan($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Traslado Plan');
		$this->_view->assign('traslado', $this->_traslado->getTrasladoPlan($this->filtrarInt($plan)));
		$this->_view->renderizar('trasladoPlan');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Traslado');
		$this->_view->assign('dato', $this->_traslado->getTrasladoId($this->filtrarInt($id)));
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getInt('instalacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza de instalación');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('funeral')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza de funeral');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('conflores')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en carroza con flores');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('acompanamiento')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en vehiculo de acompañamiento');
				$this->_view->renderizar('edit');
				exit;
			}

			if ($this->getInt('acompanamiento') == 1) {
				if (!$this->getInt('pasajeros')) {
					$this->_view->assign('_error', 'Debe ingresar el número de pasajeros');
					$this->_view->renderizar('edit');
					exit;
				}

			}

			
			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar el plan');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_traslado->editTraslado(
				$this->filtrarInt($id),
				$this->getInt('instalacion'),
				$this->getInt('funeral'),
				$this->getInt('conflores'),
				$this->getInt('acompanamiento'),
				$this->getInt('pasajeros'),
				$this->getInt('plan')
			);

			$this->redireccionar('traslados');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_traslado->deleteTraslado($this->filtrarInt($id));
		$this->redireccionar('traslados');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('traslados');
		}

		if (!$this->_traslado->getTrasladoId($this->filtrarInt($id))) {
			$this->redireccionar('traslados');
		}
	}
} 
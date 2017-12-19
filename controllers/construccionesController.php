<?php

class construccionesController extends Controller
{
	private $_construccion;
	private $_tipoconstruccion;
	private $_material;
	private $_terminacion;
	private $_solucion;

	public function __construct(){
		parent::__construct();
		$this->_construccion = $this->loadModel('construccion');
		$this->_tipoconstruccion = $this->loadModel('tipoconstruccion');
		$this->_material = $this->loadModel('material');
		$this->_terminacion = $this->loadModel('terminacion');
		$this->_solucion = $this->loadModel('solucion');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Construcciones');
		$this->_view->assign('construcciones', $this->_construccion->getConstrucciones());
		$this->_view->renderizar('index');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Construccion');
		$this->_view->assign('construccion', $this->_construccion->getConstruccionId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Agregar Construcciones');
		$this->_view->assign('tipos', $this->_tipoconstruccion->getTipoConstrucciones());
		$this->_view->assign('materiales', $this->_material->getMateriales());
		$this->_view->assign('terminaciones', $this->_terminacion->getTerminaciones());
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());

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

			if (!$this->getInt('solucion')) {
				$this->_view->assign('_error', 'Debe seleccionar una solucion');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_construccion->getConstruccionSolucion($this->getInt('solucion'))) {
				$this->_view->assign('_error', 'Esta solución ya tiene una construcción...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_construccion->addConstrucciones(
				$this->getInt('tipo'), 
				$this->getInt('material'), 
				$this->getInt('terminacion'), 
				$this->getInt('grabado'), 
				$this->getInt('solucion')
			);

			$this->redireccionar('construcciones/index');

		}

		$this->_view->renderizar('add');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Construccion');
		$this->_view->assign('dato', $this->_construccion->getConstruccionId($this->filtrarInt($id)));
		$this->_view->assign('tipos', $this->_tipoconstruccion->getTipoConstrucciones());
		$this->_view->assign('materiales', $this->_material->getMateriales());
		$this->_view->assign('terminaciones', $this->_terminacion->getTerminaciones());
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getInt('tipo')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo de construcción');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('material')) {
				$this->_view->assign('_error', 'Debe seleccionar un material');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('terminacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una terminación');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('grabado')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('solucion')) {
				$this->_view->assign('_error', 'Debe seleccionar una solucion');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_construccion->editConstruccion(
				$this->filtrarInt($id),
				$this->getInt('tipo'),
				$this->getInt('material'),
				$this->getInt('terminacion'), 
				$this->getInt('grabado'), 
				$this->getInt('solucion')
			);

			$this->redireccionar('construcciones');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_construccion->deleteConstruccion($this->filtrarInt($id));
		$this->redireccionar('construcciones');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('construcciones');
		}

		if (!$this->_construccion->getConstruccionId($this->filtrarInt($id))) {
			$this->redireccionar('construcciones');
		}
	}
}
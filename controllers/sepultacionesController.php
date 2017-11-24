<?php

class sepultacionesController extends Controller
{
	private $_plan;
	private $_sepultacion;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_sepultacion = $this->loadModel('sepultacion');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'App::Sepultaciones');
		$this->_view->assign('sepultaciones', $this->_sepultacion->getSepultaciones());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Servicio de Sepultación');
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('sala')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en sala velatorio');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('capilla')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en capilla ecuménica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('liturgia')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en liturgia');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('amplificacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en amplificación');
				$this->_view->renderizar('add');
				exit;
			}
			if (!$this->getInt('diacono')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en diácono');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cafeteria')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en cafetería');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un plan');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_sepultacion->getSepultacionPlan($this->getInt('plan'))) {
				$this->_view->assign('_error', 'El plan seleccionado ya posee sepultación. Intente con otro.');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_sepultacion->addSepultacion(
				$this->getInt('sala'), 
				$this->getInt('capilla'), 
				$this->getInt('liturgia'), 
				$this->getInt('toldos'), 
				$this->getInt('sillas'), 
				$this->getInt('amplificacion'), 
				$this->getInt('diacono'), 
				$this->getInt('coro'), 
				$this->getInt('cafeteria'), 
				$this->getInt('plan')
				);

			$this->redireccionar('sepultaciones');
		}
		$this->_view->renderizar('add');
	}

	public function view($id = null){
		//print_r($id);exit;
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Sepultación');
		$this->_view->assign('sepultacion', $this->_sepultacion->getSepultacionId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		//print_r($id);exit;
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Sepultación');
		$this->_view->assign('dato', $this->_sepultacion->getSepultacionId($this->filtrarInt($id)));
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getInt('sala')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en sala velatorio');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('capilla')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en capilla ecuménica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('liturgia')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en liturgia');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('amplificacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en amplificación');
				$this->_view->renderizar('add');
				exit;
			}
			if (!$this->getInt('diacono')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en diácono');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cafeteria')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción en cafetería');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un plan');
				$this->_view->renderizar('add');
				exit;
			}

			//print_r($this->getInt('plan'));exit;

			$this->_sepultacion->editSepultacion(
				$this->filtrarInt($id), 
				$this->getInt('sala'), 
				$this->getInt('capilla'), 
				$this->getInt('liturgia'), 
				$this->getInt('toldos'), 
				$this->getInt('sillas'), 
				$this->getInt('amplificacion'), 
				$this->getInt('diacono'), 
				$this->getInt('coro'), 
				$this->getInt('cafeteria'), 
				$this->getInt('plan')
			);
			$this->redireccionar('sepultaciones');
		}

		$this->_view->renderizar('edit');
	}	

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_sepultacion->deleteSeputacion($this->filtrarInt($id));
		$this->redireccionar('sepultaciones');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('sepultaciones');
		}

		if (!$this->_sepultacion->getSepultacionId($this->filtrarInt($id))) {
			$this->redireccionar('sepultaciones');
		}
	}
}
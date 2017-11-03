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

			if (!$this->getInt('toldos')) {
				$this->_view->assign('_error', 'Debe ingresar número de toldos. Cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}
			if (!$this->getInt('sillas')) {
				$this->_view->assign('_error', 'Debe ingresar número de sillas. Cero si no aplica');
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
			if (!$this->getInt('coro')) {
				$this->_view->assign('_error', 'Debe ingresar número de integrantes del coro');
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

			if ($this->_sepultacion->getSepultacionPlan($this->getInt('plan'))) {
				$this->_view->assign('_mensaje', 'El servicio de sepultación se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_sepultacion->getSepultacionPlan($this->getInt('plan'))) {
				$this->_view->assign('_error', 'El servicio de sepultación no se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}
		$this->_view->renderizar('add');
	}
}
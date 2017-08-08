<?php

class velatoriosController extends Controller
{
	private $_velatorio;
	private $_plan;

	public function __construct(){
		parent::__construct();
		$this->_velatorio = $this->loadModel('velatorio');
		$this->_plan = $this->loadModel('planes');
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Velatorio');
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar')==1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('tramite')) {
				$this->_view->assign('_error', 'Debe ingresar algunos trámites');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('asesor')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de asesor');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('sala')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de sala de velatorio');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('capilla')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de capilla ecuménica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cirio')) {
				$this->_view->assign('_error', 'Debe ingresar un número de cirios, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('portacirio')) {
				$this->_view->assign('_error', 'Debe ingresar un número de portacirios, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cruz')) {
				$this->_view->assign('_error', 'Debe ingresar un número de cruces, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('canasto')) {
				$this->_view->assign('_error', 'Debe ingresar un número de flores en canasto, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cubreurna')) {
				$this->_view->assign('_error', 'Debe ingresar un número de flores cubreurna, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('libro')) {
				$this->_view->assign('_error', 'Debe ingresar un número de libros de condolencias, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('parroco')) {
				$this->_view->assign('_error', 'Debe seleccionar una opcion de parroco');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('coro')) {
				$this->_view->assign('_error', 'Debe ingresar un número de integrantes de coro, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('aviso')) {
				$this->_view->assign('_error', 'Debe ingresar un número de avisos, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('tarjeta')) {
				$this->_view->assign('_error', 'Debe ingresar un número de tarjetas de agradecimiento, o cero si no aplica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cafeteria')) {
				$this->_view->assign('_error', 'Debe seleccionar una opcion de cafeteria');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un plan');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_velatorio->addVelatorio(
				$this->getSql('tramite'), 
				$this->getInt('asesor'), 
				$this->getInt('sala'), 
				$this->getInt('capilla'), 
				$this->getInt('cirio'), 
				$this->getInt('portacirio'), 
				$this->getInt('cruz'), 
				$this->getInt('canasto'), 
				$this->getInt('cubreurna'), 
				$this->getInt('libro'), 
				$this->getInt('parroco'), 
				$this->getInt('coro'), 
				$this->getInt('aviso'), 
				$this->getInt('tarjeta'), 
				$this->getInt('cafeteria'), 
				$this->getInt('plan')
				);

			if ($this->_velatorio->getVelatorioPlan($this->getInt('plan'))) {
				$this->_view->assign('_mensaje', 'El velatorio se registro correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_velatorio->getVelatorioPlan($this->getInt('plan'))) {
				$this->_view->assign('_error', 'El velatorio no se registro correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}
		$this->_view->renderizar('add');
	}
}
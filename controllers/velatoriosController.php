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
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Velatorios');
		$this->_view->assign('velatorios', $this->_velatorio->getVelatorios());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();

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

			if (!$this->getInt('parroco')) {
				$this->_view->assign('_error', 'Debe seleccionar una opcion de parroco');
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

			if ($this->_velatorio->getVelatorioPlan($this->getInt('plan'))) {
				$this->_view->assign('_error', 'El plan ya tiene un velatorio asignado. Escoja otro plan.');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_velatorio->addVelatorio(
				$this->getSql('tramite'), 
				$this->getInt('asesor'), 
				$this->getInt('sala'), 
				$this->getInt('capilla'), 
				$this->getInt('cirios'), 
				$this->getInt('portacirios'), 
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

			$this->redireccionar('velatorios');
		}
		$this->_view->renderizar('add');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo','Ver Velatorio');
		$this->_view->assign('velatorio', $this->_velatorio->getVelatorioId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Velatorio');
		$this->_view->assign('dato', $this->_velatorio->getVelatorioId($this->filtrarInt($id)));
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
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

			if (!$this->getInt('parroco')) {
				$this->_view->assign('_error', 'Debe seleccionar una opcion de parroco');
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

			$this->_velatorio->editVelatorio(
				$this->filtrarInt($id), 
				$this->getSql('tramite'), 
				$this->getInt('asesor'), 
				$this->getInt('sala'), 
				$this->getInt('capilla'), 
				$this->getInt('cirios'), 
				$this->getInt('portacirios'), 
				$this->getInt('cruces'), 
				$this->getInt('canastos'), 
				$this->getInt('cubreurna'), 
				$this->getInt('condolencias'), 
				$this->getInt('parroco'), 
				$this->getInt('coro'), 
				$this->getInt('avisos'), 
				$this->getInt('tarjetas'), 
				$this->getInt('cafeteria'), 
				$this->getInt('plan')
			);

			$this->redireccionar('velatorios');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_velatorio->deleteVelatorio($this->filtrarInt($id));
		$this->redireccionar('velatorios');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('velatorios');
		}

		if (!$this->_velatorio->getVelatorioId($this->filtrarInt($id))) {
			$this->redireccionar('velatorios');
		}
	}
}
<?php

class planesController extends Controller
{
	private $_plan;
	private $_tipoPlan;
	private $_servicio;
	private $_empresa;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_tipoPlan = $this->loadModel('tipoplan');
		$this->_servicio = $this->loadModel('servicios');
		$this->_empresa = $this->loadModel('empresa');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Planes');
		$this->_view->assign('planes', $this->_plan->getPlanes());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Plan');
		$this->_view->assign('tipoplanes', $this->_tipoPlan->getTipoPlanes());
		$this->_view->assign('servicios', $this->_servicio->getServiciosTipoEmpresa());
		$this->_view->assign('empresas', $this->_empresa->getEmpresas());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			//print_r($_POST);exit;

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('tipo_plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo de plan');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('servicio')) {
				$this->_view->assign('_error', 'Debe seleccionar un servicio');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('empresa')) {
				$this->_view->assign('_error', 'Debe seleccionar una empresa');
				$this->_view->renderizar('add');
				exit;
			}

			if($this->_plan->getPlanNombre($this->getSql('nombre'), $this->getSql('codigo'))){
				$this->_view->assign('_error', 'El plan ya existe. Debes registrar otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_plan->setPlanes(
				$this->getSql('nombre'), 
				$this->getSql('codigo'),
				$this->getInt('tipo_plan'), 
				$this->getInt('servicio'), 
				$this->getInt('empresa')
				);

			if($this->_plan->getPlanNombre($this->getSql('nombre'))){
				$this->_view->assign('_mensaje', 'El plan se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if(!$this->_plan->getPlanNombre($this->getSql('nombre'))){
				$this->_view->assign('_error', 'El plan no se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}

		$this->_view->renderizar('add');
	}

	public function view($id = null){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		if (!$this->filtrarInt($id)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($this->filtrarInt($id))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Ver Plan');
		$this->_view->assign('plan', $this->_plan->getPlanesId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}
}
<?php

class planesController extends Controller
{
	private $_plan;
	private $_tipoPlan;
	private $_servicio;
	private $_empresa;
	private $_destinatario;
	private $_comuna;
	private $_componente;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_tipoPlan = $this->loadModel('tipoplan');
		$this->_servicio = $this->loadModel('servicios');
		$this->_empresa = $this->loadModel('empresa');
		$this->_destinatario = $this->loadModel('destinatario');
		$this->_comuna = $this->loadModel('comuna');
		$this->_componente = $this->loadModel('componente');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Planes');
		$this->_view->assign('planes', $this->_plan->getPlanes());
		$this->_view->renderizar('index');
	}

	public function planesServicios($id = null){

		$this->_view->assign('titulo', 'Ver Planes');
		$this->_view->assign('planes', $this->_plan->getPlanesServicios($this->filtrarInt($id)));
		$this->_view->assign('comunas', $this->_comuna->getComunas());
		$this->_view->renderizar('planesServicios');
	}

	public function planesComuna($id = null){
		$this->_view->assign('titulo', 'Ver Planes');
		$this->_view->assign('planes', $this->_plan->getPlanesComuna($this->filtrarInt($id)));
		$this->_view->assign('comunas', $this->_comuna->getComunas());
		$this->_view->renderizar('planesComuna');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Nuevo Plan');
		$this->_view->assign('tipoplanes', $this->_tipoPlan->getTipoPlanes());
		$this->_view->assign('servicios', $this->_servicio->getServiciosTipoEmpresa());
		$this->_view->assign('empresas', $this->_empresa->getEmpresas());
		$this->_view->assign('destinatarios', $this->_destinatario->getDestinatarios());

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

			if (!$this->getInt('destinatario')) {
				$this->_view->assign('_error', 'Debe seleccionar un destinatario');
				$this->_view->renderizar('add');
				exit;
			}

			if($this->_plan->getPlanNombreCodigo($this->getSql('nombre'), $this->getSql('codigo'))){
				$this->_view->assign('_error', 'El plan ya existe. Debes registrar otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_plan->setPlanes(
				$this->getSql('nombre'), 
				$this->getSql('codigo'),
				$this->getInt('tipo_plan'), 
				$this->getInt('servicio'), 
				$this->getInt('empresa'),
				$this->getInt('destinatario')
				);

			$this->redireccionar('planes');
		}

		$this->_view->renderizar('add');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Plan');
		$this->_view->assign('tipoplanes', $this->_tipoPlan->getTipoPlanes());
		$this->_view->assign('servicios', $this->_servicio->getServiciosTipoEmpresa());
		$this->_view->assign('empresas', $this->_empresa->getEmpresas());
		$this->_view->assign('destinatarios', $this->_destinatario->getDestinatarios());
		$this->_view->assign('dato', $this->_plan->getPlanesId($this->filtrarInt($id)));

		if ($this->getInt('enviar') == 1) {

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre del plan');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('codigo')) {
				$this->_view->assign('_error', 'Debe ingresar el código del plan');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('tipo_plan')) {
				$this->_view->assign('_error', 'Debe ingresar el tipo de plan');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('servicio')) {
				$this->_view->assign('_error', 'Debe ingresar el tipo de servicio');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('empresa')) {
				$this->_view->assign('_error', 'Debe ingresar la empresa del plan');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('destinatario')) {
				$this->_view->assign('_error', 'Debe ingresar la destinatario del plan');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('status')) {
				$this->_view->assign('_error', 'Debe ingresar status del plan');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_plan->editPlan(
				$this->filtrarInt($id), 
				$this->getSql('nombre'), 
				$this->getSql('codigo'), 
				$this->getInt('tipo_plan'), 
				$this->getInt('servicio'), 
				$this->getInt('empresa'), 
				$this->getInt('destinatario'), 
				$this->getInt('status')
				);
			$this->redireccionar('planes');
		}

		$this->_view->renderizar('edit');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);		

		$this->_view->assign('titulo', 'Ver Plan');
		$this->_view->assign('plan', $this->_plan->getPlanesId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_plan->deletePlanesId($this->filtrarInt($id));

		$this->redireccionar('planes');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($this->filtrarInt($id))) {
			$this->redireccionar('planes');
		}
	}
}
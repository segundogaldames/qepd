<?php

class componentesController extends Controller
{
	private $_componente;
	private $_servicio;

	public function __construct(){
		parent::__construct();
		$this->_componente = $this->loadModel('componente');
		$this->_servicio = $this->loadModel('servicios');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Componentes');
		$this->_view->assign('componentes', $this->_componente->getComponentes());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Componente');
		$this->_view->assign('servicios', $this->_servicio->getServiciosTipoEmpresa());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre del componente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('servicio')) {
				$this->_view->assign('_error', 'Debe seleccionar el servicio');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('url_add')) {
				$this->_view->assign('_error', 'Debe ingresar la url');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('url_view')) {
				$this->_view->assign('_error', 'Debe ingresar la url de la vista');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('url_index')) {
				$this->_view->assign('_error', 'Debe ingresar la url del index');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('url_plan')) {
				$this->_view->assign('_error', 'Debe ingresar la url del plan');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_componente->getComponenteNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El componente ya ha sido ingresado... Pruebe con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_componente->addComponentes(
				$this->getSql('nombre'), 
				$this->getInt('servicio'), 
				$this->getSql('url_add'),
				$this->getSql('url_view'),
				$this->getSql('url_index'),
				$this->getSql('url_plan')
				);

			$this->redireccionar('componentes');
		}
		$this->_view->renderizar('add');
	}

	public function edit($id = null){
		//print_r($id);exit;
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Componente');
		$this->_view->assign('servicios', $this->_servicio->getServiciosTipoEmpresa());
		$this->_view->assign('dato', $this->_componente->getComponenteId($this->filtrarInt($id)));

		if ($this->getInt('enviar') == 1) {

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('servicio')) {
				$this->_view->assign('_error', 'Debe seleccionar el servicio');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('url_add')) {
				$this->_view->assign('_error', 'Debe ingresar la url add');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('url_view')) {
				$this->_view->assign('_error', 'Debe ingresar la url de la vista');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('url_index')) {
				$this->_view->assign('_error', 'Debe ingresar la url del index');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('url_plan')) {
				$this->_view->assign('_error', 'Debe ingresar la url del plan');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_componente->editComponente(
				$this->filtrarInt($id), 
				$this->getSql('nombre'), 
				$this->getInt('servicio'), 
				$this->getSql('url_add'),
				$this->getSql('url_view'),
				$this->getSql('url_index'),
				$this->getSql('url_plan')
				);

			$this->redireccionar('componentes');
		}
	
		$this->_view->renderizar('edit');
	}

	public function addComponentes($id = null){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		if (!$this->filtrarInt($id)) {
			$this->redireccionar('planes');
		}

		if (!$this->_componente->getComponentesServicios($this->filtrarInt($id))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Componentes Por Servicios');
		$this->_view->assign('componentesServicios', $this->_componente->getComponentesServicios($this->filtrarInt($id)));

		$this->_view->renderizar(addComponentes);
	}

	public function verComponentes($id = null, $plan = null){

		if (!$this->filtrarInt($id)) {
			$this->redireccionar('planes');
		}

		if (!$this->_componente->getComponentesServicios($this->filtrarInt($id))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Componentes Por Servicios');
		$this->_view->assign('componentesServicios', $this->_componente->getComponentesServicios($this->filtrarInt($id)));
		$this->_view->assign('plan', $this->filtrarInt($plan));

		$this->_view->renderizar('verComponentes');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_componente->deleteComponente($this->filtrarInt($id));
		$this->redireccionar('componentes');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('componentes');
		}

		if (!$this->_componente->getComponenteId($this->filtrarInt($id))) {
			$this->redireccionar('componentes');
		}
	}
}
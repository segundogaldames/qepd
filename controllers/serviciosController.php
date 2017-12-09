<?php

class serviciosController extends Controller
{
	private $_tipoempresa;
	private $_servicios;
	private $_plan;

	public function __construct(){
		parent::__construct();
		$this->_tipoempresa = $this->loadModel('tipoempresa');
		$this->_servicios = $this->loadModel('servicios');
		$this->_plan = $this->loadModel('planes');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Servicios');
		$this->_view->assign('servicios', $this->_servicios->getServiciosTipoEmpresa());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Nuevo Servicio');
		$this->_view->assign('tipos', $this->_tipoempresa->getTipoEmpresas());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre del servicio');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('tipo')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo de empresa');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_servicios->addServicios(
				$this->getSql('nombre'), 
				$this->getInt('tipo')
				);

			$this->redireccionar('servicios');
		}
		$this->_view->renderizar('add');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Servicio');
		$this->_view->assign('servicio', $this->_servicios->getServicioId($id));
		$this->_view->assign('planes', $this->_plan->getPlanesServicios($this->filtrarInt($id)));
		$this->_view->renderizar('view');

	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Servicio');
		$this->_view->assign('dato', $this->_servicios->getServicioId($this->filtrarInt($id)));
		$this->_view->assign('tipos', $this->_tipoempresa->getTipoEmpresas());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('dato', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('tipo')) {
				$this->_view->assign('_error', 'Debe seleccionar el tipo de empresa');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_servicios->editServicio(
				$this->filtrarInt($id), 
				$this->getSql('nombre'), 
				$this->getInt('tipo')
				);

			$this->redireccionar('servicios');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_servicios->deleteServicio($this->filtrarInt($id));

		$this->redireccionar('servicios');
	}

	private function verificarParams($id){
		if(!$this->filtrarInt($id)){
			$this->redireccionar('servicios');
		}

		if(!$this->_servicios->getServicioId($this->filtrarInt($id))){
			$this->redireccionar('servicios');
		}
	}
}
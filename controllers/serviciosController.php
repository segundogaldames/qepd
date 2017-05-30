<?php

class serviciosController extends Controller
{
	private $_tipoempresa;
	private $_servicios;

	public function __construct(){
		parent::__construct();
		$this->_tipoempresa = $this->loadModel('tipoempresa');
		$this->_servicios = $this->loadModel('servicios');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Servicios');
		$this->_view->assign('servicios', $this->_servicios->getServiciosTipoEmpresa());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

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

			if ($this->_servicios->getServicioNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'El servicio se registró correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_servicios->getServicioNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'El servicio no se registró correctamente');
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
			$this->redireccionar('servicios');
		}

		if (!$this->_servicios->getServicioId($this->filtrarInt($id))) {
			$this->redireccionar('servicios');
		}

		$this->_view->assign('titulo', 'Ver Servicio');
		$this->_view->assign('servicio', $this->_servicios->getServicioId($id));
		$this->_view->renderizar('view');

	}

	public function edit($id = null){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		if (!$this->filtrarInt($id)) {
			$this->redireccionar('servicios');
		}

		if (!$this->_servicios->getServicioId($this->filtrarInt($id))) {
			$this->redireccionar('servicios');
		}

		$this->_view->assign('titulo', 'Editar Servicio');
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

			if ($this->_servicios->getServicioId($this->filtrarInt($id))) {
				$this->_view->assign('_mensaje', 'El servicio se ha editado correctamente');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->_servicios->getServicioId($this->filtrarInt($id))) {
				$this->_view->assign('_error', 'El servicio no se ha editado correctamente');
				$this->_view->renderizar('edit');
				exit;
			}
		}

		$this->_view->assign('dato', $this->_servicios->getServicioId($this->filtrarInt($id)));
		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		if(!Session::get('autenticado')){
			$this->redireccionar();
		}

		if(!$this->filtrarInt($id)){
			$this->redireccionar('servicios');
		}

		if(!$this->_servicios->getServicioId($this->filtrarInt($id))){
			$this->redireccionar('servicios');
		}

		$this->_servicios->deleteServicio($this->filtrarInt($id));

		if (!$this->_servicios->getServicioId($this->filtrarInt($id))) {
			$this->_view->assign('_mensaje', 'El servicio fue eliminado correctamente');
			$this->redireccionar('servicios');
			exit;
		}

		if ($this->_servicios->getServicioId($this->filtrarInt($id))) {
			$this->_view->assign('_error', 'El servicio no fue eliminado correctamente');
			$this->_view->renderizar('index');
			exit;
		}
	}
}
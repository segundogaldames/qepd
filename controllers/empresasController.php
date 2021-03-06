<?php

class empresasController extends Controller
{
	private $_empresa;
	private $_usuario;
	private $_tipo_empresa;
	private $_sede;
	private $_plan;

	public function __construct(){
		parent::__construct();
		$this->_empresa = $this->loadModel('empresa');
		$this->_usuario = $this->loadModel('usuario');
		$this->_tipo_empresa = $this->loadModel('tipoempresa');
		$this->_sede = $this->loadModel('sede');
		$this->_plan = $this->loadModel('planes');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', "Empresas");
		$this->_view->assign('empresas', $this->_empresa->getEmpresas());
		$this->_view->renderizar('index');
	}


	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', "Nueva Empresa");
		$this->_view->assign('usuarios', $this->_usuario->getUsuarios());
		$this->_view->assign('tipos', $this->_tipo_empresa->getTipoEmpresas());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre de la empresa');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar el email de la empresa');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El email no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getPostParam('rut')) {
				$this->_view->assign('_error', 'Debe ingresar el RUT de la empresa');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_empresa->getEmpresaRut($this->getPostParam('rut'))) {
				$this->_view->assign('_error', 'La empresa ingresada ya existe');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('usuario')) {
				$this->_view->assign('_error', 'Debe seleccionar un usuario para la empresa');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('tipo_empresa')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo de empresa');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_empresa->setEmpresa(
				$this->getSql('nombre'), 
				$this->getPostParam('email'), 
				$this->getPostParam('rut'), 
				$this->getInt('usuario'), 
				$this->getInt('tipo_empresa')
				);

			$this->redireccionar('empresas');
		}
		$this->_view->renderizar('add');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Empresa');
		$this->_view->assign('dato', $this->_empresa->getEmpresa($this->filtrarInt($id)));
		$this->_view->assign('usuarios', $this->_usuario->getUsuarios());
		$this->_view->assign('tipos', $this->_tipo_empresa->getTipoEmpresas());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getSql('email')) {
			$this->_view->assign('_error', 'Debe ingresar un email');
			$this->_view->renderizar('edit');
			exit;
			}

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('rut')) {
				$this->_view->assign('_error', 'Debe ingresar un RUT');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('usuario')) {
				$this->_view->assign('_error', 'Debe seleccionar un usuario');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('tipo_empresa')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo de empresa');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_empresa->editEmpresa(
				$this->filtrarInt($id),
				$this->getSql('nombre'), 
				$this->getSql('email'), 
				$this->getSql('rut'), 
				$this->getInt('usuario'), 
				$this->getInt('tipo_empresa')
				);

			$this->redireccionar('empresas');
		}
		$this->_view->renderizar('edit');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Empresa');
		$this->_view->assign('empresa', $this->_empresa->getEmpresa($id));
		$this->_view->assign('sede', $this->_sede->getSedeEmpresa($id));
		$this->_view->assign('planes', $this->_plan->getPlanesEmpresa($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function delete($id = null){
		$this->verificarSession();

		$this->_empresa->deleteEmpresa($this->filtrarInt($id));

		$this->redireccionar('empresas');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('empresas');
		}

		if (!$this->_empresa->getEmpresa($this->filtrarInt($id))) {
			$this->redireccionar('empresas');
		}
	}
}
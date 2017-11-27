<?php

class rolesController extends Controller
{
	private $_role;

	public function __construct(){
		parent::__construct();
		$this->_role = $this->loadModel('role');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRol();

		$this->_view->assign('titulo', 'APP::Roles');
		$this->_view->assign('roles', $this->_role->getRoles());

		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRol();

		$this->_view->assign('titulo', 'Crear Roles');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getAlphaNum('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre para el role');
				$this->_view->renderizar('add');
				exit;
			}

			$row = $this->_role->getRolesNombre($this->getAlphaNum('nombre'));

			if ($row) {
				$this->_view->assign('_error', 'El role ya existe, intente con otro nombre');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_role->setRoles(
				$this->getAlphaNum('nombre')
				);

			$this->redireccionar('roles');		
		}

		$this->_view->renderizar('add');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRol();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Role');		
		$this->_view->assign('role', $this->_role->getRolesId($this->filtrarInt($id)));
		$this->_view->renderizar('view');		
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRol();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Role');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);
			//print_r($_POST);exit;

			if (!$this->getAlphaNum('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre del role');
				$this->_view->renderizar('editar');
				exit;
			}

			$this->_role->editRoles(
				$this->filtrarInt($id),
				$this->getAlphaNum('nombre')
				);
			$this->redireccionar('roles');
		}

		$this->_view->assign('dato', $this->_role->getRolesId($this->filtrarInt($id)));
		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRol();
		$this->verificarParams($id);

		$this->_role->deleteRole($this->filtrarInt($id));
		$this->redireccionar('roles');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('roles');
		}

		if (!$this->_role->getRolesId($this->filtrarInt($id))) {
			$this->redireccionar('roles');
		}
	}

	private function verificarRol(){
		if (Session::get('role_id')!=1) {
			$this->redireccionar();
		}
	}	
}
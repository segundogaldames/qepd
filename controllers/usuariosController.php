<?php

class usuarioController extends Controller
{
	private $_usuarios;
	private $_roles;

	public function __construct(){
		parent::__construct();
		$this->_usuarios = $this->loadModel('usuario');
		$this->_roles = $this->loadModel('role');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRol();

		$this->_view->assign('titulo', 'APP::Usuarios');
		$this->_view->assign('usuarios', $this->_usuarios->getUsuarios());
		$this->_view->renderizar('index');
	}

	public function login(){
		if (Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Iniciar Sesi&oacute;n');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar un correo electr&oacute;nico');
				$this->_view->renderizar('login');
				exit;
			}
			
			if(!$this->validarEmail($this->getPostParam('email'))){
				$this->_view->assign('_error', 'El correo electr&oacute;nico no es v&aacute;lido');
				$this->_view->renderizar('login');
				exit;
			}
			
			if (!$this->getSql('password')) {
				$this->_view->assign('_error', 'Debe ingresar una clave');
				$this->_view->renderizar('login');
				exit;
			}
			
			$row = $this->_usuarios->verificarUsuario(
				$this->getPostParam('email'), 
				$this->getSql('password'));

			if (!$row) {
				$this->_view->assign('_error', 'El usuario o la clave no est&aacute;n registrados');
				$this->_view->renderizar('login');
				exit;
				}
			
			Session::set('autenticado', true);
			Session::set('usuario', $row['nombre']); 
			Session::set('id_usuario', $row['id']); 
			Session::set('role_id', $row['roles_id']);
			Session::set('tiempo', time()); 
			$this->redireccionar();
				
			
		}

		$this->_view->renderizar('login');
	}

	public function add()
	{
		$this->verificarSession();
		$this->verificarRol();

		$this->_view->assign('titulo', 'Registro de usuarios');
		$this->_view->assign('roles', $this->_roles->getRoles());

		if ($this->getInt('enviar') == 1) {
			
			$this->_view->assign('datos', $_POST);

			if (!$this->getAlphaNum('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar su nombre');
				$this->_view->renderizar('add');
				exit;
			}
			
			if (!$this->getAlphaNum('apellido')) {
				$this->_view->assign('_error', 'Debe ingresar su apellido');
				$this->_view->renderizar('add');
				exit;
			}
			
			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar su correo electr&oacute;nico');
				$this->_view->renderizar('add');
				exit;
			}
			
			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electr&oacute;nico ingresado no es v&aacute;lido');
				$this->_view->renderizar('add');
				exit;
			}
			
			if ($this->_usuarios->getUsuario($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electr&oacute;nico ingresado ya existe... intente con otro');
				$this->_view->renderizar('add');
				exit;
			}
			
			if (!$this->getSql('clave')) {
				$this->_view->assign('_error', 'Debe ingresar su password o clave');
				$this->_view->renderizar('add');
				exit;
			}

			if($this->getSql('clave_dos') != $this->getSql('clave')){
				$this->_view->assign('_error', 'Debe ingresar el password o clave anterior');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('role')) {
				$this->_view->assign('_error', 'Debe seleccionar un role');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_usuarios->addUsuarios(
				$this->getAlphaNum('nombre'), 
				$this->getAlphaNum('apellido'),
				$this->getPostParam('email'), 
				$this->getSql('clave'),
				$this->getInt('role')
				);

			$this->redireccionar('usuarios');
		}

		$this->_view->renderizar('add');
	}

	public function cerrar(){
		Session::destroy();
		$this->redireccionar();
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRol();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Usuario');
		$this->_view->assign('usuario', $this->_usuarios->getUsuarioId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRol();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Usuario');
		$this->_view->assign('dato', $this->_usuarios->getUsuarioId($this->filtrarInt($id)));
		$this->_view->assign('roles', $this->_roles->getRoles());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar su nombre');
				$this->_view->renderizar('add');
				exit;
			}
			
			if (!$this->getSql('apellido')) {
				$this->_view->assign('_error', 'Debe ingresar su apellido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('role')) {
				$this->_view->assign('_error', 'Debe seleccionar un role');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_usuarios->editUsuario(
				$this->filtrarInt($id), 
				$this->getSql('nombre'), 
				$this->getSql('apellido'), 
				$this->getInt('role')
			);

			$this->redireccionar('usuario');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRol();
		$this->verificarParams($id);

		$this->_usuarios->deleteUsuario($this->filtrarInt($id));
		$this->redireccionar('usuario');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('usuario');
		}

		if (!$this->_usuarios->getUsuarioId($this->filtrarInt($id))) {
			$this->redireccionar('usuario');
		}
	}

	private function verificarRol(){
		if (Session::get('role_id')!=1) {
			$this->redireccionar();
		}
	}
}
<?php

class sedesController extends Controller
{
	private $_sede;
	private $_empresa;
	private $_comuna;
	private $_telefono;
	private $_usuario;

	public function __construct(){
		parent::__construct();
		$this->_sede = $this->loadModel('sede');
		$this->_empresa = $this->loadModel('empresa');
		$this->_comuna = $this->loadModel('comuna');
		$this->_telefono = $this->loadModel('telefono');
		$this->_usuario = $this->loadModel('usuario');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Sedes');
		$this->_view->assign('sedes', $this->_sede->getSedes());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Nueva Sede');
		$this->_view->assign('empresas', $this->_empresa->getEmpresas());
		$this->_view->assign('comunas', $this->_comuna->getComunas());
		$this->_view->assign('vendedores', $this->_usuario->getUsuarioVendedor());


		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('empresa')) {
				$this->_view->assign('_error', 'Debe asociar una empresa a la sede');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Ingrese el nombre de la sede');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('calle')) {
				$this->_view->assign('_error', 'Ingrese la calle donde se ubica la sede');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('numero')) {
				$this->_view->assign('_error', 'Ingrese el número de la dirección de la sede');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('comuna')) {
				$this->_view->assign('_error', 'Debe asociar una comuna a la sede');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_sede->getSedeNombreEmpresa($this->getSql('nombre'), $this->getInt('empresa'))) {
				$this->_view->assign('_error', 'La sede ya existe... Inténtalo de nuevo');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_sede->setSede(
				$this->getSql('nombre'), 
				$this->getSql('calle'), 
				$this->getInt('numero'), 
				$this->getSql('sector'), 
				$this->getSql('ubicacion'), 
				$this->getInt('empresa'), 
				$this->getInt('comuna'),
				$this->getInt('vendedor')
				);

			$this->redireccionar('sedes');
		}
		$this->_view->renderizar('add');
	}

	public function addSedeEmpresa($id = null){
		$this->verificarSession();
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('empresas');
		}

		if (!$this->_empresa->getEmpresa($this->filtrarInt($id))) {
			$this->redireccionar('empresas');
		}

		$this->_view->assign('titulo', 'Nueva Sede');
		$this->_view->assign('comunas', $this->_comuna->getComunas());
		$this->_view->assign('vendedores', $this->_usuario->getUsuarioVendedor());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);
			//print_r($_POST);exit;

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Ingrese el nombre de la sede');
				$this->_view->renderizar('addSedeEmpresa');
				exit;
			}

			if (!$this->getSql('calle')) {
				$this->_view->assign('_error', 'Ingrese la calle donde se ubica la sede');
				$this->_view->renderizar('addSedeEmpresa');
				exit;
			}

			if (!$this->getInt('numero')) {
				$this->_view->assign('_error', 'Ingrese el número de la dirección de la sede');
				$this->_view->renderizar('addSedeEmpresa');
				exit;
			}

			if (!$this->getInt('comuna')) {
				$this->_view->assign('_error', 'Debe asociar una comuna a la sede');
				$this->_view->renderizar('addSedeEmpresa');
				exit;
			}

			if ($this->_sede->getSedeNombreEmpresa($this->getSql('nombre'), $this->getInt('empresa'))) {
				$this->_view->assign('_error', 'La sede ya existe... Inténtalo de nuevo');
				$this->_view->renderizar('addSedeEmpresa');
				exit;
			}

			$this->_sede->setSede(
				$this->getSql('nombre'), 
				$this->getSql('calle'), 
				$this->getInt('numero'), 
				$this->getSql('sector'), 
				$this->getSql('ubicacion'), 
				$this->filtrarInt($id), 
				$this->getInt('comuna'),
				$this->getInt('vendedor')
				);

			$this->redireccionar('empresas');
		}
		$this->_view->renderizar('addSedeEmpresa');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarId($id);

		$this->_view->assign('titulo', 'Ver Sede');
		$this->_view->assign('sede', $this->_sede->getSedeId($id));
		$this->_view->assign('telefonos', $this->_telefono->getTelefonosSedes($id));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarId($id);

		$this->_view->assign('titulo', 'Editar Sede');
		$this->_view->assign('dato', $this->_sede->getSedeId($this->filtrarInt($id)));
		$this->_view->assign('empresas', $this->_empresa->getEmpresas());
		$this->_view->assign('comunas', $this->_comuna->getComunas());
		$this->_view->assign('vendedores', $this->_usuario->getUsuarioVendedor());

		if ($this->getInt('enviar') == 1) {
			
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Ingrese el nombre de la sede');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('calle')) {
				$this->_view->assign('_error', 'Ingrese la calle donde se ubica la sede');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('numero')) {
				$this->_view->assign('_error', 'Ingrese el número de la dirección de la sede');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('empresa')) {
				$this->_view->assign('_error', 'Debe asociar una empresa a la sede');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('comuna')) {
				$this->_view->assign('_error', 'Debe asociar una comuna a la sede');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_sede->editSede(
				$this->filtrarInt($id), 
				$this->getSql('nombre'), 
				$this->getSql('calle'), 
				$this->getInt('numero'), 
				$this->getInt('sector'), 
				$this->getInt('ubicacion'), 
				$this->getInt('empresa'), 
				$this->getInt('comuna'),
				$this->getInt('vendedor')
				);
			$this->redireccionar('sedes'); 
		}
		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarId($id);
		

		$this->_sede->deleteSede($this->filtrarInt($id));
		$this->redireccionar('sedes');
	}

//verificacion de parametros de ingreso url
	private function verificarId($id){
		if (!$this->filtrarInt($id)) {
			
			$this->redireccionar('sedes');
		}

		if (!$this->_sede->getSedeId($this->filtrarInt($id))) {
			//print_r($this->filtrarInt($id));exit;
			$this->redireccionar('sedes');
		}
	}
}
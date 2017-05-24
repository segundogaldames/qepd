<?php

class sedesController extends Controller
{
	private $_sede;
	private $_empresa;
	private $_comuna;
	private $_telefono;

	public function __construct(){
		parent::__construct();
		$this->_sede = $this->loadModel('sede');
		$this->_empresa = $this->loadModel('empresa');
		$this->_comuna = $this->loadModel('comuna');
		$this->_telefono = $this->loadModel('telefono');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Sedes');
		$this->_view->assign('sedes', $this->_sede->getSedes());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nueva Sede');
		$this->_view->assign('empresas', $this->_empresa->getEmpresas());
		$this->_view->assign('comunas', $this->_comuna->getComunas());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

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

			if (!$this->getInt('empresa')) {
				$this->_view->assign('_error', 'Debe asociar una empresa a la sede');
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
				$this->getInt('comuna')
				);

			$row = $this->_sede->getSedeNombre($this->getSql('nombre'));

			if($row){
				$this->_view->assign('_mensaje', 'La sede se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}else{
				$this->_view->assign('_error', 'La sede no se ha registrado... Inténtalo de nuevo');
				$this->_view->renderizar('add');
				exit;
			}
		}
		$this->_view->renderizar('add');
	}

	public function view($id){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		//print_r($id);exit;

		if (!$this->_sede->getSedeId($id)) {
			$this->redireccionar('sedes');
		}

		$this->_view->assign('titulo', 'Ver Sede');
		$this->_view->assign('sede', $this->_sede->getSedeId($id));
		$this->_view->assign('telefonos', $this->_telefono->getTelefonosSedes($id));
		$this->_view->renderizar('view');
	}
}
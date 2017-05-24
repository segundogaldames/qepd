<?php

class comunasController extends Controller
{
	private $_comuna;
	private $_region;

	public function __construct(){
		parent::__construct();
		$this->_comuna = $this->loadModel('comuna');
		$this->_region = $this->loadModel('region');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'App::Comunas');
		$this->_view->assign('comunas', $this->_comuna->getComunas());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nueva Comuna');
		$this->_view->assign('regiones', $this->_region->getRegiones());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre de la comuna');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('region')) {
				$this->_view->assign('_error', 'Debe seleccionar una región');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_comuna->getComunasNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'Esta comuna ya ha sido ingresada');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_comuna->setComunas(
				$this->getSql('nombre'),
				$this->getInt('region')
				);

			$row = $this->_comuna->getComunasNombre($this->getSql('nombre'));

			if ($row) {
				$this->_view->assign('_mensaje', 'La comuna se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}else{
				$this->_view->assign('_error', 'La comuna no se ha registrado');
				$this->_view->renderizar('add');
			}

		}
		$this->_view->renderizar('add');
	}
}
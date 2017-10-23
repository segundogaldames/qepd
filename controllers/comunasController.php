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
		$this->verificarSession();

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

			$this->redireccionar('comunas');

		}
		$this->_view->renderizar('add');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Comuna');
		$this->_view->assign('comuna', $this->_comuna->getComunaId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	private function verificarParams($clave){
		if (!$this->filtrarInt($clave)) {
			$this->redireccionar('comunas');
		}

		if (!$this->_comuna->getComunaId($this->filtrarInt($id))) {
			$this->redireccionar('comunas');
		}
	}
}
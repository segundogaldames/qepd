<?php

class regionesController extends Controller
{
	private $_region;
	private $_comuna;

	public function __construct(){
		parent::__construct();
		$this->_region = $this->loadModel('region');
		$this->_comuna = $this->loadModel('comuna');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Regiones');
		$this->_view->assign('regiones', $this->_region->getRegiones());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Regiones');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_region->getRegionNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'La región ya existe...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_region->addRegion($this->getAlphaNum('nombre'));
			$this->redireccionar('regiones');
		}

		$this->_view->renderizar('add');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Región');
		$this->_view->assign('region', $this->_region->getRegionId($this->filtrarInt($id)));
		$this->_view->assign('comunas', $this->_comuna->getComunasRegion($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('regiones');
		}

		if (!$this->_region->getRegionId($this->filtrarInt($id))) {
			$this->redireccionar('regiones');
		}
	}
}
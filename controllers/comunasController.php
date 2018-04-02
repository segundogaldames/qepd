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

	public function index($pagina = false){
		$this->verificarSession();

		if (!$this->filtrarInt($pagina)) {
			$pagina = false;
		}else{
			$pagina = $this->filtrarInt($pagina);
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();

		$this->_view->assign('titulo', 'App::Comunas');
		$this->_view->assign('comunas', $paginador->paginar($this->_comuna->getComunas(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'comunas/index'));
		$this->_view->renderizar('index');
	}

	public function comunasRegion($region = null, $pagina = false){
		if (!$this->filtrarInt($region)) {
			$this->redireccionar();
		}

		if (!$this->_region->getRegionId($this->filtrarInt($region))) {
			$this->redireccionar();
		}

		if (!$this->filtrarInt($pagina)) {
			$pagina = false;
		}else{
			$pagina = $this->filtrarInt($pagina);
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();

		$this->_view->assign('titulo', 'Comunas Region');
		$this->_view->assign('regiones', $this->_region->getRegiones());
		$this->_view->assign('comunas', $paginador->paginar($this->_comuna->getComunasRegion($this->filtrarInt($region)), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'comunas/comunasRegion/' . $region));
		$this->_view->renderizar('comunasRegion');
	}

	public function add($region){
		$this->verificarSession();

		if (!$this->filtrarInt($region)) {
			$this->redireccionar('regiones');
		}

		if (!$this->_region->getRegionId($this->filtrarInt($region))) {
			$this->redireccionar('regiones');
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

			if ($this->_comuna->getComunasNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'Esta comuna ya ha sido ingresada');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_comuna->setComunas(
				$this->getSql('nombre'),
				$this->filtrarInt($region)
				);

			$this->redireccionar('comunas');

		}
		$this->_view->renderizar('add');
	}

	public function view($id = null){
		//print_r($id);exit;
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Comuna');
		$this->_view->assign('comuna', $this->_comuna->getComunaId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Comuna');
		$this->_view->assign('dato', $this->_comuna->getComunaId($this->filtrarInt($id)));
		$this->_view->assign('regiones', $this->_region->getRegiones());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre de la comuna');
				$this->_view->renderizar('edit');
				exit;
			}
			if (!$this->getInt('region')) {
				$this->_view->assign('_error', 'Debe seleccionar una región');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_comuna->editComuna(
				$this->filtrarInt($id), 
				$this->getSql('nombre'), 
				$this->getInt('region')
			);

			$this->redireccionar('comunas');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_comuna->eliminarComuna($this->filtrarInt($id));
		$this->redireccionar('comunas');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			//print_r($id);exit;
			$this->redireccionar('comunas');
		}

		if (!$this->_comuna->getComunaId($this->filtrarInt($id))) {
			//print_r($id);exit;
			$this->redireccionar('comunas');
		}
	}
}
<?php

class condicionesController extends Controller
{
	private $_plan;
	private $_condicion;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_condicion = $this->loadModel('condicion');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Condiciones');
		$this->_view->assign('condiciones', $this->_condicion->getCondiciones());
		$this->_view->renderizar('index');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Condicion');
		$this->_view->assign('condicion', $this->_condicion->getCondicionId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function add($plan = null){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		if (!$this->filtrarInt($plan)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Nuevas Condiciones');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('precio')) {
				$this->_view->assign('_error', 'Debe ingresar el precio');
				$this->_view->renderizar('add');
				exit;
			}
			if (!$this->getSql('fpago')) {
				$this->_view->assign('_error', 'Debe ingresar forma de pago');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plazo')) {
				$this->_view->assign('_error', 'Debe Seleccionar una opción para el plazo de pago');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('anticipada')) {
				$this->_view->assign('_error', 'Debe Seleccionar una opción para la compra anticipada');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('seguro')) {
				$this->_view->assign('_error', 'Debe Seleccionar una opción para el seguro de deceso');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('pensiones')) {
				$this->_view->assign('_error', 'Debe Seleccionar una opción para pensiones');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cobertura')) {
				$this->_view->assign('_error', 'Seleccione si hay cobertura regional');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_condicion->getCondicionesPlan($this->filtrarInt($plan))) {
				$this->_view->assign('_error', 'El plan ya tiene condiciones... Debe seleccionar otra opción');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_condicion->addCondiciones(
				$this->filtrarInt($plan), 
				$this->getInt('precio'), 
				$this->getSql('fpago'), 
				$this->getInt('plazo'), 
				$this->getInt('anticipada'), 
				$this->getInt('seguro'), 
				$this->getSql('convenios'), 
				$this->getInt('desctocol'), 
				$this->getInt('desctonicho'), 
				$this->getInt('pensiones')
				);

			$this->redireccionar('condiciones');
		}

		$this->_view->renderizar('add');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('condiciones');
		}

		if (!$this->_condicion->getCondicionId($this->filtrarInt($id))) {
			$this->redireccionar('condiciones');
		}
	}
}
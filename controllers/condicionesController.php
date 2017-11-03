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

	}

	public function add($id = null){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		if (!$this->filtrarInt($id)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($this->filtrarInt($id))) {
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

			if ($this->_condicion->getCondicionesPlan($this->filtrarInt($id))) {
				$this->_view->assign('_error', 'El plan ya tiene condiciones... Debe seleccionar otra opción');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_condicion->addCondiciones(
				$this->filtrarInt($id), 
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

			if ($this->_condicion->getCondicionesPlan($this->filtrarInt($id))) {
				$this->_view->assign('_mensaje', 'Las condiciones se han agregado correctamente');
				$this->_view->renderizar('add');
				exit;
			}
			if (!$this->_condicion->getCondicionesPlan($this->filtrarInt($id))) {
				$this->_view->assign('_error', 'Las condiciones no se han agregado correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}

		$this->_view->renderizar('add');
	}
}
<?php

class urnasController extends Controller
{
	private $_plan;
	private $_urna;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_urna = $this->loadModel('urna');
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nueva Urna');
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('modelo')) {
				$this->_view->assign('_error', 'Debe ingresar un modelo');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('medidas')) {
				$this->_view->assign('_error', 'Debe ingresar medidas de la urna');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('material')) {
				$this->_view->assign('_error', 'Debe ingresar materiales');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('terminaciones')) {
				$this->_view->assign('_error', 'Debe ingresar terminaciones');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('color')) {
				$this->_view->assign('_error', 'Debe ingresar colores');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar un plan');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_urna->addUrna(
				$this->getSql('modelo'), 
				$this->getSql('medidas'), 
				$this->getSql('material'), 
				$this->getSql('terminaciones'), 
				$this->getSql('color'), 
				$this->getInt('plan')
				);

			if ($this->_urna->getUrnaModelo($this->getSql('modelo'))) {
				$this->_view->assign('_mensaje', 'La urna fue correctamente registrada');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_urna->getUrnaModelo($this->getSql('modelo'))) {
				$this->_view->assign('_error', 'La urna no fue correctamente registrada');
				$this->_view->renderizar('add');
				exit;
			}
		}

		$this->_view->renderizar('add');
	}
}
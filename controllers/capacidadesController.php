<?php

class capacidadesController extends Controller
{
	private $_plan;
	private $_capacidad;

	public function __construct(){
		parent::__construct();
		$this->_plan = $this->loadModel('planes');
		$this->_capacidad = $this->loadModel('capacidad');
	}

	public function index(){

	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nueva Capacidad');
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if ($this->filtrarInt('uadulto') < 0) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}
		}

		$this->_view->renderizar('add');
	}
}
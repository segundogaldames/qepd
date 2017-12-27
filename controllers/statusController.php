<?php

class statusController extends Controller
{
	private $_status;

	public function __construct(){
		parent::__construct();
		$this->_status = $this->loadModel('status');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Status');
		$this->_view->assign('status', $this->_status->getStatus());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Nuevo Status');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_status->getStatusNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El status ya está resgistrado... intente con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_status->addStatus($this->getAlphaNum('nombre'));

			$this->redireccionar('status');
		}
		$this->_view->renderizar('add');
	}
}
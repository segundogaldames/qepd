<?php

class destinatariosController extends Controller
{
	private $_destinatario;

	public function __construct(){
		parent::__construct();
		$this->_destinatario = $this->loadModel('destinatario');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Destinatarios');
		$this->_view->assign('destinatarios', $this->_destinatario->getDestinatarios());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Destinatario');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_destinatario->getDestinatarioNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El destinatario ya existe... intente con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_destinatario->addDestinatario($this->getSql('nombre'));

			if ($this->_destinatario->getDestinatarioNombre($this->getSql('nombre'))) {
				$this->_view->assign('_mensaje', 'El destinatario se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->_destinatario->getDestinatarioNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El destinatario no se ha registrado correctamente');
				$this->_view->renderizar('add');
				exit;
			}
		}
		$this->_view->renderizar('add');
	}
}
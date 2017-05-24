<?php

class tipoempresasController extends Controller
{
	private $_tipo_empresa;

	public function __construct(){
		parent::__construct();
		$this->_tipo_empresa = $this->loadModel('tipoempresa');
	}

	public function index(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Tipos de Empresa');
		$this->_view->assign('tipos', $this->_tipo_empresa->getTipoEmpresas());
		$this->_view->renderizar('index');
	}

	public function add(){
		if (!Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Nuevo Tipo Empresa');
		

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debes ingresar el nombre');
				$this->_view->renderizar('add');
				exit;
			}

			$row = $this->_tipo_empresa->getTipoEmpresaNombre($this->getSql('nombre'));

			if ($row) {
				$this->_view->assign('_error', 'El tipo ingresado ya existe');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_tipo_empresa->setTipoEmpresa($this->getSql('nombre'));

			$row = $this->_tipo_empresa->getTipoEmpresaNombre($this->getSql('nombre'));

			if (!$row) {
				$this->_view->assign('_error', 'No se ha podido registrar el tipo empresa');
				$this->_view->renderizar('add');
				exit;
			}else{
				$this->_view->assign('_mensaje', 'El tipo empresa se ha registrado correctamente');
				$this->_view->renderizar('index');
				exit;
			}

		}

		$this->_view->renderizar('add');
	}
}
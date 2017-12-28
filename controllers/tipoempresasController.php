<?php

class tipoempresasController extends Controller
{
	private $_tipo_empresa;

	public function __construct(){
		parent::__construct();
		$this->_tipo_empresa = $this->loadModel('tipoempresa');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Tipos de Empresa');
		$this->_view->assign('tipos', $this->_tipo_empresa->getTipoEmpresas());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();

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

			$this->redireccionar('tipoempresas');

		}

		$this->_view->renderizar('add');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Tipo Empresa');
		$this->_view->assign('tipo', $this->_tipo_empresa->getTipoEmpresaId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Tipo Empresa');
		$this->_view->assign('dato', $this->_tipo_empresa->getTipoEmpresaId($this->filtrarInt($id)));

		if ($this->getInt('enviar') == 1) {
			

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_tipo_empresa->editTipoEmpresa(
				$this->filtrarInt($id), 
				$this->getSql('nombre')
			);

			$this->redireccionar('tipoempresas');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_tipo_empresa->deleteTipoEmpresa($this->filtrarInt($id));
		$this->redireccionar('tipoempresas');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('tipoempresas');
		}

		if (!$this->_tipo_empresa->getTipoEmpresaId($this->filtrarInt($id))) {
			$this->redireccionar('tipoempresas');
		}
	}
}
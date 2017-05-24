<?php

class consultaController extends Controller
{
	private $_muebles;

	public function __construct(){
		parent::__construct();
		$this->_muebles = $this->loadModel('muebles');
	}

	public function index()
	{
		$this->_view->assign('titulo', 'Consultas e Informaciones');

		$usuario = Session::get('id_usuario');
		$this->_view->assign('publicaciones', $this->_muebles->getPublicacionesUser($usuario));

		$this->_view->renderizar('index');
	}
}
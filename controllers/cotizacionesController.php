<?php

class cotizacionesController extends Controller
{
	private $_cotizacion;

	public function __construct(){
		parent::__construct();
		$this->_cotizacion = $this->loadModel('cotizacion');
	}

	public function index(){

	}

	public function add(){
		$this->_view->assign('titulo', 'Cotizar');
		$this->_view->renderizar('add');
	}
}
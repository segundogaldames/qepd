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
		$this->verificarSession();

		$this->_view->assign('titulo', 'App::Urnas');
		$this->_view->assign('urnas', $this->_urna->getUrnas());
		$this->_view->renderizar('index');
	}

	public function addUrnaPlan($plan = null){
		$this->verificarSession();

		if (!$this->filtrarInt($plan)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Nueva Urna al Plan');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('modelo')) {
				$this->_view->assign('_error', 'Debe ingresar un modelo');
				$this->_view->renderizar('addUrnaPlan');
				exit;
			}

			if (!$this->getSql('medidas')) {
				$this->_view->assign('_error', 'Debe ingresar medidas de la urna');
				$this->_view->renderizar('addUrnaPlan');
				exit;
			}

			if (!$this->getSql('material')) {
				$this->_view->assign('_error', 'Debe ingresar materiales');
				$this->_view->renderizar('addUrnaPlan');
				exit;
			}

			if (!$this->getSql('terminaciones')) {
				$this->_view->assign('_error', 'Debe ingresar terminaciones');
				$this->_view->renderizar('addUrnaPlan');
				exit;
			}

			if (!$this->getSql('color')) {
				$this->_view->assign('_error', 'Debe ingresar colores');
				$this->_view->renderizar('addUrnaPlan');
				exit;
			}

			if ($this->_urna->getUrnaPlan($this->filtrarInt($plan))) {
				$this->_view->assign('_error', 'Este plan ya tiene una urna asociada');
				$this->_view->renderizar('addUrnaPlan');
				exit;
			}

			$this->_urna->addUrna(
				$this->getSql('modelo'), 
				$this->getSql('medidas'), 
				$this->getSql('material'), 
				$this->getSql('terminaciones'), 
				$this->getSql('color'), 
				$this->filtrarInt($plan)
				);

			$this->redireccionar('planes');
		}

		$this->_view->renderizar('addUrnaPlan');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Urna');
		$this->_view->assign('urna', $this->_urna->getUrnaId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function urnaPlan($plan = null){
		$this->verificarSession();
		if (!$this->_urna->getUrnaPlan($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Urna Plan');
		$this->_view->assign('urna', $this->_urna->getUrnaPlan($this->filtrarInt($plan)));
		$this->_view->renderizar('urnaPlan');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Urna');
		$this->_view->assign('dato', $this->_urna->getUrnaId($this->filtrarInt($id)));
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getSql('modelo')) {
				$this->_view->assign('_error', 'Debe ingresar el modelo');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('medidas')) {
				$this->_view->assign('_error', 'Debe ingresar las medidas');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('material')) {
				$this->_view->assign('_error', 'Debe ingresar el o los materiales');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('terminaciones')) {
				$this->_view->assign('_error', 'Debe ingresar terminaciones');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getSql('color')) {
				$this->_view->assign('_error', 'Debe ingresar el color');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar el plan');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_urna->editarUrna(
				$this->filtrarInt($id), 
				$this->getSql('modelo'), 
				$this->getSql('medidas'),
				$this->getSql('material'), 
				$this->getSql('terminaciones'), 
				$this->getSql('color'), 
				$this->getInt('plan')
			);

			$this->redireccionar('urnas');
		}
		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_urna->eliminarUrna($this->filtrarInt($id));
		$this->redireccionar('urnas');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('urnas');
		}

		if (!$this->_urna->getUrnaId($this->filtrarInt($id))) {
			$this->redireccionar('urnas');
		}
	}
}
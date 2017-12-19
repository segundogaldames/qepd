<?php 
/**
* 
*/
class mantencionesController extends Controller
{
	private $_mantencion;
	private $_solucion;
	
	public function __construct(){
		parent::__construct();
		$this->_mantencion = $this->loadModel('mantencion');
		$this->_solucion = $this->loadModel('solucion');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Mantenciones');
		$this->_view->assign('mantenciones', $this->_mantencion->getMantenciones());
		$this->_view->renderizar('index');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Mantención');
		$this->_view->assign('mantencion', $this->_mantencion->getMantencionId($this->filtrarInt($id)));
		$this->_view->renderizar('view');		
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Agregar Mantenciones');
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('cobro')) {
				$this->_view->assign('_error', 'Debe ingresar una opción de cobro');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('periodo')) {
				$this->_view->assign('_error', 'Debe ingresar una opción de periodo');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('solucion')) {
				$this->_view->assign('_error', 'Debe seleccionar una solución');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_mantencion->getMantencionSolucion($this->getInt('solucion'))) {
				$this->_view->assign('_error', 'Esta solución ya tiene su mantención...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_mantencion->addMantencion(
				$this->getInt('cobro'),
				$this->getInt('periodo'),
				$this->getInt('solucion')	
			);

			$this->redireccionar('mantenciones');
		}

		$this->_view->renderizar('add');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Mantenciones');
		$this->_view->assign('dato', $this->_mantencion->getMantencionId($this->filtrarInt($id)));
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());

		if ($this->getInt('enviar') == 1) {

			if (!$this->getInt('cobro')) {
				$this->_view->assign('_error', 'Debe ingresar una opción de cobro');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('periodo')) {
				$this->_view->assign('_error', 'Debe ingresar una opción de periodo');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('solucion')) {
				$this->_view->assign('_error', 'Debe seleccionar una solución');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_mantencion->editMantencion(
				$this->filtrarInt($id),
				$this->getInt('cobro'),
				$this->getInt('periodo'),
				$this->getInt('solucion')	
			);

			$this->redireccionar('mantenciones');
		}
		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		//print_r($id);exit;
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_mantencion->deleteMantencion($this->filtrarInt($id));
		$this->redireccionar('mantenciones');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('mantenciones');
		}

		if (!$this->_mantencion->getMantencionId($this->filtrarInt($id))) {
			$this->redireccionar('mantenciones');
		}
	}
}
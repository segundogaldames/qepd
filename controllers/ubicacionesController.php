<?php  
/**
* 
*/
class ubicacionesController extends Controller
{
	private $_ubicacion;
	private $_solucion;
	
	public function __construct(){
		parent::__construct();
		$this->_ubicacion = $this->loadModel('ubicacion');
		$this->_solucion = $this->loadModel('solucion');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo','APP::Ubicaciones');
		$this->_view->assign('ubicaciones', $this->_ubicacion->getUbicaciones());
		$this->_view->renderizar('index');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo','Ver Solucion');
		$this->_view->assign('ubicacion', $this->_ubicacion->getUbicacionId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo','Nueva Solucion');
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);
			//print_r($_POST);exit;

			if (!$this->getInt('ubicacion')) {
				$this->_view->assign('_error','Debe seleccionar una ubicación');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('estacionamiento')) {
				$this->_view->assign('_error','Debe seleccionar opción de estacionamiento');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('direccion')) {
				$this->_view->assign('_error','Debe debe ingresar la dirección');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('solucion')) {
				$this->_view->assign('_error','Debe seleccionar una solución');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_ubicacion->getUbicacionSolucion($this->getInt('solucion'))) {
				$this->_view->assign('_error','Esta solución ya tiene una ubicación');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_ubicacion->addUbicacion(
				$this->getInt('ubicacion'), 
				$this->getInt('estacionamiento'), 
				$this->getAlphaNum('direccion'), 
				$this->getInt('solucion')
			);

			$this->redireccionar('ubicaciones');
		}

		$this->_view->renderizar('add');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo','Editar Solucion');
		$this->_view->assign('soluciones', $this->_solucion->getSoluciones());
		$this->_view->assign('dato', $this->_ubicacion->getUbicacionId($this->filtrarInt($id)));

		if ($this->getInt('enviar') == 1) {

			if (!$this->getInt('ubicacion')) {
				$this->_view->assign('_error','Debe seleccionar una ubicación');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('estacionamiento')) {
				$this->_view->assign('_error','Debe seleccionar opción de estacionamiento');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('direccion')) {
				$this->_view->assign('_error','Debe debe ingresar la dirección');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('solucion')) {
				$this->_view->assign('_error','Debe seleccionar una solución');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_ubicacion->editUbicacion(
				$this->filtrarInt($id),
				$this->getInt('ubicacion'), 
				$this->getInt('estacionamiento'), 
				$this->getAlphaNum('direccion'), 
				$this->getInt('solucion')
			);

			$this->redireccionar('ubicaciones');
		}
		$this->_view->renderizar('edit');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('ubicaciones');
		}

		if (!$this->_ubicacion->getUbicacionId($this->filtrarInt($id))) {
			$this->redireccionar('ubicaciones');
		}
	}
}
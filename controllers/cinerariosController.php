<?php

class cinerariosController extends Controller
{
	private $_cinerario;
	private $_plan;

	public function __construct(){
		parent::__construct();
		$this->_cinerario = $this->loadModel('cinerario');
		$this->_plan = $this->loadModel('planes');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Cinerarios');
		$this->_view->assign('cinerarios', $this->_cinerario->getCinerarios());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Agregar Cinerario');
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos',$_POST);

			if (!$this->getInt('sala')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para sala velatorio');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('capilla')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para capilla ecuménica');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('podium')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para podium');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('liturgia')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para liturgia');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('amplificacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para amplificacion');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('diacono')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para diacono');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cafeteria')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para cafeteria');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('ceremonia')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para ceremonia');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('anforaincl')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para anforaincl');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para plan');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_cinerario->getCinerarioPlan($this->getInt('plan'))) {
				$this->_view->assign('_error', 'Este plan ya posee un cinerario. Intente con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_cinerario->addCinerario(
				$this->getInt('sala'), 
				$this->getInt('capilla'), 
				$this->getInt('podium'), 
				$this->getInt('liturgia'), 
				$this->getInt('amplificacion'), 
				$this->getInt('diacono'), 
				$this->getInt('coro'), 
				$this->getInt('cafeteria'), 
				$this->getInt('ceremonia'), 
				$this->getInt('anforaincl'), 
				$this->getInt('plan')
			);

			$this->redireccionar('cinerarios');
		}

		$this->_view->renderizar('add');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('cinerarios');
		}

		if (!$this->_cinerario->getCinerarioId($this->filtrarInt($id))) {
			$this->redireccionar('cinerarios');
		}
	}
}
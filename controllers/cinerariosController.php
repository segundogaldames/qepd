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

	public function addCinerarioPlan($plan = null){
		$this->verificarSession();

		if (!$this->filtrarInt($plan)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Agregar Cinerario');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos',$_POST);

			if (!$this->getInt('sala')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para sala velatorio');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if (!$this->getInt('capilla')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para capilla ecuménica');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if (!$this->getInt('podium')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para podium');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if (!$this->getInt('liturgia')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para liturgia');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if (!$this->getInt('amplificacion')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para amplificacion');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if (!$this->getInt('diacono')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para diacono');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if (!$this->getInt('cafeteria')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para cafeteria');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if (!$this->getInt('ceremonia')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para ceremonia');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if (!$this->getInt('anforaincl')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción para anforaincl');
				$this->_view->renderizar('addCinerarioPlan');
				exit;
			}

			if ($this->_cinerario->getCinerarioPlan($this->getInt('plan'))) {
				$this->_view->assign('_error', 'Este plan ya posee un cinerario. Intente con otro');
				$this->_view->renderizar('addCinerarioPlan');
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
				$this->filtrarInt($plan)
			);

			$this->redireccionar('planes');
		}

		$this->_view->renderizar('addCinerarioPlan');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo','Ver Cinerario');
		$this->_view->assign('cinerario', $this->_cinerario->getCinerarioId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function cinerarioPlan($plan = null){
		$this->verificarSession();

		if (!$this->_cinerario->getCinerarioPlan($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Cinerario Plan');
		$this->_view->assign('cinerario', $this->_cinerario->getCinerarioPlan($this->filtrarInt($plan)));
		$this->_view->renderizar('cinerarioPlan');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Cinerario');
		$this->_view->assign('dato', $this->_cinerario->getCinerarioId($this->filtrarInt($id)));

		if ($this->getInt('enviar') == 1) {
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

			$this->_cinerario->editCinerario(
				$this->filtrarInt($id), 
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

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_cinerario->deleteCinerario($this->filtrarInt($id));
		$this->redireccionar('cinerarios');
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
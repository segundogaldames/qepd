<?php 
/**
* 
*/
class anforasController extends Controller
{
	private $_anfora;
	private $_plan;

	public function __construct(){
		parent::__construct();
		$this->_anfora = $this->loadModel('anfora');
		$this->_plan = $this->loadModel('planes');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Anforas');
		$this->_view->assign('anforas', $this->_anfora->getAnforas());
		$this->_view->renderizar('index');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Anfora');
		$this->_view->assign('anfora', $this->_anfora->getAnforaId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function anforaPlan($plan){
		$this->verificarSession();
		
		if (!$this->_anfora->getAnforaPlan($this->filtrarInt($plan))) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Anfora Plan');
		$this->_view->assign('anfora', $this->_anfora->getAnforaPlan($this->filtrarInt($plan)));
		$this->_view->renderizar('anforaPlan');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Anfora');
		$this->_view->assign('dato', $this->_anfora->getAnforaId($this->filtrarInt($id)));
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getSql('modelo')) {
				$this->_view->assign('_error', 'Debe ingresar el modelo');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar el plan');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('descripcion')) {
				$this->_view->assign('_error', 'Debe describir el ánfora');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_anfora->editAnfora(
				$this->filtrarInt($id),
				$this->getAlphaNum('modelo'),
				$this->getInt('plan'),
				$this->getSql('descripcion')
			);

			$this->redireccionar('anforas');
		}

		$this->_view->renderizar('edit');
	}


	public function addAnforaPlan($plan = null){
		$this->verificarSession();

		if (!$this->filtrarInt($plan)) {
			$this->redireccionar('planes');
		}

		if (!$this->_plan->getPlanesId($plan)) {
			$this->redireccionar('planes');
		}

		$this->_view->assign('titulo', 'Nueva Anfora');

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('modelo')) {
				$this->_view->assign('_error', 'Debe ingresar el modelo');
				$this->_view->renderizar('addAnforaPlan');
				exit;
			}

			if (!$this->getSql('descripcion')) {
				$this->_view->assign('_error', 'Debe describir el ánfora');
				$this->_view->renderizar('addAnforaPlan');
				exit;
			}

			if ($this->_anfora->getAnforaPlan($this->filtrarInt($plan))) {
				$this->_view->assign('_error', 'El plan ya tiene ánfora...');
				$this->_view->renderizar('addAnforaPlan');
				exit;
			}

			$this->_anfora->addAnfora(
				$this->getAlphaNum('modelo'),
				$this->filtrarInt($plan),
				$this->getSql('descripcion')
			);

			$this->redireccionar('planes');
		}

		$this->_view->renderizar('addAnforaPlan');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_anfora->deleteAnfora($this->filtrarInt($id));
		$this->redireccionar('anforas');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('anforas');
		}

		if (!$this->_anfora->getAnforaId($this->filtrarInt($id))) {
			$this->redireccionar('anforas');
		}
	}
}

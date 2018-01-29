<?php 
/**
* 
*/
class asuntosController extends Controller
{
	private $_asunto;
	
	public function __construct(){
		parent::__construct();
		$this->_asunto = $this->loadModel('asunto');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Asuntos');
		$this->_view->assign('asuntos', $this->_asunto->getAsuntos());
		$this->_view->renderizar('index');
	}

	public function view($id = null){

	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Nuevo Asunto');

		if ($this->getInt('enviar') == 1) {
			//print_r($_POST);exit;
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un asunto');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_asunto->getAsuntoNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El asunto ya existe... Intente con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_asunto->addAsunto($this->getAlphaNum('nombre'));
			$this->redireccionar('asuntos');
		}
		$this->_view->renderizar('add');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Asunto');
		$this->_view->assign('dato', $this->_asunto->getAsuntoId($this->filtrarInt($id)));

		if ($this->getInt('enviar') == 1) {
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre del asunto');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_asunto->editAsunto($this->filtrarInt($id), $this->getAlphaNum('nombre'));
			$this->redireccionar('asuntos');
		}
		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_asunto->deleteAsunto($this->filtrarInt($id));
		$this->redireccionar('asuntos');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('asuntos');
		}

		if (!$this->_asunto->getAsuntoId($this->filtrarInt($id))) {
			$this->redireccionar('asuntos');
		}
	}
}
<?php 
/**
* 
*/
class contactoclientesController extends Controller
{
	private $_contactocliente;
	private $_contacto;
	
	public function __construct(){
		parent::__construct();
		$this->_contacto = $this->loadModel('contacto');
		$this->_contactocliente = $this->loadModel('contactocliente');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Contacto Clientes');
		$this->_view->assign('contactoClientes', $this->_contactocliente->getContactoClientes());
		$this->_view->renderizar('index');
	}

	public function pendientes(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Contacto Clientes Pendientes');
		$this->_view->assign('contactoClientes', $this->_contactocliente->getContactoClientesPendientes());
		$this->_view->renderizar('pendientes');
	}

	public function add($contacto = null){
		$this->verificarSession();
		$this->verificarContacto($contacto);
		
		$this->_view->assign('titulo', 'Contactar Cliente');
		$this->_view->assign('contacto', $this->_contacto->getContactoId($this->filtrarInt($contacto)));

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('observaciones')) {
				$this->_view->assign('_error', 'Debe escribir una observación para este contacto');
				$this->_view->renderizar('add');
				exit;
			}
			
			$this->_contactocliente->addContactoCliente(
				$this->getSql('observaciones'),
				$this->filtrarInt($contacto)
			);

			$this->redireccionar('contactoclientes');
		}
		$this->_view->renderizar('add');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('contactoclientes');
		}
	}

	private function verificarContacto($contacto){
		if (!$this->filtrarInt($contacto)) {
			$this->redireccionar('contactos');
		}

		if (!$this->_contacto->getContactoId($this->filtrarInt($contacto))) {
			$this->redireccionar('contactos');
		}
	}
}
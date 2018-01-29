<?php 
/**
* 
*/
class ContactosController extends Controller
{
	private $_contacto;
	private $_asunto;
	
	public function __construct(){
		parent::__construct();
		$this->_contacto = $this->loadModel('contacto');
		$this->_asunto = $this->loadModel('asunto');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Contactos');
		$this->_view->assign('contactos', $this->_contacto->getContactos());
		$this->_view->renderizar('index');
	}

	public function mensaje(){
		$this->_view->assign('titulo', 'APP::Mensaje');
		$this->_view->renderizar('mensaje');
	}

	public function add(){
		$this->_view->assign('titulo', 'Generar Contacto');
		$this->_view->assign('asuntos', $this->_asunto->getAsuntos());

		if ($this->getInt('enviar') == 1) {
			//print_r($_POST);exit;
			$this->_view->assign('datos', $_POST);

			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar su correo electrónico');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electrónico ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('telefono') && strlen($this->getInt('telefono')) < 8) {
				$this->_view->assign('_error', 'El teléfono ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('asunto')) {
				$this->_view->assign('_error', 'Debe seleccionar un asunto');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('mensaje')) {
				$this->_view->assign('_error', 'Debe escribir un mensaje');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('urgente')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_contacto->addContacto(
				$this->getPostParam('email'),
				$this->getInt('asunto'),
				$this->getAlphaNum('mensaje'),
				$this->getInt('telefono'),
				$this->getInt('urgente')
			);

			$this->redireccionar('contactos/mensaje');
		}
		$this->_view->renderizar('add');
	}
}
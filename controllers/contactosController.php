<?php 
/**
* 
*/
class ContactosController extends Controller
{
	private $_contacto;
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){

	}

	public function add(){
		$this->_view->assign('titulo', 'Generar Contacto');

		if ($this->getInt('enviar') == 1) {
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

			$this->_contacto->addContacto(
				$this->getPostParam('email'),
				$this->getInt('asunto'),
				$this->getAlphaNum('mensaje')
			);

			$this->redireccionar();
		}
		$this->_view->renderizar('add');
	}
}
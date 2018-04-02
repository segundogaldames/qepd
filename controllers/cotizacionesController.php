<?php

class cotizacionesController extends Controller
{
	private $_cotizacion;
	private $_plan;
	private $_destinatario;
	private $_comuna;
	private $_status;

	public function __construct(){
		parent::__construct();
		$this->_cotizacion = $this->loadModel('cotizacion');
		$this->_plan = $this->loadModel('planes');
		$this->_destinatario = $this->loadModel('destinatario');
		$this->_comuna = $this->loadModel('comuna');
		$this->_status = $this->loadModel('status');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'APP::Cotizaciones');
		$this->_view->assign('cotizaciones', $this->_cotizacion->getCotizaciones());
		$this->_view->renderizar('index');
	}

	public function mensajes(){
		$this->_view->assign('titulo', 'Mensajes');
		$this->_view->renderizar('mensajes');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);		

		$this->_view->assign('titulo', 'Ver Cotizacion');
		$this->_view->assign('cotizacion', $this->_cotizacion->getCotizacionId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function cotizacionCliente(){

		$this->_view->assign('titulo', 'Cotizacion Cliente');
		$this->_view->assign('cotizacion', $this->_cotizacion->getCotizacionCliente(Session::get('cliente')));
		$this->_view->renderizar('cotizacionCliente');	
	}

	public function add($plan = null){
		if (!$this->filtrarInt($plan)) {
			$this->redireccionar('planes/planesServicios');
		}

		if (!$this->_plan->getPlanesId($this->filtrarInt($plan))) {
			$this->redireccionar('planes/planesServicios');
		}

		$this->_view->assign('titulo', 'APP::Cotizar');
		$this->_view->assign('destinatarios', $this->_destinatario->getDestinatarios());
		$this->_view->assign('comunas', $this->_comuna->getComunas());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('opcion')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de compra');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('cliente')) {
				$this->_view->assign('_error', 'Debe ingresar su nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if (strlen($this->getInt('fono_movil')) < 8) {
				$this->_view->assign('_error', 'El número de teléfono movil ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('fono_fijo') && $this->getInt('fono_fijo') < 8) {
				$this->_view->assign('_error', 'El número de teléfono fijo ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar su correo electrónico');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electrónico ingresado no es válido...');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('comuna')) {
				$this->_view->assign('_error', 'Debe seleccionar la comuna donde está el difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_cotizacion->addCotizacion(
				$this->filtrarInt($plan), 
				$this->getAlphaNum('cliente'), 
				$this->getAlphaNum('rut'), 
				$this->getInt('fono_fijo'), 
				$this->getInt('fono_movil'), 
				$this->getPostParam('email'), 
				$this->getInt('comuna'), 
				$this->getSql('mensaje'),
				$this->getInt('opcion') 
			);

			if ($this->_cotizacion->getCotizacionCliente($this->getAlphaNum('cliente'))) {
				Session::set('cliente', $this->getAlphaNum('cliente'));
				$this->redireccionar('cotizaciones/cotizacionCliente');
			}else{
				$this->_view->assign('_error', 'La cotización no ha sido ingresada, intente nuevamente');
				$this->_view->renderizar('add');
				exit;
			}

		}

		$this->_view->renderizar('add');
	}

	public function editCotizacion($id = null){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('planes/planesServicios');
		}

		if (!$this->_cotizacion->getCotizacionId($this->filtrarInt($id))) {
			$this->redireccionar('planes/planesServicios');
		}

		$this->_view->assign('titulo', 'Modificar Cotizacion');
		$this->_view->assign('dato', $this->_cotizacion->getCotizacionId($this->filtrarInt($id)));

		if ($this->getInt('enviar') == 1) {
			
			if (!$this->getInt('opcion')) {
				$this->_view->assign('_error', 'Debe selecionar una opción de compra');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('cliente')) {
				$this->_view->assign('_error', 'Debe ingresar su nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('fono_fijo') && $this->getInt('fono_fijo') < 8) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('fono_movil')) {
				$this->_view->assign('_error', 'Debe ingresar su teléfono móvil');
				$this->_view->renderizar('add');
				exit;
			}

			if (strlen($this->getInt('fono_movil')) < 8) {
				$this->_view->assign('_error', 'El número ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar su correo electrónico');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electrónico ingresado no es válido...');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('comuna')) {
				$this->_view->assign('_error', 'Debe seleccionar la comuna donde está el difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_cotizacion->editCotizacionCliente(
				$this->filtrarInt($id), 
				$this->filtrarInt($plan), 
				$this->getAlphaNum('cliente'), 
				$this->getAlphaNum('rut'), 
				$this->getInt('fono_fijo'), 
				$this->getInt('fono_movil'), 
				$this->getPostParam('email'), 
				$this->getInt('comuna'), 
				$this->getSql('mensaje'),
				$this->getInt('opcion')
			);

			$this->redireccionar('cotizaciones/mensajes');
		}
		
		$this->_view->renderizar('editCotizacion');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Status de Cotizacion');
		$this->_view->assign('dato', $this->_cotizacion->getCotizacionId($this->filtrarInt($id)));
		$this->_view->assign('status', $this->_status->getStatus());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getInt('status')) {
				$this->_view->assign('_error', 'Debe seleccionar un status');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_cotizacion->editCotizacionAdmin(
				$this->filtrarInt($id), 
				$this->getInt('status'));

			$this->redireccionar('cotizaciones');
		}

		$this->_view->renderizar('edit');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('cotizaciones');
		}

		if (!$this->_cotizacion->getCotizacionId($this->filtrarInt($id))) {
			$this->redireccionar('cotizaciones');
		}
	}
}
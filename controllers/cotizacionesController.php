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

			if (!$this->getInt('destinatario')) {
				$this->_view->assign('_error', 'Debe seleccionar un destinatario');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('edad')) {
				$this->_view->assign('_error', 'Debe ingresar la edad del difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('edad') < 0 || $this->getInt('edad') > 120) {
				$this->_view->assign('_error', 'La edad ingresada no es válida...');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('alto')) {
				$this->_view->assign('_error', 'Debe ingresar la estatura del difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('alto') < 0 || $this->getInt('alto') > 220) {
				$this->_view->assign('_error', 'La estatura ingresada no es válida...');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('peso')) {
				$this->_view->assign('_error', 'Debe ingresar el peso del difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('peso') < 0 || $this->getInt('edad') > 250) {
				$this->_view->assign('_error', 'El peso ingresado no es válido...');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('comuna')) {
				$this->_view->assign('_error', 'Debe seleccionar la comuna donde está el difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_cotizacion->addCotizacion(
				$this->getInt('destinatario'), 
				$this->filtrarInt($plan), 
				$this->getAlphaNum('cliente'), 
				$this->getAlphaNum('rut'), 
				$this->getInt('fono_fijo'), 
				$this->getInt('fono_movil'), 
				$this->getPostParam('email'), 
				$this->getAlphaNum('difunto'), 
				$this->getInt('edad'), 
				$this->getInt('alto'), 
				$this->getInt('peso'), 
				$this->getInt('comuna'), 
				$this->getSql('mensaje')
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

			if (!$this->getInt('destinatario')) {
				$this->_view->assign('_error', 'Debe seleccionar un destinatario');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('edad')) {
				$this->_view->assign('_error', 'Debe ingresar la edad del difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('edad') < 0 || $this->getInt('edad') > 120) {
				$this->_view->assign('_error', 'La edad ingresada no es válida...');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('alto')) {
				$this->_view->assign('_error', 'Debe ingresar la estatura del difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('alto') < 0 || $this->getInt('alto') > 220) {
				$this->_view->assign('_error', 'La estatura ingresada no es válida...');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('peso')) {
				$this->_view->assign('_error', 'Debe ingresar el peso del difunt@');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getInt('peso') < 0 || $this->getInt('edad') > 250) {
				$this->_view->assign('_error', 'El peso ingresado no es válido...');
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
				$this->getInt('destinatario'), 
				$this->filtrarInt($plan), 
				$this->getAlphaNum('cliente'), 
				$this->getAlphaNum('rut'), 
				$this->getInt('fono_fijo'), 
				$this->getInt('fono_movil'), 
				$this->getPostParam('email'), 
				$this->getAlphaNum('difunto'), 
				$this->getInt('edad'), 
				$this->getInt('alto'), 
				$this->getInt('peso'), 
				$this->getInt('comuna'), 
				$this->getSql('mensaje')
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
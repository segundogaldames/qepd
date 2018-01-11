<?php 
/**
* 
*/
class contactocotizacionesController extends Controller
{
	private $_contacto;
	private $_cotizacion;
	private $_destinatario;
	
	public function __construct(){
		parent::__construct();
		$this->_cotizacion = $this->loadModel('cotizacion');
		$this->_contacto = $this->loadModel('contactocotizacion');
		$this->_destinatario = $this->loadModel('destinatario');
	}

	public function index(){

	}

	public function add($cotizacion = null){
		$this->verificarSession();

		if (!$this->filtrarInt($cotizacion)) {
			$this->redireccionar('cotizaciones');
		}

		if (!$this->_cotizacion->getCotizacionId($this->filtrarInt($cotizacion))) {
			$this->redireccionar('cotizaciones');
		}

		$this->_view->assign('titulo', 'APP::Contactar Cliente');
		$this->_view->assign('cotizacion', $this->_cotizacion->getCotizacionId($this->filtrarInt($cotizacion)));
		$this->_view->assign('destinatarios', $this->_destinatario->getDestinatarios());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('mensaje')) {
				$this->_view->assign('_error', 'Debe ingresar observaciones a este contacto');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_contacto->addContactoCotizacion(
				$this->getInt('destinatario'),
				$this->getAlphaNum('nombre'),
				$this->getInt('edad'),
				$this->getInt('estatura'),
				$this->getInt('peso'),
				$this->getSql('mensaje'),
				$this->filtrarInt('cotizacion')
			);

			$this->redireccionar('cotizaciones');
		}

		$this->_view->renderizar('add');
	}
}
<?php

class imagenesController extends Controller
{
	private $_componente;
	private $_plan;
	private $_imagen;
	private $_condicion;
	private $_urna;
	private $_traslado;
	private $_velatorio;
	private $_cinerario;
	private $_anfora;
	private $_sepultacion;
	private $_solucion;

	public function __construct(){
		parent::__construct();
		$this->_componente = $this->loadModel('componente');
		$this->_plan = $this->loadModel('planes');
		$this->_imagen = $this->loadModel('imagen');
		$this->_condicion = $this->loadModel('condicion');
		$this->_urna = $this->loadModel('urna');
		$this->_traslado = $this->loadModel('traslado');
		$this->_velatorio = $this->loadModel('velatorio');
		$this->_cinerario = $this->loadModel('cinerario');
		$this->_anfora = $this->loadModel('anfora');
		$this->_sepultacion = $this->loadModel('sepultacion');
		$this->_solucion = $this->loadModel('solucion');
	}

	public function index(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Imágenes');
		$this->_view->assign('imagenes', $this->_imagen->getImagenes());
		$this->_view->renderizar('index');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Imagen');
		$this->_view->assign('imagen', $this->_imagen->getImagenId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function imagenesplan($id = null){
		//print_r($id);exit;
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('planes');
		}


		$this->_view->assign('titulo', 'Consulta Planes');
		$this->_view->assign('imagenes', $this->_imagen->getImagenesPlan($this->filtrarInt($id)));
		$this->_view->assign('condiciones', $this->_condicion->getCondicionesPlan($this->filtrarInt($id)));
		$this->_view->assign('urna', $this->_urna->getUrnaPlan($this->filtrarInt($id)));
		$this->_view->assign('traslado', $this->_traslado->getTrasladoPlan($this->filtrarInt($id)));
		$this->_view->assign('velatorio', $this->_velatorio->getVelatorioPlan($this->filtrarInt($id)));
		$this->_view->assign('cinerario', $this->_cinerario->getCinerarioPlan($this->filtrarInt($id)));
		$this->_view->assign('anfora', $this->_anfora->getAnforaPlan($this->filtrarInt($id)));
		$this->_view->assign('sepultacion', $this->_sepultacion->getSepultacionPlan($this->filtrarInt($id)));
		$this->_view->assign('solucion', $this->_solucion->getSolucionPlan($this->filtrarInt($id)));
		$this->_view->renderizar('imagenesplan');

	}

	public function add(){
		$this->verificarSession();

		$this->_view->assign('titulo', 'Nueva Imagen');
		$this->_view->assign('componentes', $this->_componente->getComponentes());
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('componente')) {
				$this->_view->assign('_error', 'Debe seleccionar el componente');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar el plan');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('titulo')) {
				$this->_view->assign('_error', 'Debe ingresar el título de la imagen');
				$this->_view->renderizar('add');
				exit;
			}

			$imagen = '';
					
			if(isset($_FILES['imagen']['name'])){
				$this->getLibrary('upload' . DS . 'class.upload');//llamada a la clase upload por la ruta de la clase
				$ruta = ROOT . 'public' . DS . 'img' . DS . 'componentes' . DS;
				@$upload = new upload($_FILES['imagen'], 'es_ES'); //instanciacion de la clase upload
				$upload->allowed = array('image/*');//tipos de imagenes permitidas, en este caso, todas
				$upload->file_new_name_body = 'upl_' . uniqid();//se cambia el nombre al archivo
				$upload->process($ruta);//ruta de alamcenamiento del archivo
					
				if($upload->processed){
					//si la imagen fue procesada, se creara una miniatura
					$imagen = $upload->file_dst_name;
					@$thumb = new upload($upload->file_dst_pathname); //instanciacion del objeto apuntando a la ruta de almacenamiento del archivo
					$thumb->image_resize = true;
					$thumb->image_x = 90;
					$thumb->image_y = 70;
					$thumb->file_name_body_pre = 'thumb_'; //nuevo nombre de la miniatura
					$thumb->process($ruta . 'thumb' . DS); //nueva ruta de la miniatura	
				}
				else{
					$this->_view->assign('_error', $upload->error);
					$this->_view->renderizar('add');
					exit;
				}
			}

			

			$this->_imagen->addImagenes(
				$this->getSql('titulo'), 
				$imagen, 
				$this->getInt('componente'), 
				$this->getInt('plan')
				);

			$this->redireccionar('imagenes');
		}
		$this->_view->renderizar('add');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Imagen');
		$this->_view->assign('dato', $this->_imagen->getImagenId($this->filtrarInt($id)));
		$this->_view->assign('componentes', $this->_componente->getComponentes());
		$this->_view->assign('planes', $this->_plan->getPlanes());

		if ($this->getInt('enviar') == 1) {
			//print_r($_POST);exit;
			if (!$this->getSql('titulo')) {
				$this->_view->assign('_error', 'Debe ingresar el título de la imagen');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('componente')) {
				$this->_view->assign('_error', 'Debe seleccionar el componente');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('plan')) {
				$this->_view->assign('_error', 'Debe seleccionar el plan');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_imagen->editImagen(
				$this->filtrarInt($id), 
				$this->getAlphaNum('titulo'), 
				$this->getInt('componente'), 
				$this->getInt('plan')
			);

			$this->redireccionar('imagenes');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarParams($id);

		$this->_imagen->deleteImagen($this->filtrarInt($id));
		$this->redireccionar('imagenes');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('imagenes');
		}

		if (!$this->_imagen->getImagenId($this->filtrarInt($id))) {
			$this->redireccionar('imagenes');
		}
	}
}
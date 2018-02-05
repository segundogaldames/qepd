<?php 
/**
* 
*/
class adminController extends Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->redireccionar('usuarios/login');
	}
}
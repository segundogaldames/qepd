<?php

class regionesController extends Controller
{
	private $_region;

	public function __construct(){
		parent::__construct();
		$this->_region = $this->loadModel('region');
	}

	public function index(){
		
	}
}
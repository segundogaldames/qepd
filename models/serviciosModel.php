<?php

class serviciosModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function addServicios($nombre, $empresa){
		$empresa = (int) $empresa;

		$serv = $this->_db->prepare("INSERT INTO servicios VALUES(null, ?, ?)");
		$serv->bindParam(1, $nombre);
		$serv->bindParam(2, $empresa);
		$serv->execute();
	}
}
<?php

class tipoplanModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getTipoPlanes(){
		$tplan = $this->_db->query("SELECT id, nombre FROM tipo_planes ORDER BY nombre");
		return $tplan->fetchall();
	}

	public function getTipoPlanesNombre($nombre){
		$tplan = $this->_db->prepare("SELECT id FROM tipo_planes WHERE nombre = ?");
		$tplan->bindParam(1, $nombre);
		$tplan->execute();

		return $tplan->fetch();
	}

	public function setTipoPlanes($nombre){
		$tplan = $this->_db->prepare("INSERT INTO tipo_planes VALUES(null, ?)");
		$tplan->bindParam(1, $nombre);
		$tplan->execute();
	}
}
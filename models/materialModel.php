<?php

class materialModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getMateriales(){
		$mat = $this->_db->query("SELECT id, nombre FROM materiales");
		return $mat->fetchall();
	}

	public function getMaterialNombre($nombre){
		$mat = $this->_db->prepare("SELECT id FROM materiales WHERE nombre = ?");
		$mat->bindParam(1, $nombre);
		$mat->execute();

		return $mat->fetch();
	}

	public function addMateriales($nombre){
		$mat = $this->_db->prepare("INSERT INTO materiales VALUES(null, ?)");
		$mat->bindParam(1, $nombre);
		$mat->execute();
	}
}
<?php

class tipoconstruccionModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getTipoConstrucciones(){
		$tc = $this->_db->query("SELECT id, nombre FROM tipo_construcciones ORDER BY nombre ASC");
		return $tc->fetchall();
	}

	public function getTipoConstruccionesNombre($nombre){
		$tc = $this->_db->prepare("SELECT id FROM tipo_construcciones WHERE nombre = ?");
		$tc->bindParam(1, $nombre);
		$tc->execute();

		return $tc->fetch();
	}

	public function addTipoConstrucciones($nombre){
		$tc = $this->_db->prepare("INSERT INTO tipo_construcciones VALUES(null, ?)");
		$tc->bindParam(1, $nombre);
		$tc->execute();
	}
}
<?php

class tiposolucionModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getTipoSoluciones(){
		$tsol = $this->_db->query("SELECT id, nombre FROM tipo_soluciones ORDER BY nombre ASC");
		return $tsol->fetchall();
	}

	public function getTipoSolucionNombre($nombre){
		$tsol = $this->_db->prepare("SELECT id FROM tipo_soluciones WHERE nombre = ?");
		$tsol->bindParam(1, $nombre);
		$tsol->execute();

		return $tsol->fetch();
	}

	public function addTipoSoluciones($nombre){
		$tsol = $this->_db->prepare("INSERT INTO tipo_soluciones VALUES(null, ?)");
		$tsol->bindParam(1, $nombre);
		$tsol->execute();
	}
}
<?php

class comunaModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getComunas(){
		$com = $this->_db->query("SELECT c.id, c.nombre as comuna, r.nombre as region FROM regiones as r INNER JOIN comunas as c ON c.region_id = r.id");
		return $com->fetchall();
	}

	public function getComunasNombre($nombre){
		$com = $this->_db->prepare("SELECT id FROM comunas WHERE nombre = ?");
		$com->bindParam(1, $nombre);
		$com->execute();

		return $com->fetch();
	}

	public function getComunasRegion($region){
		$region = (int) $region;

		$com = $this->_db->prepare("SELECT id, nombre FROM comunas WHERE region_id = ?");
		$com->bindParam(1, $region);
		$com->execute();

		return $com->fetchall();
	}

	public function setComunas($nombre, $region){
		$com = $this->_db->prepare("INSERT INTO comunas VALUES(null, ?, ?)");
		$com->bindParam(1, $nombre);
		$com->bindParam(2, $region);
		$com->execute();
	}
}
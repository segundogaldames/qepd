<?php

class comunaModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getComunas(){
		$com = $this->_db->query("SELECT c.id, c.nombre as comuna, r.nombre as region FROM regiones as r INNER JOIN comunas as c ON c.region_id = r.id ORDER BY c.nombre");
		return $com->fetchall();
	}

	public function getComunaId($id){
		$id = (int) $id;

		$com = $this->_db->prepare("SELECT c.id, c.nombre, c.region_id, r.nombre as region FROM comunas as c INNER JOIN regiones as r ON c.region_id = r.id WHERE c.id = ?");
		$com->bindParam(1, $id);
		$com->execute();

		return $com->fetch();
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

	public function editComuna($id, $nombre, $region){
		//print_r($region);exit;
		$id = (int) $id;
		$region = (int) $region;

		$com = $this->_db->prepare("UPDATE comunas SET nombre = ?, region_id = ? WHERE id = ?");
		$com->bindParam(1, $nombre);
		$com->bindParam(2, $region);
		$com->bindParam(3, $id);
		$com->execute();
	}

	public function setComunas($nombre, $region){
		$com = $this->_db->prepare("INSERT INTO comunas VALUES(null, ?, ?)");
		$com->bindParam(1, $nombre);
		$com->bindParam(2, $region);
		$com->execute();
	}

	public function eliminarComuna($id){
		$id = (int) $id;

		$com = $this->_db->prepare("DELETE FROM comunas WHERE id = ?");
		$com->bindParam(1, $id);
		$com->execute();
	}
}
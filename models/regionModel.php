<?php

class regionModel extends Model
{
	public function getRegiones(){
		$reg = $this->_db->query("SELECT id, nombre FROM regiones");
		return $reg->fetchall();
	}

	public function getRegionId($id){
		$id = (int) $id;

		$reg = $this->_db->prepare("SELECT id, nombre FROM regiones WHERE id = ?");
		$reg->bindParam(1, $id);
		$reg->execute();

		return $reg->fetch();
	}

	public function getRegionNombre($nombre){
		$reg = $this->_db->prepare("SELECT id FROM regiones WHERE nombre = ?");
		$reg->bindParam(1, $nombre);
		$reg->execute();

		return $reg->fetch();
	}

	public function addRegiones($nombre){
		$reg = $this->_db->prepare("INSERT INTO regiones VALUES(null, ?)");
		$reg->bindParam(1, $nombre);
		$reg->execute();
	}
}
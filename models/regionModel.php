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

	#muestra regiones que tienen planes
	public function getRegionesPlanes(){
		$reg = $this->_db->query("SELECT distinct r.id, r.nombre as region FROM planes p INNER JOIN empresas e ON p.empresa_id = e.id INNER JOIN sedes s ON s.empresa_id = e.id INNER JOIN comunas c ON s.comuna_id = c.id INNER JOIN regiones r ON c.region_id = r.id WHERE p.status_id = 2 ORDER by region");

		return $reg->fetchall();
	}

	public function addRegion($nombre){
		$reg = $this->_db->prepare("INSERT INTO regiones VALUES(null, ?)");
		$reg->bindParam(1, $nombre);
		$reg->execute();
	}

	public function editRegion($id, $nombre){
		$id = (int) $id;

		$reg = $this->_db->prepare("UPDATE regiones SET nombre = ? WHERE id = ?");
		$reg->bindParam(1, $nombre);
		$reg->bindParam(2, $id);
		$reg->execute();
	}
}
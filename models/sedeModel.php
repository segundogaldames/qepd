<?php

class sedeModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getSedes(){
		$sede = $this->_db->query("SELECT s.id, s.nombre as sede, s.calle, s.numero, s.sector, s.ubicacion, e.nombre as empresa, c.nombre as comuna FROM empresas as e INNER JOIN sedes as s ON s.empresa_id = e.id INNER JOIN comunas as c ON s.comuna_id = c.id");
		return $sede->fetchall();
	}

	public function getSedesId($id){
		$id = (int) $id;

		$sede = $this->_db->query("SELECT id FROM sedes WHERE id = $id");
		return $sede->fetch();
	}

	public function getSedeNombre($nombre){
		$sede = $this->_db->prepare("SELECT id, nombre FROM sedes WHERE nombre = ?");
		$sede->bindParam(1, $nombre);
		$sede->execute();

		return $sede->fetch();
	}

	public function getSedeNombreEmpresa($nombre, $empresa){
		$empresa = (int) $empresa;

		$sede = $this->_db->prepare("SELECT nombre, empresa FROM sedes WHERE nombre = ? AND empresa_id = ?");
		$sede->bindParam(1, $nombre);
		$sede->bindParam(2, $empresa);
		$sede->execute();

		return $sede->fetch();
	}

	public function getSedeEmpresa($id){
		$id = (int) $id;

		//print_r($id);exit;

		$sede = $this->_db->query("SELECT s.id, s.nombre as sede, s.calle, s.numero, s.sector, s.ubicacion, e.nombre as empresa, c.nombre as comuna FROM empresas as e INNER JOIN sedes as s ON s.empresa_id = e.id INNER JOIN comunas as c ON s.comuna_id = c.id WHERE s.empresa_id = $id");
		return $sede->fetchall();
	}

	public function getSedeId($id){
		$id = (int) $id;

		$sede = $this->_db->prepare("SELECT s.id, s.nombre as sede, s.calle, s.numero, s.sector, s.ubicacion, e.nombre as empresa, c.nombre as comuna FROM empresas as e INNER JOIN sedes as s ON s.empresa_id = e.id INNER JOIN comunas as c ON s.comuna_id = c.id WHERE s.id = ?");
		$sede->bindParam(1, $id);
		$sede->execute();

		return $sede->fetch();
	}

	public function setSede($nombre, $calle, $numero, $sector, $ubicacion, $empresa, $comuna){
		$numero = (int) $numero;
		$empresa = (int) $empresa;
		$comuna = (int) $comuna;

		$sede = $this->_db->prepare("INSERT INTO sedes VALUES(null, ?, ?, ?, ?, ?, ?, ?)");
		$sede->bindParam(1, $nombre);
		$sede->bindParam(2, $calle);
		$sede->bindParam(3, $numero);
		$sede->bindParam(4, $sector);
		$sede->bindParam(5, $ubicacion);
		$sede->bindParam(6, $empresa);
		$sede->bindParam(7, $comuna);
		$sede->execute();
	}
}
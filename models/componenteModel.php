<?php

class componenteModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getComponentes(){
		$com = $this->_db->query("SELECT c.id, c.nombre, s.nombre as servicio, c.url, c.url_view FROM servicios as s INNER JOIN componentes as c ON s.id = c.servicio_id");
		return $com->fetchall();
	}

	public function getComponenteId($id){
		$id = (int) $id;

		$com = $this->_db->prepare("SELECT id, nombre, servicio_id, url, url_view FROM componentes WHERE id = ?");
		$com->bindParam(1, $id);
		$com->execute();

		return $com->fetch();
	}

	public function getComponenteNombre($nombre){
		$com = $this->_db->prepare("SELECT id FROM componentes WHERE nombre = ?");
		$com->bindParam(1, $nombre);
		$com->execute();

		return $com->fetch();
	}

	public function getComponentesServicios($id){
		$id = (int) $id;

		$com = $this->_db->prepare("SELECT id, nombre, servicio_id, url, url_view FROM componentes WHERE servicio_id = ?");
		$com->bindParam(1, $id);
		$com->execute();

		return $com->fetchall();
	}

	public function editComponente($id, $nombre, $servicio, $url, $url_view){
		$servicio = (int) $servicio;

		$com = $this->_db->prepare("UPDATE componentes SET nombre = ?, servicio_id = ?, url = ?, url_view = ? WHERE id = ?");
		$com->bindParam(1, $nombre);
		$com->bindParam(2, $servicio);
		$com->bindParam(3, $url);
		$com->bindParam(4, $url_view);
		$com->bindParam(5, $id);
		$com->execute();
	}

	public function addComponentes($nombre, $servicio, $url, $url_view){
		$servicio = (int) $servicio;

		$com = $this->_db->prepare("INSERT INTO componentes VALUES(null, ?, ?, ?, ?)");
		$com->bindParam(1, $nombre);
		$com->bindParam(2, $servicio);
		$com->bindParam(3, $url);
		$com->bindParam(4, $url_view);
		$com->execute();
	}
}
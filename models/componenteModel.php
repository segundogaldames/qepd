<?php

class componenteModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getComponentes(){
		$com = $this->_db->query("SELECT c.id, c.nombre, c.servicio_id, s.nombre as servicio, c.url_add, c.url_view, c.url_index, url_plan FROM servicios as s INNER JOIN componentes as c ON s.id = c.servicio_id");
		return $com->fetchall();
	}

	public function getComponenteId($id){
		$id = (int) $id;

		$com = $this->_db->prepare("SELECT c.id, c.nombre, c.servicio_id, s.nombre as servicio, c.url_add, c.url_view, c.url_index, c.url_plan FROM servicios as s INNER JOIN componentes as c ON s.id = c.servicio_id WHERE c.id = ?");
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

		$com = $this->_db->prepare("SELECT id, nombre, servicio_id,url_add, url_plan FROM componentes WHERE servicio_id = ?");
		$com->bindParam(1, $id);
		$com->execute();

		return $com->fetchall();
	}

	public function editComponente($id, $nombre, $servicio, $url_add, $url_view, $url_index, $url_plan){
		$servicio = (int) $servicio;

		$com = $this->_db->prepare("UPDATE componentes SET nombre = ?, servicio_id = ?, url_add = ?, url_view = ?, url_index = ?, url_plan = ? WHERE id = ?");
		$com->bindParam(1, $nombre);
		$com->bindParam(2, $servicio);
		$com->bindParam(3, $url_add);
		$com->bindParam(4, $url_view);
		$com->bindParam(5, $url_index);
		$com->bindParam(6, $url_plan);
		$com->bindParam(7, $id);
		$com->execute();
	}

	public function addComponentes($nombre, $servicio, $url_add, $url_view, $url_index, $url_plan){
		$com = $this->_db->prepare("INSERT INTO componentes VALUES(null, ?, ?, ?, ?, ?, ?)");
		$com->bindParam(1, $nombre);
		$com->bindParam(2, $servicio);
		$com->bindParam(3, $url_add);
		$com->bindParam(4, $url_view);
		$com->bindParam(5, $url_index);
		$com->bindParam(6, $url_plan);
		$com->execute();
	}

	public function deleteComponente($id){
		$id = (int) $id;

		$com = $this->_db->prepare("DELETE FROM componentes WHERE id = ?");
		$com->bindParam(1, $id);
		$com->execute();
	}
}
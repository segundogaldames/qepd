<?php

class roleModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getRoles(){
		$rol = $this->_db->query("SELECT id, nombre FROM roles ORDER BY nombre");
		return $rol->fetchall();
	}

	public function getRolesNombre($nombre){
		$rol = $this->_db->query("SELECT nombre FROM roles WHERE nombre = '$nombre'");
		return $rol->fetch();
	}

	public function getRolesId($id){
		$id = (int) $id;
		$rol = $this->_db->query("SELECT id, nombre FROM roles WHERE id = $id");
		return $rol->fetch();
	}

	public function setRoles($nombre){
		$rol = $this->_db->prepare("INSERT INTO roles VALUES(null, ?)");
		$rol->bindParam(1, $nombre);
		$rol->execute();
	}

	public function editRoles($id, $nombre){
		$id = (int) $id;
		//print_r($nombre);exit;
		$rol = $this->_db->prepare("UPDATE roles SET nombre = ? WHERE id = $id");
		$rol->bindParam(1, $nombre);
		$rol->execute();
	}

	public function deleteRole($id){
		$id = (int) $id;

		$rol = $this->_db->prepare("DELETE FROM roles WHERE id = ?");
		$rol->bindParam(1, $id);
		$rol->execute();
	}
}
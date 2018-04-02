<?php

class serviciosModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getServicios(){
		$serv = $this->_db->query("SELECT s.nombre, s.tipo_empresa_id, te.nombre as tipo FROM servicios s INNER JOIN tipo_empresas te ON s.tipo_empresa_id = te.id ORDER BY s.nombre");
		return $serv->fetchall();
	}

	public function getServiciosTipoEmpresa($tipo){
		//print_r($tipo);exit;

		$tipo = (int) $tipo;

		$serv = $this->_db->prepare("SELECT s.id, s.nombre as nombre, te.nombre as tipo FROM tipo_empresas as te INNER JOIN servicios as s ON s.tipo_empresa_id = te.id WHERE s.tipo_empresa_id = ? ORDER BY id DESC");
		$serv->bindParam(1, $tipo);
		$serv->execute();

		return $serv->fetchall();
	}

	public function getServicioNombre($nombre){
		$serv = $this->_db->prepare("SELECT id, nombre FROM servicios WHERE nombre = ?");
		$serv->bindParam(1, $nombre);
		$serv->execute();

		return $serv->fetch();
	}

	public function getServicioId($id){
		$id = (int) $id;

		$serv = $this->_db->prepare("SELECT s.id, s.nombre, s.tipo_empresa_id, te.nombre as tipo FROM tipo_empresas as te INNER JOIN servicios as s ON s.tipo_empresa_id = te.id WHERE s.id = ?");
		$serv->bindParam(1, $id);
		$serv->execute();

		return $serv->fetch();
	}

	public function editServicio($id, $nombre, $tipo){
		//print_r($tipo);exit;
		$id = (int) $id;
		$tipo = (int) $tipo;

		$serv = $this->_db->prepare("UPDATE servicios SET nombre = ?, tipo_empresa_id = ? WHERE id = ?");
		$serv->bindParam(1, $nombre);
		$serv->bindParam(2, $tipo);
		$serv->bindParam(3, $id);
		$serv->execute();
	}

	public function addServicios($nombre, $empresa){
		$empresa = (int) $empresa;

		$serv = $this->_db->prepare("INSERT INTO servicios VALUES(null, ?, ?)");
		$serv->bindParam(1, $nombre);
		$serv->bindParam(2, $empresa);
		$serv->execute();
	}

	public function deleteServicio($id){
		$id = (int) $id;

		$serv = $this->_db->prepare("DELETE FROM servicios WHERE id = ?");
		$serv->bindParam(1, $id);
		$serv->execute();
	}
}
<?php

class tipoempresaModel extends Model
{
	public function getTipoEmpresas(){
		$tipo = $this->_db->query("SELECT id, nombre FROM tipo_empresas ORDER BY nombre ASC");
		return $tipo->fetchall();
	}

	public function getTipoEmpresaId($id){
		$id = (int) $id;

		$tipo = $this->_db->prepare("SELECT id, nombre FROM tipo_empresas WHERE id = ?");
		$tipo->bindParam(1, $id);
		$tipo->execute();

		return $tipo->fetch();
	}

	public function getTipoEmpresaNombre($nombre){
		$tipo = $this->_db->prepare("SELECT nombre FROM tipo_empresas WHERE nombre = ?");
		$tipo->bindParam(1, $nombre);
		$tipo->execute();
		return $tipo->fetch();
	}

	public function setTipoEmpresa($nombre){
		$tipo = $this->_db->prepare("INSERT INTO tipo_empresas VALUES(null, ?)");
		$tipo->bindParam(1, $nombre);
		$tipo->execute();
	}

	public function editTipoEmpresa($id, $nombre){
		$id = (int) $id;

		$tipo = $this->_db->prepare("UPDATE tipo_empresas SET nombre = ? WHERE id = ?");
		$tipo->bindParam(1, $nombre);
		$tipo->bindParam(2, $id);
		$tipo->execute();
	}

	public function deleteTipoEmpresa($id){
		$id = (int) $id;

		$tipo = $this->_db->prepare("DELETE FROM tipo_empresas WHERE id = ?");
		$tipo->bindParam(1, $id);
		$tipo->execute();
	}
}
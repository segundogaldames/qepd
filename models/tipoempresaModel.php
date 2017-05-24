<?php

class tipoempresaModel extends Model
{
	public function getTipoEmpresas(){
		$tipo = $this->_db->query("SELECT id, nombre FROM tipo_empresas ORDER BY nombre ASC");
		return $tipo->fetchall();
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
}
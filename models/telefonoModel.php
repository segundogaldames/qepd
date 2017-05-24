<?php

class telefonoModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getTelefonoSede($telefono, $sede){
		$sede = (int) $sede;

		$tel = $this->_db->prepare("SELECT id, numero, sede_id FROM telefonos WHERE numero = ? AND sede_id = ?");
		$tel->bindParam(1, $telefono);
		$tel->bindParam(2, $sede);
		$tel->execute();

		return $tel->fetch();
	}

	public function getTelefonosSedes($id){
		$id = (int) $id;

		$tel = $this->_db->prepare("SELECT id, numero FROM telefonos WHERE sede_id = ?");
		$tel->bindParam(1, $id);
		$tel->execute();

		return $tel->fetchall();
	}

	public function getTelefonosSedesEmpresa(){
		$tel = $this->_db->query("SELECT t.id, t.numero, s.nombre as sede, e.nombre as empresa FROM sedes as s INNER JOIN telefonos as t ON t.sede_id = s.id INNER JOIN empresas as e ON s.empresa_id = e.id");
		return $tel->fetchall();
	}

	public function setTelefonos($telefono, $sede){
		$sede = (int) $sede;

		$tel = $this->_db->prepare("INSERT INTO telefonos VALUES(null, ?, ?)");
		$tel->bindParam(1, $telefono);
		$tel->bindParam(2, $sede);
		$tel->execute();
	}
}
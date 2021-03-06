<?php

class telefonoModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getTelefonoId($id){
		$id = (int) $id;

		$tel = $this->_db->prepare("SELECT t.id, t.numero as telefono, t.sede_id, s.nombre as sede, s.calle, s.numero, s.sector, s.ubicacion, s.empresa_id, s.comuna_id, e.nombre as empresa, c.nombre as comuna FROM telefonos as t INNER JOIN sedes as s ON t.sede_id = s.id INNER JOIN empresas as e ON s.empresa_id = e.id INNER JOIN comunas as c ON s.comuna_id = c.id WHERE t.id = ?");
		$tel->bindParam(1, $id);
		$tel->execute();

		return $tel->fetch();
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
		$tel = $this->_db->query("SELECT t.id, t.numero as telefono, s.nombre as sede, s.calle, s.numero, c.nombre as comuna, e.nombre as empresa FROM sedes as s INNER JOIN telefonos as t ON t.sede_id = s.id INNER JOIN empresas as e ON s.empresa_id = e.id INNER JOIN comunas as c ON s.comuna_id = c.id");
		return $tel->fetchall();
	}

	public function getTelefonoNumero($numero){
		$tel = $this->_db->prepare("SELECT numero FROM telefonos WHERE numero = ?");
		$tel->bindParam(1, $numero);
		$tel->execute();

		return $tel->fetch();
	}

	public function editTelefono($id, $numero, $sede){
		//print_r($numero);exit;
		$id = (int) $id;

		$tel = $this->_db->prepare("UPDATE telefonos SET numero = ?, sede_id = ? WHERE id = ?");
		$tel->bindParam(1, $numero);
		$tel->bindParam(2, $sede);
		$tel->bindParam(3, $id);
		$tel->execute();
	}

	public function setTelefonos($telefono, $sede){
		$sede = (int) $sede;

		$tel = $this->_db->prepare("INSERT INTO telefonos VALUES(null, ?, ?)");
		$tel->bindParam(1, $telefono);
		$tel->bindParam(2, $sede);
		$tel->execute();
	}

	public function deleteTelefono($id){
		$id = (int) $id;

		$tel = $this->_db->prepare("DELETE FROM telefonos WHERE id = ?");
		$tel->bindParam(1, $id);
		$tel->execute();
	}
}
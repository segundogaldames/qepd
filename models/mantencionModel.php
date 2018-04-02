<?php
/**
* 
*/
class mantencionModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getMantenciones(){
		$man = $this->_db->query("SELECT m.id, m.cobro, m.periodo, m.solucion_id, ts.nombre as solucion FROM mantenciones as m INNER JOIN soluciones as s ON m.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id");
		return $man->fetchall();
	}

	public function getMantencionId($id){
		$id = (int) $id;

		$man = $this->_db->prepare("SELECT m.id, m.cobro, m.periodo, m.solucion_id, ts.nombre as solucion FROM mantenciones as m INNER JOIN soluciones as s ON m.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id WHERE m.id = ?");
		$man->bindParam(1, $id);
		$man->execute();

		return $man->fetch();
	}

	public function getMantencionSolucion($solucion){
		$solucion = (int) $solucion;
		$man = $this->_db->prepare("SELECT m.id, m.cobro, m.periodo, m.solucion_id, ts.nombre as solucion FROM mantenciones as m INNER JOIN soluciones as s ON m.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id WHERE m.solucion_id = ?");
		$man->bindParam(1, $solucion);
		$man->execute();

		return $man->fetch();
	}

	public function addMantencion($cobro, $periodo, $solucion){
		$cobro = (int) $cobro;
		$periodo = (int) $periodo;
		$solucion = (int) $solucion;

		$man = $this->_db->prepare("INSERT INTO mantenciones VALUES(null, ?, ?, ?)");
		$man->bindParam(1, $cobro);
		$man->bindParam(2, $periodo);
		$man->bindParam(3, $solucion);
		$man->execute();
	}

	public function editMantencion($id, $cobro, $periodo, $solucion){
		$id = (int) $id;
		$cobro = (int) $cobro;
		$periodo = (int) $periodo;
		$solucion = (int) $solucion;

		$man = $this->_db->prepare("UPDATE mantenciones SET cobro = ?, periodo = ?, solucion_id = ? WHERE id = ?");
		$man->bindParam(1, $cobro);
		$man->bindParam(2, $periodo);
		$man->bindParam(3, $solucion);
		$man->bindParam(4, $id);
		$man->execute();
	}

	public function deleteMantencion($id){
		//print_r($id);exit;
		$id = (int) $id;

		$man = $this->_db->prepare("DELETE FROM mantenciones WHERE id = ?");
		$man->bindParam(1, $id);
		$man->execute();
	}
}
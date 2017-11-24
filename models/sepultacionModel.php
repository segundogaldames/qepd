<?php


class sepultacionModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getSepultaciones(){
		$sep = $this->_db->query("SELECT s.id, s.sala, s.capilla, s.liturgia, s.toldos, s.sillas, s.amplificacion, s.diacono, s.coro, s.cafeteria, s.plan_id, p.nombre as plan FROM sepultaciones as s INNER JOIN planes as p ON s.plan_id = p.id");
		return $sep->fetchall();
	}

	public function getSepultacionPlan($plan){
		$sep = $this->_db->prepare("SELECT id FROM sepultaciones WHERE plan_id = ?");
		$sep->bindParam(1, $plan);
		$sep->execute();

		return $sep->fetch();
	}

	public function getSepultacionId($id){
		$sep = $this->_db->prepare("SELECT s.id, s.sala, s.capilla, s.liturgia, s.toldos, s.sillas, s.amplificacion, s.diacono, s.coro, s.cafeteria, s.plan_id, p.nombre as plan FROM sepultaciones as s INNER JOIN planes as p ON s.plan_id = p.id WHERE s.id = ?");
		$sep->bindParam(1, $id);
		$sep->execute();

		return $sep->fetch();
	}

	public function editSepultacion($id, $sala, $capilla, $liturgia, $toldos, $sillas, $amplificacon, $diacono, $coro, $cafeteria, $plan){
		//print_r($plan);exit;
		$id = (int) $id;

		$sep = $this->_db->prepare("UPDATE sepultaciones SET sala = ?, capilla = ?, liturgia = ?, toldos = ?, sillas = ?, amplificacion = ?, diacono = ?, coro = ?, cafeteria = ?, plan_id = ? WHERE id = ?");
		$sep->bindParam(1, $sala);
		$sep->bindParam(2, $capilla);
		$sep->bindParam(3, $liturgia);
		$sep->bindParam(4, $toldos);
		$sep->bindParam(5, $sillas);
		$sep->bindParam(6, $amplificacon);
		$sep->bindParam(7, $diacono);
		$sep->bindParam(8, $coro);
		$sep->bindParam(9, $cafeteria);
		$sep->bindParam(10, $plan);
		$sep->bindParam(11, $id);
		$sep->execute();
	}

	public function addSepultacion($sala, $capilla, $liturgia, $toldos, $sillas, $amplificacon, $diacono, $coro, $cafeteria, $plan){
		$sep = $this->_db->prepare("INSERT INTO sepultaciones VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$sep->bindParam(1, $sala);
		$sep->bindParam(2, $capilla);
		$sep->bindParam(3, $liturgia);
		$sep->bindParam(4, $toldos);
		$sep->bindParam(5, $sillas);
		$sep->bindParam(6, $amplificacon);
		$sep->bindParam(7, $diacono);
		$sep->bindParam(8, $coro);
		$sep->bindParam(9, $cafeteria);
		$sep->bindParam(10, $plan);
		$sep->execute();
	}

	public function deleteSeputacion($id){
		$id = (int) $id;

		$sep = $this->_db->prepare("DELETE FROM sepultaciones WHERE id = ?");
		$sep->bindParam(1, $id);
		$sep->execute();
	}
}
<?php 

class trasladoModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getTraslados(){
		$tras = $this->_db->query("SELECT t.id, t.instalacion, t.funeral, t.conflores, t.acompanamiento, t.pasajeros, t.plan_id, p.nombre as plan FROM traslados as t INNER JOIN planes as p ON t.plan_id = p.id");
		return $tras->fetchall();
	}

	public function getTrasladoPlan($plan){
		$plan = (int) $plan;

		$tras = $this->_db->prepare("SELECT id FROM traslados WHERE plan_id = ?");
		$tras->bindParam(1, $plan);
		$tras->execute();

		return $tras->fetch();
	}

	public function getTrasladoId($id){
		$id = (int) $id;

		$tras = $this->_db->prepare("SELECT t.id, t.instalacion, t.funeral, t.conflores, t.acompanamiento, t.pasajeros, t.plan_id, p.nombre as plan FROM traslados as t INNER JOIN planes as p ON t.plan_id = p.id WHERE t.id = ?");
		$tras->bindParam(1, $id);
		$tras->execute();

		return $tras->fetch();
	}

	public function editTraslado($id, $instalacion, $funeral, $conflores, $acompanamiento, $pasajeros, $plan){
		$id = (int) $id;

		$tras = $this->_db->prepare("UPDATE traslados SET instalacion = ?, funeral = ?, conflores = ?, acompanamiento = ?, pasajeros = ?, plan_id = ? WHERE id = ?");
		$tras->bindParam(1, $instalacion);
		$tras->bindParam(2, $funeral);
		$tras->bindParam(3, $conflores);
		$tras->bindParam(4, $acompanamiento);
		$tras->bindParam(5, $pasajeros);
		$tras->bindParam(6, $plan);
		$tras->bindParam(7, $id);
		$tras->execute();
	}

	public function addTraslado($instalacion, $funeral, $conflores, $acompanamiento, $pasajeros, $plan){
		//print_r($plan);exit;

		$tras = $this->_db->prepare("INSERT INTO traslados VALUES(null, ?, ?, ?, ?, ?, ?)");
		$tras->bindParam(1, $instalacion);
		$tras->bindParam(2, $funeral);
		$tras->bindParam(3, $conflores);
		$tras->bindParam(4, $acompanamiento);
		$tras->bindParam(5, $pasajeros);
		$tras->bindParam(6, $plan);
		$tras->execute();
	}

	public function deleteTraslado($id){
		$id = (int) $id;

		$tras = $this->_db->prepare("DELETE FROM traslados WHERE id = ?");
		$tras->bindParam(1, $id);
		$tras->execute();
	}
}
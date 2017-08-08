<?php

class condicionModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getCondicionesPlan($id){
		$id = (int) $id;

		$cond = $this->_db->prepare("SELECT id FROM condiciones WHERE plan_id = ?");
		$cond->bindParam(1, $id);
		$cond->execute();

		return $cond->fetch();
	}

	public function addCondiciones($plan, $precio, $fpago, $plazo, $anticipada, $seguro, $convenios, $desctocol, $desctonicho, $pensiones){

		$plan = (int) $plan;
		$precio = (int) $precio;

		$cond = $this->_db->prepare("INSERT INTO condiciones VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$cond->bindParam(1, $plan);
		$cond->bindParam(2, $precio);
		$cond->bindParam(3, $fpago);
		$cond->bindParam(4, $plazo);
		$cond->bindParam(5, $anticipada);
		$cond->bindParam(6, $seguro);
		$cond->bindParam(7, $convenios); 
		$cond->bindParam(8, $desctocol);
		$cond->bindParam(9, $desctonicho);
		$cond->bindParam(10, $pensiones);
		$cond->execute();
	}
}
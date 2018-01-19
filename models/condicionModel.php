<?php

class condicionModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getCondiciones(){
		$cond = $this->_db->query("SELECT c.id, c.plan_id, p.nombre as plan, c.precio, c.formapago, c.plazopago, c.compraanticipada, c.segurodeceso, c.convenios, c.descuentocol, c.descuentonicho, c.pensiones FROM condiciones as c INNER JOIN planes as p ON c.plan_id = p.id");
		return $cond->fetchall();
	}

	public function getCondicionId($id){
		$id = (int) $id;

		$cond = $this->_db->prepare("SELECT c.id, c.plan_id, p.nombre as plan, c.precio, c.formapago, c.plazopago, c.compraanticipada, c.segurodeceso, c.convenios, c.descuentocol, c.descuentonicho, c.pensiones FROM condiciones as c INNER JOIN planes as p ON c.plan_id = p.id WHERE c.id = ?");
		$cond->bindParam(1, $id);
		$cond->execute();

		return $cond->fetch();
	}

	public function getCondicionesPlan($id){
		$id = (int) $id;

		$cond = $this->_db->prepare("SELECT id,precio,formapago,plazopago,compraanticipada,segurodeceso,convenios,descuentocol,descuentonicho,pensiones FROM condiciones WHERE plan_id = ?");
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
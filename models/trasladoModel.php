<?php 

class trasladoModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getTrasladoPlan($plan){
		$plan = (int) $plan;

		$tras = $this->_db->prepare("SELECT max(id) FROM traslados WHERE plan_id = ?");
		$tras->bindParam(1, $plan);
		$tras->execute();

		return $tras->fetch();
	}

	public function addTraslado($instalacion, $funeral, $conflores, $acompanamiento, $pasajeros, $plan){
		$tras = $this->_db->prepare("INSERT INTO traslados VALUES(null, ?, ?, ?, ?, ?, ?)");
		$tras->bindParam(1, $instalacion);
		$tras->bindParam(2, $funeral);
		$tras->bindParam(3, $conflores);
		$tras->bindParam(4, $acompañamiento);
		$tras->bindParam(5, $pasajeros);
		$tras->bindParam(6, $plan);
		$tras->execute();
	}
}
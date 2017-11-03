<?php


class sepultacionModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getSepultacionPlan($plan){
		$sep = $this->_db->prepare("SELECT max(id) FROM sepultaciones WHERE plan_id = ?");
		$sep->bindParam(1, $plan);
		$sep->execute();

		return $sep->fetch();
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
}
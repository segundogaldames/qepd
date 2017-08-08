<?php

class velatorioModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getVelatorioPlan($plan){
		$plan = (int) $plan;

		$vel = $this->_db->prepare("SELECT max(id) FROM velatorios WHERE plan_id = ?");
		$vel->bindParam(1, $plan);
		$vel->execute();

		return $vel->fecth();
	}

	public function addVelatorio($tramites, $asesor, $sala, $capilla, $cirios, $portacirios, $cruces, $florescanastos, $florescubreurna, $condolencias, $parroco, $coro, $avisosprensa, $tarjetas, $cafeteria, $plan){
		$plan = (int) $plan;

		$vel = $this->_db->prepare("INSERT INTO velatorios VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

		$vel->bindParam(1, $tramites);
		$vel->bindParam(2, $asesor);
		$vel->bindParam(3, $sala);
		$vel->bindParam(4, $capilla);
		$vel->bindParam(5, $cirios);
		$vel->bindParam(6, $portacirios);
		$vel->bindParam(7, $cruces);
		$vel->bindParam(8, $florescanastos);
		$vel->bindParam(9, $florescubreurna);
		$vel->bindParam(10, $condolencias);
		$vel->bindParam(11, $parroco);
		$vel->bindParam(12, $coro);
		$vel->bindParam(13, $avisosprensa);
		$vel->bindParam(14, $tarjetas);
		$vel->bindParam(15, $cafeteria);
		$vel->bindParam(16, $plan);
		$vel->execute();
	}
}
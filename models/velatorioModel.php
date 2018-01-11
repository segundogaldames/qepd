<?php

class velatorioModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getVelatorios(){
		$vel = $this->_db->query("SELECT v.id, v.tramites, v.asesor, v.sala, v.capilla, v.cirios, v.portacirios, v.cruces, v.florescanastos, v.florescubreurnas, v.condolencias, v.parroco, v.coro, v.avisosprensa, v.tarjetas, v.cafeteria, v.plan_id, p.nombre as plan FROM velatorios as v INNER JOIN planes as p ON v.plan_id = p.id");
		
		return $vel->fetchall();
	}

	public function getVelatorioId($id){
		$id = (int) $id;

		$vel = $this->_db->prepare("SELECT v.id, v.tramites, v.asesor, v.sala, v.capilla, v.cirios, v.portacirios, v.cruces, v.florescanastos, v.florescubreurnas, v.condolencias, v.parroco, v.coro, v.avisosprensa, v.tarjetas, v.cafeteria, v.plan_id, p.nombre as plan FROM velatorios as v INNER JOIN planes as p ON v.plan_id = p.id WHERE v.id = ?");
		$vel->bindParam(1, $id);
		$vel->execute();

		return $vel->fetch();
	}

	public function getVelatorioPlan($plan){
		$plan = (int) $plan;

		$vel = $this->_db->prepare("SELECT v.id, v.tramites, v.asesor, v.sala, v.capilla, v.cirios, v.portacirios, v.cruces, v.florescanastos, v.florescubreurnas, v.condolencias, v.parroco, v.coro, v.avisosprensa, v.tarjetas, v.cafeteria, v.plan_id, v.componente_id, p.nombre as plan FROM velatorios as v INNER JOIN planes as p ON v.plan_id = p.id WHERE v.plan_id = ?");
		$vel->bindParam(1, $plan);
		$vel->execute();

		return $vel->fetch();
	}

	public function editVelatorio($id, $tramites, $asesor, $sala, $capilla, $cirios, $portacirios, $cruces, $florescanastos, $florescubreurna, $condolencias, $parroco, $coro, $avisosprensa, $tarjetas, $cafeteria, $plan){
		$id = (int) $id;

		//print_r($coro);exit;

		$vel = $this->_db->prepare("UPDATE velatorios SET tramites = ?, asesor = ?, sala = ?, capilla = ?, cirios = ?, portacirios = ?, cruces = ?, florescanastos = ?, florescubreurnas = ?, condolencias = ?, parroco = ?, coro = ?, avisosprensa = ?, tarjetas = ?, cafeteria = ?, plan_id = ? WHERE id = ?");
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
		$vel->bindParam(17, $id);
		$vel->execute();
	}

	public function deleteVelatorio($id){
		$id = (int) $id;

		$vel = $this->_db->prepare("DELETE FROM velatorios WHERE id = ?");
		$vel->bindParam(1, $id);
		$vel->execute();
	}

	public function addVelatorio($tramites, $asesor, $sala, $capilla, $cirios, $portacirios, $cruces, $florescanastos, $florescubreurna, $condolencias, $parroco, $coro, $avisosprensa, $tarjetas, $cafeteria, $plan){
		$plan = (int) $plan;

		$vel = $this->_db->prepare("INSERT INTO velatorios VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 2)");

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
<?php

/**
* 
*/
class cinerarioModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getCinerarios(){
		$cin = $this->_db->query("SELECT c.id, c.sala, c.capilla, c.podium, c.liturgia, c.amplificacion, c.diacono, c.coro, c.cafeteria, c.ceremonia, c.anforaincl, c.plan_id, p.nombre as plan FROM cinerarios as c INNER JOIN planes as p ON c.plan_id = p.id");
		return $cin->fetchall();
	}

	public function getCinerarioId($id){
		$id = (int) $id;

		$cin = $this->_db->prepare("SELECT c.id, c.sala, c.capilla, c.podium, c.liturgia, c.amplificacion, c.diacono, c.coro, c.cafeteria, c.ceremonia, c.anforaincl, c.plan_id, p.nombre as plan FROM cinerarios as c INNER JOIN planes as p ON c.plan_id = p.id WHERE c.id = ?");
		$cin->bindParam(1, $id);
		$cin->execute();

		return $cin->fetch();
	}

	public function getCinerarioPlan($plan){
		$plan = (int) $plan;

		$cin = $this->_db->prepare("SELECT c.id, c.sala, c.capilla, c.podium, c.liturgia, c.amplificacion, c.diacono, c.coro, c.cafeteria, c.ceremonia, c.anforaincl, c.plan_id, p.nombre as plan, c.componente_id FROM cinerarios as c INNER JOIN planes as p ON c.plan_id = p.id WHERE c.plan_id = ?");
		$cin->bindParam(1, $plan);
		$cin->execute();

		return $cin->fetch();
	}

	public function addCinerario($sala, $capilla, $podium, $liturgia, $amplificacion, $diacono, $coro, $cafeteria, $ceremonia, $anforaincl, $plan){
		$cin = $this->_db->prepare("INSERT INTO cinerarios VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 4)");
		$cin->bindParam(1, $sala);
		$cin->bindParam(2, $capilla);
		$cin->bindParam(3, $podium);
		$cin->bindParam(4, $liturgia);
		$cin->bindParam(5, $amplificacion);
		$cin->bindParam(6, $diacono);
		$cin->bindParam(7, $coro);
		$cin->bindParam(8, $cafeteria);
		$cin->bindParam(9, $ceremonia);
		$cin->bindParam(10, $anforaincl);
		$cin->bindParam(11, $plan);
		$cin->execute();
	}

	public function editCinerario($id, $sala, $capilla, $podium, $liturgia, $amplificacion, $diacono, $coro, $cafeteria, $ceremonia, $anforaincl, $plan){
		$id = (int) $id;

		$cin = $this->_db->prepare("UPDATE cinerarios SET sala = ?, capilla = ?, podium = ?, liturgia = ?, amplificacion = ?, diacono = ?, coro = ?, cafeteria = ?, ceremonia = ?, anforaincl = ?, plan_id = ? WHERE id = ?");
		$cin->bindParam(1, $sala);
		$cin->bindParam(2, $capilla);
		$cin->bindParam(3, $podium);
		$cin->bindParam(4, $liturgia);
		$cin->bindParam(5, $amplificacion);
		$cin->bindParam(6, $diacono);
		$cin->bindParam(7, $coro);
		$cin->bindParam(8, $cafeteria);
		$cin->bindParam(9, $ceremonia);
		$cin->bindParam(10, $anforaincl);
		$cin->bindParam(11, $plan);
		$cin->bindParam(12, $id);
		$cin->execute();
	}

	public function deleteCinerario($id){
		$id = (int) $id;

		$cin = $this->_db->prepare("DELETE FROM cinerarios WHERE id = ?");
		$cin->bindParam(1, $id);
		$cin->execute();
	}
}
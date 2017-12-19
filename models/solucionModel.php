<?php

class solucionModel extends Model
{
	private $_plan;
	private $_tiposolucion;	

	public function __construct(){
		parent::__construct();
	}

	public function getSoluciones(){
		$sol = $this->_db->query("SELECT s.id, s.solucion, s.periodo, s.anios, s.tipo_solucion_id, t.nombre as tipo, s.plan_id, p.nombre as plan FROM soluciones as s INNER JOIN tipo_soluciones as t ON s.tipo_solucion_id = t.id INNER JOIN planes as p ON s.plan_id = p.id");
		return $sol->fetchall();
	}

	public function getSolucionId($id){
		$id = (int) $id;

		$sol = $this->_db->prepare("SELECT s.id, s.solucion, s.periodo, s.anios, s.tipo_solucion_id, t.nombre as tipo, s.plan_id, p.nombre as plan FROM soluciones as s INNER JOIN tipo_soluciones as t ON s.tipo_solucion_id = t.id INNER JOIN planes as p ON s.plan_id = p.id WHERE s.id = ?");
		$sol->bindParam(1, $id);
		$sol->execute();

		return $sol->fetch();
	}

	public function getSolucionTipo($tiposolucion){
		$sol = $this->_db->prepare("SELECT id FROM soluciones WHERE $tipo_solucion_id = ?");
		$sol->bindParam(1, $tiposolucion);
		$sol->execute();
	}

	public function getSolucionPlan($plan){
		//print_r($plan);exit;
		$plan = (int) $plan;

		$sol = $this->_db->prepare("SELECT s.id, s.solucion, s.periodo, s.anios, s.tipo_solucion_id, t.nombre as tipo, s.plan_id, p.nombre as plan FROM soluciones as s INNER JOIN tipo_soluciones as t ON s.tipo_solucion_id = t.id INNER JOIN planes as p ON s.plan_id = p.id WHERE s.plan_id = ?");
		$sol->bindParam(1, $plan);
		$sol->execute();

		return $sol->fetch();
	}

	public function addSolucion($solucion, $periodo, $anio, $tiposolucion, $plan){
		$sol = $this->_db->prepare("INSERT INTO soluciones VALUES(null, ?, ?, ?, ?, ?)");
		$sol->bindParam(1, $solucion);
		$sol->bindParam(2, $periodo);
		$sol->bindParam(3, $anio);
		$sol->bindParam(4, $tiposolucion);
		$sol->bindParam(5, $plan);
		$sol->execute();
	}

	public function editSolucion($id, $solucion, $periodo, $anio, $tiposolucion, $plan){
		$id = (int) $id;

		$sol = $this->_db->prepare("UPDATE soluciones SET solucion = ?, periodo = ?, anios = ?, tipo_solucion_id = ?, plan_id = ? WHERE id = ?");
		$sol->bindParam(1, $solucion);
		$sol->bindParam(2, $periodo);
		$sol->bindParam(3, $anio);
		$sol->bindParam(4, $tiposolucion);
		$sol->bindParam(5, $plan);
		$sol->bindParam(6, $id);
		$sol->execute();
	}

	public function deleteSolucion($id){
		$id = (int) $id;

		$sol = $this->_db->prepare("DELETE FROM soluciones WHERE id = ?");
		$sol->bindParam(1, $id);
		$sol->execute();
	}
}
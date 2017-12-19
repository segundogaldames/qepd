<?php

class capacidadModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getCapacidades(){
		$cap = $this->_db->query("SELECT c.id, c.adultos, c.parvulos, c.reducciones, c.anforas, c.solucion_id, c.plan_id, p.nombre as plan, tp.nombre as solucion FROM capacidades as c INNER JOIN planes as p ON c.plan_id = p.id INNER JOIN soluciones as s ON c.solucion_id = s.id INNER JOIN tipo_soluciones as tp ON s.tipo_solucion_id = tp.id");
		return $cap->fetchall();
	}

	public function getCapacidadId($id){
		$id = (int) $id;

		$cap = $this->_db->prepare("SELECT c.id, c.adultos, c.parvulos, c.reducciones, c.anforas, c.solucion_id, c.plan_id, p.nombre as plan, tp.nombre as solucion FROM capacidades as c INNER JOIN planes as p ON c.plan_id = p.id INNER JOIN soluciones as s ON c.solucion_id = s.id INNER JOIN tipo_soluciones as tp ON s.tipo_solucion_id = tp.id WHERE c.id = ?");
		$cap->bindParam(1, $id);
		$cap->execute();

		return $cap->fetch();
	}

	public function getCapacidadSolucion($solucion){
		$solucion = (int) $solucion;

		$cap = $this->_db->prepare("SELECT c.id, c.adultos, c.parvulos, c.reducciones, c.anforas, c.solucion_id, tp.nombre as solucion FROM capacidades as c INNER JOIN soluciones as s ON c.solucion_id = s.id INNER JOIN tipo_soluciones as tp ON s.tipo_solucion_id = tp.id WHERE c.solucion_id = ?");
		$cap->bindParam(1, $solucion);
		$cap->execute();

		return $cap->fetch();
	}

	public function addCapacidades($adultos, $parvulos, $reducciones, $anforas, $solucion, $plan){
		$cap = $this->_db->prepare("INSERT INTO capacidades VALUES(null, ?, ?, ?, ?, ?, ?)");
		$cap->bindParam(1, $adultos);
		$cap->bindParam(2, $parvulos);
		$cap->bindParam(3, $reducciones);
		$cap->bindParam(4, $anforas);
		$cap->bindParam(5, $solucion);
		$cap->bindParam(6, $plan);
		$cap->execute();
	}

	public function editCapacidad($id, $adultos, $parvulos, $reducciones, $anforas, $solucion, $plan){
		//print_r($adultos); exit;
		$id = (int) $id;

		$cap = $this->_db->prepare("UPDATE capacidades SET adultos = ?, parvulos = ?, reducciones = ?, anforas = ?, solucion_id = ?, plan_id = ? WHERE id = ?");
		$cap->bindParam(1, $adultos);
		$cap->bindParam(2, $parvulos);
		$cap->bindParam(3, $reducciones);
		$cap->bindParam(4, $anforas);
		$cap->bindParam(5, $solucion);
		$cap->bindParam(6, $plan);
		$cap->bindParam(7, $id);
		$cap->execute();
	}

	public function deleteCapacidad($id){
		$id = (int) $id;

		$cap = $this->_db->prepare("DELETE FROM capacidades WHERE id = ?");
		$cap->bindParam(1, $id);
		$cap->execute();
	}
}

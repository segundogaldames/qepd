<?php

class planesModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getPlanes(){
		$plan = $this->_db->query("SELECT p.id, p.nombre, p.codigo, tp.nombre as tipo_plan, s.nombre as servicio, e.nombre as empresa FROM tipo_planes as tp INNER JOIN planes as p ON p.tipo_plan_id = tp.id INNER JOIN servicios as s ON s.id = p.servicio_id INNER JOIN empresas as e ON e.id = p.empresa_id");
		return $plan->fetchall();
	}

	public function getPlanesId($id){
		$id = (int) $id;

		$plan = $this->_db->prepare("SELECT p.id, p.nombre, p.codigo, tp.nombre as tipo_plan, s.nombre as servicio, e.nombre as empresa FROM tipo_planes as tp INNER JOIN planes as p ON p.tipo_plan_id = tp.id INNER JOIN servicios as s ON s.id = p.servicio_id INNER JOIN empresas as e ON e.id = p.empresa_id WHERE p.id = ?");
		$plan->bindParam(1, $id);
		$plan->execute();
		
		return $plan->fetch();
	}

	public function getPlanNombre($nombre){
		$plan = $this->_db->prepare("SELECT id FROM planes WHERE nombre = ?");
		$plan->bindParam(1, $nombre);
		$plan->execute();

		return $plan->fetch();
	}

	public function getPlanNombreCodigo($nombre, $codigo){
		$plan = $this->_db->prepare("SELECT id FROM planes WHERE nombre = ? OR codigo = ?");
		$plan->bindParam(1, $nombre);
		$plan->bindParam(2, $codigo);
		$plan->execute();

		return $plan->fetch();
	}

	public function setPlanes($nombre, $codigo, $tipo_plan, $servicio, $empresa){
		//print_r($nombre);exit;

		$tipo_plan = (int) $tipo_plan;
		$servicio = (int) $servicio;
		$empresa = (int) $empresa;


		$plan = $this->_db->prepare("INSERT INTO planes VALUES(null, ?, ?, ?, ?, ?)");
		$plan->bindParam(1, $nombre);
		$plan->bindParam(2, $codigo);
		$plan->bindParam(3, $tipo_plan);
		$plan->bindParam(4, $servicio);
		$plan->bindParam(5, $empresa);
		$plan->execute();

	}
}
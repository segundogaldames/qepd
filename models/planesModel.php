<?php

class planesModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getPlanes(){
		$plan = $this->_db->query("SELECT p.id, p.nombre, p.codigo, p.dated, p.updated, tp.nombre as tipo_plan, s.nombre as servicio, e.nombre as empresa FROM tipo_planes as tp 
			INNER JOIN planes as p ON p.tipo_plan_id = tp.id 
			INNER JOIN servicios as s ON s.id = p.servicio_id 
			INNER JOIN empresas as e ON e.id = p.empresa_id");
		return $plan->fetchall();
	}

	public function getPlanesId($id){
		$id = (int) $id;

		$plan = $this->_db->prepare("SELECT p.id, p.nombre, p.codigo, p.dated, p.updated, p.status_id as status, tp.nombre as tipo_plan, s.id as servicio_id, s.nombre as servicio, e.nombre as empresa, d.nombre as destinatario FROM tipo_planes as tp 
			INNER JOIN planes as p ON p.tipo_plan_id = tp.id 
			INNER JOIN servicios as s ON s.id = p.servicio_id 
			INNER JOIN empresas as e ON e.id = p.empresa_id 
			INNER JOIN destinatarios as d ON d.id = p.destinatario_id
			WHERE p.id = ?");

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

	public function getPlanesServicios($id){
		$id = (int) $id;

		$plan = $this->_db->prepare("SELECT p.id, p.nombre, tp.nombre as tipo_plan, s.nombre as servicio, e.nombre as empresa, d.nombre as destinatario, c.precio as precio, com.nombre as comuna FROM tipo_planes as tp 
			INNER JOIN planes as p ON p.tipo_plan_id = tp.id 
			INNER JOIN servicios as s ON s.id = p.servicio_id 
			INNER JOIN empresas as e ON e.id = p.empresa_id 
			INNER JOIN destinatarios as d ON d.id = p.destinatario_id
			INNER JOIN condiciones as c ON c.plan_id = p.id
			INNER JOIN sedes as sed ON sed.empresa_id = p.empresa_id
			INNER JOIN comunas as com ON sed.comuna_id = com.id
			WHERE p.servicio_id = ? ORDER BY c.precio ASC");
		$plan->bindParam(1, $id);
		$plan->execute();

		return $plan->fetchall();
	}

	public function deletePlanesId($id){
		$id = (int) $id;

		$plan = $this->_db->prepare("DELETE FROM planes WHERE id = ?");
		$plan->bindParam(1, $id);	
		$plan->execute();
	}

	public function editPlan($id, $nombre, $codigo, $tipo_plan, $servicio, $empresa, $destinatario, $status){
		$id = (int) $id;
		$tipo_plan = (int) $tipo_plan;
		$servicio = (int) $servicio;
		$destinatario = (int) $destinatario;
		$status = (int) $status;

		$plan = $this->_db->prepare("UPDATE planes SET nombre = ?, codigo = ?, tipo_plan_id = ?, servicio_id = ?, empresa_id = ?, destinatario_id = ?, status_id = ?, updated = now() WHERE id = ?");
		$plan->bindParam(1, $nombre);
		$plan->bindParam(2, $codigo);
		$plan->bindParam(3, $tipo_plan);
		$plan->bindParam(4, $servicio);
		$plan->bindParam(5, $empresa);
		$plan->bindParam(6, $destinatario);
		$plan->bindParam(7, $status);
		$plan->bindParam(8, $id);
		$plan->execute();
	}

	public function setPlanes($nombre, $codigo, $tipo_plan, $servicio, $empresa, $destinatario){
		//print_r($nombre);exit;

		$tipo_plan = (int) $tipo_plan;
		$servicio = (int) $servicio;
		$empresa = (int) $empresa;
		$destinatario = (int) $destinatario;

		//status: 1. Pendiente, 2. Activo


		$plan = $this->_db->prepare("INSERT INTO planes VALUES(null, ?, ?, ?, ?, ?, ?, 2, now(), now())");
		$plan->bindParam(1, $nombre);
		$plan->bindParam(2, $codigo);
		$plan->bindParam(3, $tipo_plan);
		$plan->bindParam(4, $servicio);
		$plan->bindParam(5, $empresa);
		$plan->bindParam(6, $destinatario);
		$plan->execute();

	}
}
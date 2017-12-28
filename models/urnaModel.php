<?php

class urnaModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getUrnas(){
		$urna = $this->_db->query("SELECT u.id, u.modelo, u.medidas, u.material, u.terminaciones, u.color, p.nombre as plan, c.nombre as componente FROM urnas as u INNER JOIN planes as p ON u.plan_id = p.id INNER JOIN componentes as c ON u.componente_id = c.id");
		return $urna->fetchall();
	}

	public function getUrnaId($id){
		$id = (int) $id;

		$urna = $this->_db->prepare("SELECT u.id, u.modelo, u.medidas, u.material, u.terminaciones, u.color, u.plan_id, u.componente_id, p.nombre as plan, c.nombre as componente, img.nombre as imagen FROM urnas as u INNER JOIN planes as p ON u.plan_id = p.id INNER JOIN componentes as c ON u.componente_id = c.id INNER JOIN imagenes as img ON u.componente_id = img.componente_id WHERE u.id = ?");
		$urna->bindParam(1, $id);
		$urna->execute();

		return $urna->fetch();
	}

	public function getUrnaPlan($plan){
		$plan = (int) $plan;

		$urna = $this->_db->prepare("SELECT u.id, u.modelo, u.medidas, u.material, u.terminaciones, u.color, u.plan_id, u.componente_id, p.nombre as plan FROM urnas as u INNER JOIN planes as p ON u.plan_id = p.id  WHERE u.plan_id = ?");
		$urna->bindParam(1, $plan);
		$urna->execute();

		return $urna->fetch();
	}

	public function getUrnaModelo($modelo){
		$urna = $this->_db->prepare("SELECT id FROM urnas WHERE modelo = ?");
		$urna->bindParam(1, $modelo);
		$urna->execute();

		return $urna->fetch();
	}

	public function editarUrna($id, $modelo, $medidas, $material, $terminaciones, $color, $plan){
		//print_r($plan);exit;
		$id = (int) $id;

		$urna = $this->_db->prepare("UPDATE urnas SET modelo = ?, medidas = ?, material = ?, terminaciones = ?, color = ?, plan_id = ? WHERE id = ?");
		$urna->bindParam(1, $modelo);
		$urna->bindParam(2, $medidas);
		$urna->bindParam(3, $material);
		$urna->bindParam(4, $terminaciones);
		$urna->bindParam(5, $color);
		$urna->bindParam(6, $plan);
		$urna->bindParam(7, $id);
		$urna->execute();
	}

	public function addUrna($modelo, $medidas, $material, $terminaciones, $color, $plan){
		$plan = (int) $plan;

		$urna = $this->_db->prepare("INSERT INTO urnas VALUES(null, ?, ?, ?, ?, ?, ?, 1)");
		$urna->bindParam(1, $modelo);
		$urna->bindParam(2, $medidas);
		$urna->bindParam(3, $material);
		$urna->bindParam(4, $terminaciones);
		$urna->bindParam(5, $color);
		$urna->bindParam(6, $plan);
		$urna->execute();
	}

	public function eliminarUrna($id){
		$id = (int) $id;

		$urna = $this->_db->prepare("DELETE FROM urnas WHERE id = ?");
		$urna->bindParam(1, $id);
		$urna->execute();
	}
}
<?php

class urnaModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getUrnaModelo($modelo){
		$urna = $this->_db->prepare("SELECT id FROM urnas WHERE modelo = ?");
		$urna->bindParam(1, $modelo);
		$urna->execute();

		return $urna->fetch();
	}

	public function addUrna($modelo, $medidas, $material, $terminaciones, $color, $plan){
		$plan = (int) $plan;

		$urna = $this->_db->prepare("INSERT INTO urnas VALUES(null, ?, ?, ?, ?, ?, ?)");
		$urna->bindParam(1, $modelo);
		$urna->bindParam(2, $medidas);
		$urna->bindParam(3, $material);
		$urna->bindParam(4, $terminaciones);
		$urna->bindParam(5, $color);
		$urna->bindParam(6, $plan);
		$urna->execute();
	}
}
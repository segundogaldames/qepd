<?php

class construccionModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getConstrucciones(){
		$cons = $this->_db->query("SELECT c.id, tc.nombre as construccion, m.nombre as material, t.nombre as terminacion, c.grabado, p.nombre as plan FROM construcciones as c INNER JOIN tipo_construcciones as tc ON c.tipo_construccion_id = tc.id INNER JOIN materiales as m ON c.material_id = m.id INNER JOIN terminaciones as t ON c.terminacion_id = t.id INNER JOIN planes as p ON c.plan_id = p.id");
	}

	public function addConstrucciones($tipo, $material, $terminacion, $grabado, $plan){
		$tipo = (int) $tipo;
		$material = (int) $material;
		$terminacion = (int) $terminacion;
		$grabado = (int) $grabado;
		$plan = (int) $plan;

		$cons = $this->_db->prepare("INSERT INTO construcciones VALUES(null, ?, ?, ?, ?, ?)");
		$cons->bindParam(1, $tipo);
		$cons->bindParam(2, $material);
		$cons->bindParam(3, $terminacion);
		$cons->bindParam(4, $grabado);
		$cons->bindParam(5, $plan);
		$cons->execute();
	}
}
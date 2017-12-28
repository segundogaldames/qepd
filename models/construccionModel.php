<?php

class construccionModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getConstrucciones(){
		$cons = $this->_db->query("SELECT c.id, tc.nombre as construccion, m.nombre as material, t.nombre as terminacion, c.grabado, c.solucion_id, ts.nombre as solucion FROM construcciones as c INNER JOIN tipo_construcciones as tc ON c.tipo_construccion_id = tc.id INNER JOIN materiales as m ON c.material_id = m.id INNER JOIN terminaciones as t ON c.terminacion_id = t.id INNER JOIN soluciones as s ON c.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id");
		return $cons->fetchall();
	}

	public function getConstruccionId($id){
		$id = (int) $id;

		$cons = $this->_db->prepare("SELECT c.id, c.tipo_construccion_id, c.material_id, c.terminacion_id, tc.nombre as construccion, m.nombre as material, t.nombre as terminacion, c.grabado, c.solucion_id, ts.nombre as solucion FROM construcciones as c INNER JOIN tipo_construcciones as tc ON c.tipo_construccion_id = tc.id INNER JOIN materiales as m ON c.material_id = m.id INNER JOIN terminaciones as t ON c.terminacion_id = t.id INNER JOIN soluciones as s ON c.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id WHERE c.id = ?");
		$cons->bindParam(1, $id);
		$cons->execute();

		return $cons->fetch();
	}

	public function getConstruccionSolucion($solucion){
		$solucion = (int) $solucion;

		$cons = $this->_db->prepare("SELECT c.id, tc.nombre as construccion, m.nombre as material, t.nombre as terminacion, c.grabado, c.solucion_id, ts.nombre as solucion FROM construcciones as c INNER JOIN tipo_construcciones as tc ON c.tipo_construccion_id = tc.id INNER JOIN materiales as m ON c.material_id = m.id INNER JOIN terminaciones as t ON c.terminacion_id = t.id INNER JOIN soluciones as s ON c.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id WHERE c.solucion_id = ?");
		$cons->bindParam(1, $solucion);
		$cons->execute();

		return $cons->fetch();
	}

	public function addConstrucciones($tipo, $material, $terminacion, $grabado, $solucion){
		$tipo = (int) $tipo;
		$material = (int) $material;
		$terminacion = (int) $terminacion;
		$grabado = (int) $grabado;
		$plan = (int) $solucion;

		$cons = $this->_db->prepare("INSERT INTO construcciones VALUES(null, ?, ?, ?, ?, ?)");
		$cons->bindParam(1, $tipo);
		$cons->bindParam(2, $material);
		$cons->bindParam(3, $terminacion);
		$cons->bindParam(4, $grabado);
		$cons->bindParam(5, $solucion);
		$cons->execute();
	}

	public function editConstruccion($id, $tipo, $material, $terminacion, $grabado, $solucion){
		$id = (int) $id;
		$tipo = (int) $tipo;
		$material = (int) $material;
		$terminacion = (int) $terminacion;
		$grabado = (int) $grabado;
		$plan = (int) $solucion;

		$cons = $this->_db->prepare("UPDATE construcciones SET tipo_construccion_id = ?, material_id = ?, terminacion_id = ?, grabado = ?, solucion_id = ? WHERE id = ?");
		$cons->bindParam(1, $tipo);
		$cons->bindParam(2, $material);
		$cons->bindParam(3, $terminacion);
		$cons->bindParam(4, $grabado);
		$cons->bindParam(5, $solucion);
		$cons->bindParam(6, $id);
		$cons->execute();
	}

	public function deleteConstruccion($id){
		$id = (int) $id;

		$cons = $this->_db->prepare("DELETE FROM construcciones WHERE id = ?");
		$cons->bindParam(1, $id);
		$cons->execute();
	}
}
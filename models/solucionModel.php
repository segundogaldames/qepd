<?php

class solucionModel extends Model
{
	private $_plan;
	private $_tiposolucion;	

	public function __construct(){
		parent::__construct();
	}

	public function getSolucionTipo($tiposolucion){
		$sol = $this->_db->prepare("SELECT id FROM soluciones WHERE $tipo_solucion_id = ?");
		$sol->bindParam(1, $tiposolucion);
		$sol->execute();
	}

	public function addSolucion($solucion, $periodo, $anios, $tiposolucion, $plan){
		$sol = $this->_db->prepare("INSERT INTO soluciones VALUES(null, ?, ?, ?, ?, ?)");
		$sol->bindParam(1, $solucion);
		$sol->bindParam(2, $periodo);
		$sol->bindParam(3, $anios);
		$sol->bindParam(4, $tiposolucion);
		$sol->bindParam(5, $plan);
		$sol->execute();
	}
}
<?php 
/**
* 
*/
class anforaModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getAnforas(){
		$anf = $this->_db->query("SELECT a.id, a.modelo,a.plan_id, p.nombre as plan FROM anforas as a INNER JOIN planes as p ON a.plan_id = p.id");
		return $anf->fetchall();
	}

	public function getAnforaPlan($plan){
		$plan = (int) $plan;

		$anf = $this->_db->prepare("SELECT a.id, a.modelo, a.plan_id p.nombre as plan FROM anforas as a INNER JOIN planes as p ON a.plan_id = p.id WHERE a.plan_id = ?");
		$anf->bindParam(1, $plan);
		$anf->execute();

		return $anf->fetch();
	}

	public function addAnfora($modelo, $plan){
		$plan = (int) $plan;

		$anf = $this->_db->prepare("INSERT INTO anforas VALUES(null, ?, ?)");
		$anf->bindParam(1, $modelo);
		$anf->bindParam(2, $plan);
		$anf->execute();
	}
}
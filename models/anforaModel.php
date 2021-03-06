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
		$anf = $this->_db->query("SELECT a.id, a.modelo,a.plan_id, a.descripcion, p.nombre as plan FROM anforas as a INNER JOIN planes as p ON a.plan_id = p.id");
		return $anf->fetchall();
	}

	public function getAnforaPlan($plan){
		//print_r($plan);exit;
		$plan = (int) $plan;

		$anf = $this->_db->prepare("SELECT a.id, a.modelo, a.plan_id, a.descripcion, p.nombre as plan, a.componente_id FROM anforas as a INNER JOIN planes as p ON a.plan_id = p.id WHERE a.plan_id = ?");
		$anf->bindParam(1, $plan);
		$anf->execute();

		return $anf->fetch();
	}

	public function getAnforaId($id){
		$id = (int) $id;

		$anf = $this->_db->prepare("SELECT a.id, a.modelo, a.plan_id, a.descripcion, p.nombre as plan FROM anforas as a INNER JOIN planes as p ON a.plan_id = p.id WHERE a.id = ?");
		$anf->bindParam(1, $id);
		$anf->execute();

		return $anf->fetch();
	}

	public function addAnfora($modelo, $plan, $descripcion){
		//print_r($descripcion);exit;
		$plan = (int) $plan;

		$anf = $this->_db->prepare("INSERT INTO anforas VALUES(null, ?, ?, 5, ?)");
		$anf->bindParam(1, $modelo);
		$anf->bindParam(2, $plan);
		$anf->bindParam(3, $descripcion);
		$anf->execute();
	}

	public function editAnfora($id, $modelo, $plan, $descripcion){
		//print_r($descripcion);
		$id = (int) $id;

		$anf = $this->_db->prepare("UPDATE anforas SET modelo = ?, plan_id = ?, descripcion = ? WHERE id = ?");
		$anf->bindParam(1, $modelo);
		$anf->bindParam(2, $plan);
		$anf->bindParam(3, $descripcion);
		$anf->bindParam(4, $id);
		$anf->execute();
	}

	public function deleteAnfora($id){
		$id = (int) $id;

		$anf = $this->_db->prepare("DELETE FROM anforas WHERE id = ?");
		$anf->bindParam(1, $id);
		$anf->execute();
	}
}
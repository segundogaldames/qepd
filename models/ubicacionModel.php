<?php 
/**
* 
*/
class ubicacionModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getUbicaciones(){
		$ubi = $this->_db->query("SELECT u.id, u.ubicacion, u.estacionamientos, u.direccion, u.solucion_id, ts.nombre as solucion FROM ubicaciones as u INNER JOIN soluciones as s ON u.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id");
		return $ubi->fetchall();
	}

	public function getUbicacionId($id){
		$id = (int) $id;

		$ubi = $this->_db->prepare("SELECT u.id, u.ubicacion, u.estacionamientos, u.direccion, u.solucion_id, ts.nombre as solucion FROM ubicaciones as u INNER JOIN soluciones as s ON u.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id WHERE u.id = ?");
		$ubi->bindParam(1, $id);
		$ubi->execute();

		return $ubi->fetch();
	}

	public function getUbicacionSolucion($solucion){
		$solucion = (int) $solucion;

		$ubi = $this->_db->prepare("SELECT u.id, u.ubicacion, u.estacionamientos, u.direccion, u.solucion_id, ts.nombre as solucion FROM ubicaciones as u INNER JOIN soluciones as s ON u.solucion_id = s.id INNER JOIN tipo_soluciones as ts ON s.tipo_solucion_id = ts.id WHERE u.solucion_id = ?");
		$ubi->bindParam(1, $solucion);
		$ubi->execute();

		return $ubi->fetch();
	}

	public function addUbicacion($ubicacion, $estacionamientos, $direccion, $solucion){
		//print_r($ubicacion);exit;
		$ubicacion = (int) $ubicacion;
		$estacionamientos = (int) $estacionamientos;
		$solucion = (int) $solucion;

		$ubi = $this->_db->prepare("INSERT INTO ubicaciones VALUES(null, ?, ?, ?, ?)");
		$ubi->bindParam(1, $ubicacion);
		$ubi->bindParam(2, $estacionamientos);
		$ubi->bindParam(3, $direccion);
		$ubi->bindParam(4, $solucion);
		$ubi->execute();
	}

	public function editUbicacion($id,  $ubicacion, $estacionamientos, $direccion, $solucion){
		$id = (int) $id;
		$ubicacion = (int) $ubicacion;
		$estacionamientos = (int) $estacionamientos;
		$solucion = (int) $solucion;

		$ubi = $this->_db->prepare("UPDATE ubicaciones SET ubicacion = ?, estacionamientos = ?, direccion = ?, solucion_id = ? WHERE id = ?");
		$ubi->bindParam(1, $ubicacion);
		$ubi->bindParam(2, $estacionamientos);
		$ubi->bindParam(3, $direccion);
		$ubi->bindParam(4, $solucion);
		$ubi->bindParam(5, $id);
		$ubi->execute();
	}

	public function deleteUbicacion($id){
		$id = (int) $id;

		$ubi = $this->_db->prepare("DELETE FROM ubicaciones WHERE id = ?");
		$ubi->bindParam(5, $id);
		$ubi->execute();
	}
}
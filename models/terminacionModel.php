<?php

class terminacionModel extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function getTerminaciones(){
		$term = $this->_db->query("SELECT id, nombre FROM terminaciones ORDER BY nombre");
		return $term->fetchall();
	}

	public function getTerminacionNombre($nombre){
		$term = $this->_db->prepare("SELECT id FROM terminaciones WHERE nombre = ?");
		$term->bindParam(1, $nombre);
		$term->execute();

		return $term->fetch();
	}

	public function addTerminaciones($nombre){
		$term = $this->_db->prepare("INSERT INTO terminaciones VALUES(null, ?)");
		$term->bindParam(1, $nombre);
		$term->execute();
	}
}
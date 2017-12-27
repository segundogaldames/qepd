<?php

class statusModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getStatus(){
		$st = $this->_db->query("SELECT id, nombre FROM status ORDER BY nombre");
		return $st->fetchall();
	}

	public function getStatusNombre($nombre){
		//print_r($nombre);exit;
		$st = $this->_db->prepare("SELECT id, nombre FROM status WHERE nombre = ?");
		$st->bindParam(1, $nombre);
		$st->execute();

		return $st->fetch();
	}

	public function addStatus($nombre){
		$st = $this->_db->prepare("INSERT INTO status VALUES(null, ?)");
		$st->bindParam(1, $nombre);
		$st->execute();
	}
}
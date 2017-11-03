<?php

class statusModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getStatusNombre($nombre){
		$st = $this->_db->prepare("SELECT id, nombre FROM destinatarios WHERE nombre = ?");
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
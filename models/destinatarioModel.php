<?php 

class destinatarioModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getDestinatarios(){
		$dest = $this->_db->query("SELECT id, nombre FROM destinatarios ORDER BY nombre");
		return $dest->fetchall();
	}

	public function getDestinatarioNombre($nombre){
		$dest = $this->_db->prepare("SELECT id, nombre FROM destinatarios WHERE nombre = ?");
		$dest->bindParam(1, $nombre);
		$dest->execute();

		return $dest->fetch();
	}

	public function addDestinatario($nombre){
		$dest = $this->_db->prepare("INSERT INTO destinatarios VALUES(null, ?)");
		$dest->bindParam(1, $nombre);
		$dest->execute();
	}
}
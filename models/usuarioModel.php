<?php

class usuarioModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getUsuarios()
	{
		$usu = $this->_db->query("SELECT id, nombre, apellido FROM usuarios ORDER BY nombre ASC");
		return $usu->fetchall();	
	}

	public function getUsuario($email)
	{
		$usu = $this->_db->prepare("select email from usuarios where email = ?");
		$usu->bindParam(1, $email);
		$usu->execute();
		return $usu->fetch();
	}

	public function verificarUsuario($email, $clave)
	{
		$usu = $this->_db->query("select * from usuarios where email = '$email' and password = '".Hash::getHash('sha1', $clave, HASH_KEY)."'");
		return $usu->fetch();
	}

	public function addUsuarios($nombre, $apellido, $email, $clave,$role)
	{
		$usu = $this->_db->prepare("insert into usuarios values(null, ?, ?, ?, ?, now(), now(), ?)");
		$usu->bindParam(1, $nombre);
		$usu->bindParam(2, $apellido);
		$usu->bindParam(3, $email);
		$usu->bindParam(4, Hash::getHash('sha1', $clave, HASH_KEY));
		$usu->bindParam(5, $role);
		$usu->execute();
	}

}
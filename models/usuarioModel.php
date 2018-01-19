<?php

class usuarioModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getUsuarios()
	{
		$usu = $this->_db->query("SELECT u.id, u.nombre, u.apellido, u.email, u.created, u.updated, u.roles_id, r.nombre as rol FROM usuarios as u INNER JOIN roles as r ON u.roles_id = r.id ORDER BY nombre ASC");
		return $usu->fetchall();	
	}

	public function getUsuarioId($id){
		$id = (int) $id;

		$usu = $this->_db->prepare("SELECT u.id, u.nombre, u.apellido, u.email, u.created, u.updated, u.roles_id, r.nombre as rol FROM usuarios as u INNER JOIN roles as r ON u.roles_id = r.id WHERE u.id = ?");
		$usu->bindParam(1, $id);
		$usu->execute();

		return $usu->fetch();
	}

	public function getUsuario($email)
	{
		$usu = $this->_db->prepare("select email from usuarios where email = ?");
		$usu->bindParam(1, $email);
		$usu->execute();
		return $usu->fetch();
	}

	public function getUsuarioVendedor(){
		$usu = $this->_db->query("SELECT id, nombre, apellido, email FROM usuarios WHERE roles_id = 5");
		return $usu->fetchall();
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

	public function editUsuario($id, $nombre, $apellido, $role){
		$id = (int) $id;

		$usu = $this->_db->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, roles_id = ?, updated = now() WHERE id = ?");
		$usu->bindParam(1, $nombre);
		$usu->bindParam(2, $apellido);
		$usu->bindParam(3, $role);
		$usu->bindParam(4, $id);
		$usu->execute();
	}

	public function deleteUsuario($id){
		$id = (int) $id;

		$usu = $this->_db->prepare("DELETE FROM usuarios WHERE id = ?");
		$usu->bindParam(1, $id);
		$usu->execute();
	}

}
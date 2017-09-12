<?php

class empresaModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getEmpresas(){
		$emp = $this->_db->query("SELECT e.id, e.nombre, e.email, e.rut, u.nombre as nom_usuario, u.apellido, t.nombre as tipo, e.created, e.updated FROM empresas as e INNER JOIN usuarios as u ON e.usuario_id = u.id
			INNER JOIN tipo_empresas as t ON e.tipo_empresa_id = t.id ORDER BY e.nombre ASC");
		return $emp->fetchall();
	}

	public function getEmpresa($id){
		$emp = $this->_db->prepare("SELECT e.id, e.nombre, e.email, e.rut, e.usuario_id, e.tipo_empresa_id, u.nombre as nom_usuario, u.apellido, t.nombre as tipo, e.created, e.updated FROM empresas as e INNER JOIN usuarios as u ON e.usuario_id = u.id INNER JOIN tipo_empresas as t ON e.tipo_empresa_id = t.id WHERE e.id = ?");
		$emp->bindParam(1, $id);
		$emp->execute();

		return $emp->fetch();
	}

	public function getEmpresaRut($rut){
		$emp = $this->_db->prepare("SELECT rut FROM empresas WHERE rut = ?");
		$emp->bindParam(1, $rut);
		$emp->execute();
		return $emp->fetch();
	}

	public function getUsuarioEmpresa(){
		$usu = $this->_db->query("SELECT usuario.nombre, usuario.apellido FROM empresas INNER JOIN
		usuario ON empresas.usuario_id = usuario.id ");
		return $usu->fetch();
	}

	public function getTipoEmpresaEmpresa(){
		$tipo = $this->_db->query("SELECT tipo_empresas.nombre FROM empresas INNER JOIN
		tipo_empresas ON empresas.tipo_empresa_id = tipo_empresas.id");
		return $tipo->fetch();
	}

	public function editEmpresa($id, $nombre, $email, $rut, $usuario, $tipo){
		$id = (int) $id;
		//($tipo);exit;

		$emp = $this->_db->prepare("UPDATE empresas SET nombre = ?, email = ?, rut = ?, usuario_id = ?, tipo_empresa_id = ?, updated = now() WHERE id = ?");
		$emp->bindParam(1, $nombre);
		$emp->bindParam(2, $email);
		$emp->bindParam(3, $rut);
		$emp->bindParam(4, $usuario);
		$emp->bindParam(5, $tipo);
		$emp->bindParam(6, $id);
		$emp->execute();
	}

	public function setEmpresa($nombre, $email, $rut, $usuario, $tipo_empresa){
		$usuario = (int) $usuario;
		$tipo_empresa = (int) $tipo_empresa;

		$emp = $this->_db->prepare("INSERT INTO empresas VALUES(null, ?, ?, ?, ?, ?, now(), now())");
		$emp->bindParam(1, $nombre);
		$emp->bindParam(2, $email);
		$emp->bindParam(3, $rut);
		$emp->bindParam(4, $usuario);
		$emp->bindParam(5, $tipo_empresa);
		$emp->execute();
	}
}
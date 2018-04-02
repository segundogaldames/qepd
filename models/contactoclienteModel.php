<?php 
/**
* 
*/
class contactoclienteModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getContactoClientes(){
		$cc = $this->_db->query("SELECT cc.id, cc.observaciones, cc.created_at as fecha, cc.contacto_id, c.nombre as cliente, c.estado FROM contacto_clientes cc INNER JOIN contactos c ON cc.contacto_id = c.id ORDER BY fecha DESC");
		return $cc->fetchall();
	}

	public function getContactoClientesPendientes(){
		$cc = $this->_db->query("SELECT cc.id, cc.observaciones, cc.created_at as fecha, cc.contacto_id, c.nombre as cliente, c.estado FROM contacto_clientes cc INNER JOIN contactos c ON cc.contacto_id = c.id WHERE c.estado = 1 ORDER BY fecha DESC");
		return $cc->fetchall();
	}

	public function getContactoClientesId($id){
		$id = (int) $id;

		$cc = $this->_db->prepare("SELECT cc.id, cc.observaciones, cc.created_at as fecha, c.nombre as cliente FROM contacto_clientes cc INNER JOIN contactos c ON cc.contacto_id = c.id WHERE cc.id = ?");
		$cc->bindParam(1, $id);
		$cc->execute();

		return $cc->fetch();
	}

	public function getContactoClientesContacto($contacto){
		$contacto = (int) $contacto;

		$cc = $this->_db->prepare("SELECT cc.id, cc.observaciones, cc.created_at as fecha, c.nombre as cliente FROM contacto_clientes cc INNER JOIN contactos c ON cc.contacto_id = c.id WHERE cc.contacto_id = ?");
		$cc->bindParam(1, $contacto);
		$cc->execute();

		return $cc->fetchall();
	}

	public function addContactoCliente($observaciones, $contacto){
		$contacto = (int) $contacto;
		$cc = $this->_db->prepare("INSERT INTO contacto_clientes VALUES(null, ?, now(), ?)");
		$cc->bindParam(1, $observaciones);
		$cc->bindParam(2, $contacto);
		$cc->execute();
	}
}
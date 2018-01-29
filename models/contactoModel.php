<?php 
/**
* 
*/
class contactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getContactos(){
		$cont = $this->_db->query("SELECT c.id, c.email, c.asunto_id, c.mensaje, c.created_at as fecha, c.telefono, c.estado, c.urgente, a.nombre as asunto FROM contactos as c INNER JOIN asuntos as a ON c.asunto_id = a.id ORDER BY fecha DESC");
		return $cont->fetchall();
	}

	public function getContactoId($id){
		$id = (int) $id;

		$cont = $this->_db->prepare("SELECT c.id, c.email, c.asunto_id, c.mensaje, c.created_at as fecha, a.nombre as asunto FROM contactos as c INNER JOIN asuntos as a ON c.asunto_id = a.id WHERE c.id = ?");
		$cont->bindParam(1, $id);
		$cont->execute();

		return $cont->fetch();
	}

	public function addContacto($email, $asunto, $mensaje, $telefono, $urgente){
		$cont = $this->_db->prepare("INSERT INTO contactos VALUES(null, ?, ?, ?, now(), ?, 1, ?)");
		$cont->bindParam(1, $email);
		$cont->bindParam(2, $asunto);
		$cont->bindParam(3, $mensaje);
		$cont->bindParam(4, $telefono);
		$cont->bindParam(5, $urgente);
		$cont->execute();
	}
}
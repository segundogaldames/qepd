<?php 
/**
* 
*/
class contactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function addContacto($email, $asunto, $mensaje){
		$cont = $this->_db->prepare("INSERT INTO contactos VALUES(null, ?, ?, ?, now())");
		$cont->bindParam(1, $email);
		$cont->bindParam(2, $asunto);
		$cont->bindParam(3, $mensaje);
		$cont->execute();
	}
}
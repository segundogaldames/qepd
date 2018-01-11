<?php 
/**
* 
*/
class contactocotizacionModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function addContactoCotizacion($destinatario, $nombre, $edad, $estatura, $peso, $mensaje, $cotizacion){
		$cc = $this->_db->prepare("INSERT INTO contacto_cotizaciones VALUES(null, ?, ?, ?, ?, ?, ?, now(), ?)");
		$cc->bindParam(1, $destinatario);
		$cc->bindParam(2, $nombre);
		$cc->bindParam(3, $edad);
		$cc->bindParam(4, $estatura);
		$cc->bindParam(5, $mensaje);
		$cc->bindParam(6, $cotizacion);
		$cc->bindParam(7, $cotizacion);
		$cc->execute();
	}
}
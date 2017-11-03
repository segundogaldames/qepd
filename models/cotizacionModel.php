<?php 

class cotizacionModel extends Model
{
	

	public function __construct(){
		parent::__construct();
	}

	public function addCotizacion($nombre, $rut, $fono, $fono2, $email, $difunto, $edad, $alto, $direccion, $mensaje){
		$cot = $this->_db->prepare("INSERT INTO cotizaciones VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now())");
		$cot->bindParam(1, $nombre);
		$cot->bindParam(2, $rut);
		$cot->bindParam(3, $fono);
		$cot->bindParam(4, $fono2);
		$cot->bindParam(5, $email);
		$cot->bindParam(6, $difunto);
		$cot->bindParam(7, $edad);
		$cot->bindParam(8, $alto);
		$cot->bindParam(9, $direccion);
		$cot->bindParam(10, $mensaje);
		$cot->execute();
	}
}
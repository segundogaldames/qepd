<?php

class capacidadModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function addCapacidades($uadultos, $uparvulos, $reducciones, $anforas){
		$cap = $this->_db->prepare("INSERT INTO capacidades VALUES(null, ?, ?, ?, ?)");
		$cap->bindParam(1, $uadultos);
		$cap->bindParam(2, $uparvulos);
		$cap->bindParam(3, $reducciones);
		$cap->bindParam(4, $anforas);
		$cap->execute();
	}
}

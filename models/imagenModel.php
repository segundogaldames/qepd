<?php

class imagenModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getImagenesNombre($imagen){
		//print_r($imagen);exit;
		$img = $this->_db->prepare("SELECT id FROM imagenes WHERE nombre = ?");
		$img->bindParam(1, $imagen);
		$img->execute();

		return $img->fetch();
	}

	public function addImagenes($titulo, $imagen, $componente, $plan){
		$img = $this->_db->prepare("INSERT INTO imagenes VALUES(null, ?, ?, ?, ?)");
		$img->bindParam(1, $titulo);
		$img->bindParam(2, $imagen);
		$img->bindParam(3, $componente);
		$img->bindParam(4, $plan);
		$img->execute();
	}
}
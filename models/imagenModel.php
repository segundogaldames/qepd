<?php

class imagenModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getImagenes(){
		$img = $this->_db->query("SELECT img.id, img.titulo, img.nombre, img.plan_id, c.nombre as componente, p.nombre  as plan FROM imagenes as img INNER JOIN componentes as c ON img.componente_id = c.id INNER JOIN planes as p ON img.plan_id = p.id");
		return $img->fetchall();
	}

	public function getImagenId($id){
		$id = (int) $id;

		$img = $this->_db->prepare("SELECT img.id, img.titulo, img.nombre, img.componente_id, img.plan_id, c.nombre as componente, p.nombre  as plan FROM imagenes as img INNER JOIN componentes as c ON img.componente_id = c.id INNER JOIN planes as p ON img.plan_id = p.id WhERE img.id = ?");
		$img->bindParam(1, $id);
		$img->execute();

		return $img->fetch();
	}

	public function getImagenesNombre($imagen){
		//print_r($imagen);exit;
		$img = $this->_db->prepare("SELECT id FROM imagenes WHERE nombre = ?");
		$img->bindParam(1, $imagen);
		$img->execute();

		return $img->fetch();
	}

	public function getImagenesPlan($id){
		$id = (int) $id;

		$img = $this->_db->prepare("SELECT img.id, img.titulo, img.nombre, img.plan_id, img.componente_id, c.nombre as componente, c.url_plan, p.nombre  as plan FROM imagenes as img INNER JOIN componentes as c ON img.componente_id = c.id INNER JOIN planes as p ON img.plan_id = p.id WHERE plan_id = ?");
		$img->bindParam(1, $id);
		$img->execute();

		return $img->fetchall();
	}

	public function addImagenes($titulo, $imagen, $componente, $plan){
		$img = $this->_db->prepare("INSERT INTO imagenes VALUES(null, ?, ?, ?, ?)");
		$img->bindParam(1, $titulo);
		$img->bindParam(2, $imagen);
		$img->bindParam(3, $componente);
		$img->bindParam(4, $plan);
		$img->execute();
	}

	public function editImagen($id, $titulo, $componente, $plan){
		//print_r($componente);exit;
		$id = (int) $id;
		$componente = (int) $componente;
		$plan = (int) $plan;

		$img = $this->_db->prepare("UPDATE imagenes SET titulo = ?, componente_id = ?, plan_id = ? WHERE id = ?");
		$img->bindParam(1, $titulo);
		$img->bindParam(2, $componente);
		$img->bindParam(3, $plan);
		$img->bindParam(4, $id);
		$img->execute();
	}
}
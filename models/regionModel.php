<?php

class regionModel extends Model
{
	public function getRegiones(){
		$reg = $this->_db->query("SELECT id, nombre FROM regiones");
		return $reg->fetchall();
	}
}
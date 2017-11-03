<?php

class tiposModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getTiposMueble($mueble)
	{
		$tipos = $this->_db->query("select tipos.id, tipos.nombre from aux_mueble_tipo
									inner join tipos on aux_mueble_tipo.tipo_id = tipos.id
									inner join mueble on aux_mueble_tipo.mueble_id = mueble.id
									where aux_mueble_tipo.mueble_id = {$mueble}");
		$tipos->setFetchMode(PDO::FETCH_ASSOC);
		return $tipos->fetchall();
	}
}
<?php 

class cotizacionModel extends Model
{
	

	public function __construct(){
		parent::__construct();
	}

	public function getCotizaciones(){
		$cot = $this->_db->query("SELECT cot.id, cot.destinatario_id, d.nombre as destinatario, cot.plan_id, p.nombre as plan, cot.cliente, cot.rut, cot.fono_fijo, cot.fono_movil, cot.email, cot.difunto, cot.edad, cot.estatura, cot.peso, cot.observaciones, cot.status_id, st.nombre as status, cot.created, cot.comuna_id, c.nombre as comuna FROM cotizaciones as cot INNER JOIN destinatarios as d ON cot.destinatario_id = d.id INNER JOIN planes as p ON cot.plan_id = p.id INNER JOIN comunas as c ON cot.comuna_id = c.id INNER JOIN status as st ON cot.status_id = st.id");

		return $cot->fetchall();
	}

	public function getCotizacionId($id){
		$id = (int) $id;

		$cot = $this->_db->prepare("SELECT cot.id, cot.destinatario_id, d.nombre as destinatario, cot.plan_id, p.nombre as plan, cot.cliente, cot.rut, cot.fono_fijo, cot.fono_movil, cot.email, cot.difunto, cot.edad, cot.estatura, cot.peso, cot.observaciones, cot.status_id, st.nombre as status, cot.created, cot.comuna_id, c.nombre as comuna FROM cotizaciones as cot INNER JOIN destinatarios as d ON cot.destinatario_id = d.id INNER JOIN planes as p ON cot.plan_id = p.id INNER JOIN comunas as c ON cot.comuna_id = c.id INNER JOIN status as st ON cot.status_id = st.id WHERE cot.id = ?");
		$cot->bindParam(1, $id);
		$cot->execute();

		return $cot->fetch();
	}

	public function getCotizacionCliente($nom_cliente){
		//print_r($nom_cliente);exit;
		$cot = $this->_db->prepare("SELECT cot.id, cot.destinatario_id, d.nombre as destinatario, cot.plan_id, p.nombre as plan, cot.cliente, cot.rut, cot.fono_fijo, cot.fono_movil, cot.email, cot.difunto, cot.edad, cot.estatura, cot.peso, cot.observaciones, cot.created, cot.comuna_id, c.nombre as comuna FROM cotizaciones as cot INNER JOIN destinatarios as d ON cot.destinatario_id = d.id INNER JOIN planes as p ON cot.plan_id = p.id INNER JOIN comunas as c ON cot.comuna_id = c.id WHERE cot.cliente = ? ORDER BY cot.id DESC limit 1");
		$cot->bindParam(1, $nom_cliente);
		$cot->execute();

		return $cot->fetch();
	}

	public function addCotizacion($destinatario, $plan, $nom_cliente, $rut, $fono_fijo, $fono_movil, $email, $nom_difunto, $edad, $alto, $peso, $comuna, $mensaje){
		//print_r($mensaje);exit;

		$cot = $this->_db->prepare("INSERT INTO cotizaciones VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1, now(), now(), ?, ?)");
		$cot->bindParam(1, $destinatario);
		$cot->bindParam(2, $plan);
		$cot->bindParam(3, $nom_cliente);
		$cot->bindParam(4, $rut);
		$cot->bindParam(5, $fono_fijo);
		$cot->bindParam(6, $email);
		$cot->bindParam(7, $nom_difunto);
		$cot->bindParam(8, $edad);
		$cot->bindParam(9, $alto);
		$cot->bindParam(10, $peso);
		$cot->bindParam(11, $mensaje);
		$cot->bindParam(12, $comuna);
		$cot->bindParam(13, $fono_movil);
		$cot->execute();
	}

	public function editCotizacionCliente($id, $destinatario, $plan, $nom_cliente, $rut, $fono_fijo, $fono_movil, $email, $nom_difunto, $edad, $alto, $peso, $comuna, $mensaje){

		$id = (int) $id;
		$cot = $this->_db->prepare("UPDATE cotizaciones SET destinatario_id = ?, plan_id = ?, cliente = ?, rut = ?, fono_fijo = ?, email = ?, difunto = ?, edad = ?, estatura = ?, peso = ?, observaciones = ?, updated = now(), comuna_id = ?, fono_movil = ? WHERE id = ?");
		$cot->bindParam(1, $destinatario);
		$cot->bindParam(2, $plan);
		$cot->bindParam(3, $nom_cliente);
		$cot->bindParam(4, $rut);
		$cot->bindParam(5, $fono_fijo);
		$cot->bindParam(6, $email);
		$cot->bindParam(7, $nom_difunto);
		$cot->bindParam(8, $edad);
		$cot->bindParam(9, $alto);
		$cot->bindParam(10, $peso);
		$cot->bindParam(11, $mensaje);
		$cot->bindParam(12, $comuna);
		$cot->bindParam(13, $fono_movil);
		$cot->bindParam(14, $id);
		$cot->execute();
	}

	public function editCotizacionAdmin($id, $status){
		$id = (int) $id;
		$status = (int) $status;

		$cot = $this->_db->prepare("UPDATE cotizaciones SET status_id = ?, updated = now() WHERE id = ?");
		$cot->bindParam(1, $status);
		$cot->bindParam(2, $id);
		$cot->execute();
	}
}
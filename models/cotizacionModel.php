<?php 

class cotizacionModel extends Model
{
	

	public function __construct(){
		parent::__construct();
	}

	public function getCotizaciones(){
		$cot = $this->_db->query("SELECT cot.id, cot.plan_id, p.nombre as plan, cot.cliente, cot.rut, cot.fono_fijo, cot.fono_movil, cot.email, cot.observaciones, cot.status_id, st.nombre as status, cot.created, cot.comuna_id, c.nombre as comuna, cot.opcion_compra as opcion FROM cotizaciones as cot INNER JOIN planes as p ON cot.plan_id = p.id INNER JOIN comunas as c ON cot.comuna_id = c.id INNER JOIN status as st ON cot.status_id = st.id ORDER BY cot.created DESC");

		return $cot->fetchall();
	}

	public function getCotizacionId($id){
		$id = (int) $id;

		$cot = $this->_db->prepare("SELECT cot.id, cot.plan_id, p.nombre as plan, cot.cliente, cot.rut, cot.fono_fijo, cot.fono_movil, cot.email, cot.observaciones, cot.status_id, st.nombre as status, cot.created, cot.comuna_id, c.nombre as comuna, cot.opcion_compra as opcion FROM cotizaciones as cot INNER JOIN planes as p ON cot.plan_id = p.id INNER JOIN comunas as c ON cot.comuna_id = c.id INNER JOIN status as st ON cot.status_id = st.id WHERE cot.id = ?");
		$cot->bindParam(1, $id);
		$cot->execute();

		return $cot->fetch();
	}

	public function getCotizacionCliente($nom_cliente){
		//print_r($nom_cliente);exit;
		$cot = $this->_db->prepare("SELECT cot.id, cot.plan_id, p.nombre as plan, cot.cliente, cot.rut, cot.fono_fijo, cot.fono_movil, cot.email, cot.observaciones, cot.created, cot.comuna_id, c.nombre as comuna, cot.opcion_compra as opcion FROM cotizaciones as cot INNER JOIN planes as p ON cot.plan_id = p.id INNER JOIN comunas as c ON cot.comuna_id = c.id WHERE cot.cliente = ? ORDER BY cot.id DESC limit 1");
		$cot->bindParam(1, $nom_cliente);
		$cot->execute();

		return $cot->fetch();
	}

	public function addCotizacion($plan, $nom_cliente, $rut, $fono_fijo, $fono_movil, $email, $comuna, $mensaje, $opcion){
		//print_r($opcion);exit;

		$cot = $this->_db->prepare("INSERT INTO cotizaciones VALUES(null, ?, ?, ?, ?, ?, ?, 1, now(), now(), ?, ?, ?)");
		$cot->bindParam(1, $plan);
		$cot->bindParam(2, $nom_cliente);
		$cot->bindParam(3, $rut);
		$cot->bindParam(4, $fono_fijo);
		$cot->bindParam(5, $email);
		$cot->bindParam(6, $mensaje);
		$cot->bindParam(7, $comuna);
		$cot->bindParam(8, $fono_movil);
		$cot->bindParam(9, $opcion);
		$cot->execute();
	}

	public function editCotizacionCliente($id, $plan, $nom_cliente, $rut, $fono_fijo, $fono_movil, $email, $comuna, $mensaje, $opcion){

		$id = (int) $id;
		$cot = $this->_db->prepare("UPDATE cotizaciones SET plan_id = ?, cliente = ?, rut = ?, fono_fijo = ?, email = ?, observaciones = ?, updated = now(), comuna_id = ?, fono_movil = ?, opcion_compra = ?, opcion_compra = ? WHERE id = ?");
		$cot->bindParam(1, $plan);
		$cot->bindParam(2, $nom_cliente);
		$cot->bindParam(3, $rut);
		$cot->bindParam(4, $fono_fijo);
		$cot->bindParam(5, $email);
		$cot->bindParam(6, $mensaje);
		$cot->bindParam(7, $comuna);
		$cot->bindParam(8, $fono_movil);
		$cot->bindParam(9, $opcion_compra);
		$cot->bindParam(10, $id);
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
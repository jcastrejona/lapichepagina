<?php

class medios_model extends CI_Model {

	function geinfo() {
		//$query = $this->db->get('C2_Entradas');
		$this->db->select("nid,Titulo,Resumen,Fecha,Autor,Estado");
		$this->db->limit(15);
		$query = $this->db->get('C2_Entradas');
		return $query->result_array();
	}

	function gsinglee($id_entra) {
		$this->db->where('nid', $id_entra);
		$query = $this->db->get('C2_Entradas');
		$row = $query->row();
		$data = array(
			'eid' => $row->nid,
			'etitle' => $row->Titulo,
			'ecue' => $row->Cuerpo,
			'efec' => $row->Fecha,
			'eaut' => $row->Autor
		);
		return $data;
	}

	function gauthor($id_au) {
		$this->db->where('Id_User', $id_au);
		$query = $this->db->get('C2_Usuarios');
		$row = $query->row();
		if ($query->num_rows > 0) {
			$data = array(
				'aname' => $row->Nombre,
				'auser' => $row->Username
			);
		} else {
			$data = array(
				'aname' => "",
				'auser' => "Ctin"
			);
		}
		return $data;
	}

}
?>


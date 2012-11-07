<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of info_model
 *
 * @author America Movil
 */
class users_model extends CI_Model {

	function guinfo() {
		$query = $this->db->get('C2_Usuarios');
		return $query->result_array();
	}

	function listainfo() {
		$this->db->select('Id_User, Nombre, Experto');
		$query = $this->db->get('C2_Usuarios');
		return $query->result_array();
	}	

	function insertmataderodata() {

		$titulo = $this->input->post("inputtitle", TRUE);
		$fecha = $this->security->xss_clean($this->input->post("inputfecha"));
		$users = $this->security->xss_clean($this->input->post("valuesusers"));
		$usuarios = explode(",", $users);

		//buscar los que tienen 1
		$dataupdate = array(
			"activo" => 0
		);

		$this->db->where('activo', 1);
		$this->db->update('C2_Matadero', $dataupdate);


		//agregar matadero
		$data = array(
			"titulo" => $titulo,
			"fecha" => $fecha
		);

		//echo $data;

		$this->db->insert('C2_Matadero', $data);


		//agregar usuarios
		$lastidmatadero = $this->db->insert_id();
		$cont = 0;
		foreach ($usuarios as $valor) {
			$dato = array(
				"id_Usuario" => $usuarios[$cont],
				"id_Matadero" => $lastidmatadero
			);
			$this->db->insert('C2_Matadero_has_usuarios', $dato);
			$cont++;
		}
	}
	

}

?>

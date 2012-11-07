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
	

	function getDataMatadero() {

		//sacamos el matadero
		$matadero = $this->db->get_where('C2_Matadero', array('activo' => 1), 1);
		//sacamos el id
		foreach ($matadero->result() as $row) {
			$idm = $row->id;
		}
		
		//sacamos el id de usuarios que tienen ese id de matadero
		$users = $this->db->get_where('C2_Matadero_has_usuarios', array('id_Matadero' => $idm));

		//sacamos los datos de los usuarios
		
		
		//guardamos todo
		
		$resultado = array();
		$resultado[0] = $matadero->result_array();
		$resultado[1] = $users->result_array();
		return $resultado;
	}

}

?>

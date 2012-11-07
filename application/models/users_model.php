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
		
		$titulo = $this->security->xss_clean($this->input->post("inputtitle"));
		$fecha  = $this->security->xss_clean($this->input->post("inputfecha"));
		$users  = $this->security->xss_clean($this->input->post("valuesusers"));
		$usuarios = explode(",",$users);
		//buscar los que tienen 1
		
		$this->db->where('activo',1);
		$this->db->update('C2_Matadero',0); 
		
		//agregar
		$data = array(
			"titulo" => $titulo,
			"fecha"  => $fecha
		);
		
		$this->db->insert('C2_Matadero', $data);
		$lastidmatadero =  $this->db->insert_id();
		$cont = 0;
		foreach ($usuarios as $valor) {
			
			$dato = array(
				"id_Usuario" => $usuarios[$cont],
				"id_Matadero" => $lastidmatadero
			);
			$this->db->insert('C2_Matadero_has_usuario', $dato);
			$cont++;
		}
	}

}

?>

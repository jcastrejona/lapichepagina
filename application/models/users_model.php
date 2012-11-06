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
	
	function insertmataderodata(){
		
	}

}

?>

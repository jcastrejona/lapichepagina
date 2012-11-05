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
        $row = $query->row();
        $data = array(
            'id'=>$row->Id_User,
            'nombre' => $row->Nombre,
            'mail' => $row->Correo,
            'user' => $row->Username,
            'pass' => $row->Password,
            'foto' => $row->Foto,
            'exp' => $row->Experto
        );
        return $data;
    }
}

?>

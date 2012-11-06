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
        $data = $this->db->get('C2_Usuarios');
        return $data;
    }

}

?>

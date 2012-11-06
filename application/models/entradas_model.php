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
class entradas_model extends CI_Model {

    function geinfo() {
        $query = $this->db->get('C2_Entradas');
        return $query->result_array();
    }
    function gsinglee($id_entra){
        $this->db->where('ID',$id_entra);
        $query = $this->db->get('C2_Entradas');
        $row = $query->row();
        $data = array(
            'eid' => $row->ID,
            'etitle' => $row->Titulo,
            'eres' => $row->Resumen,
            'ecue' => $row->Cuerpo,
            'efec' => $row->Fecha,
            'eimg' => $row->Ruta_imagen,
            'eaut'=>$row->Autor
        );
        return $data;
        
    }
    
    function gauthor($id_au){
        $this->db->where('Id_User',$id_au);
        $query = $this->db->get('C2_Usuarios');
        $row = $query->row();
        if ($query->num_rows > 0) {
        $data = array(
            'aname' => $row->Nombre,
            'auser' => $row->Username
        );
        }
        else{
            $data = array(
                'aname'=>"",
                'auser'=>"Ctin"
            );
        }
        return $data;
        
    }

}

?>


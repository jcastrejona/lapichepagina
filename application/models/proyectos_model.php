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
class proyectos_model extends CI_Model {

    function gpinfo() {
        $query = $this->db->get('C2_Proyectos');
        return $query->result_array();
    }
    
    
    
    function gsinglep($id_proy){
        $this->db->where('Id_Proyecto',$id_proy);
        $query = $this->db->get('C2_Proyectos');
        $row = $query->row();
        $data = array(
            'pid' => $row->ID_Proyecto,
            'ptitle' => $row->Titulo,
            'pres' => $row->Resumen,
            'pcue' => $row->Cuerpo,
            'pfec' => $row->Fecha,
            'plog' => $row->Ruta_logo
        );
        return $data;
        
    }

}

?>

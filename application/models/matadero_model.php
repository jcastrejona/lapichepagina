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
class matadero_model extends CI_Model {

    function getmataderodata() {
        $query = $this->db->query("SELECT Usuarios.Nombre, Usuarios.Foto, Usuarios.Experto
        FROM C2_Matadero as Matadero, C2_Matadero_has_usuarios as Matadero_Users, C2_Usuarios 
        as Usuarios WHERE Matadero.id=Matadero_Users.id_Matadero and 
        Matadero_Users.id_Usuario=Usuarios.Id_User and Matadero.Activo=1");
        return $query->result_array();
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

    function insertmataderodata() {

        $titulo = $this->security->xss_clean($this->input->post("inputtitle"));
        $fecha = $this->security->xss_clean($this->input->post("inputfecha"));
        $users = $this->security->xss_clean($this->input->post("valuesusers"));
        $usuarios = explode(",", $users);
        //buscar los que tienen 1

        $this->db->where('activo', 1);
        $this->db->update('C2_Matadero', 0);

        //agregar
        $data = array(
            "titulo" => $titulo,
            "fecha" => $fecha
        );

        $this->db->insert('C2_Matadero', $data);
        $lastidmatadero = $this->db->insert_id();
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

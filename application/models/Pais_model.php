<?php

class Pais_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function list_all() {
        $query = $this->db->query("select * from paises");
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }

    function add($nombre) {
        $this->db->query("insert into paises(nombre,estado) values($nombre,'ACTIVO')");
        $this->db->close();
    }

    function del($pais_id) {
        $this->db->query("delete * from paises where pais_id=$pais_id");
        $this->db->close();
    }

    function edit($nombre, $estado, $pais_id) {
        $this->db->query("update paises set nombre='" . $nombre . "',estado='" . $estado . "' where pais_id='" . $pais_id . "'");
        $this->db->close();
    }

}

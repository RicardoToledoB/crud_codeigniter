<?php

class Usuario_model  extends CI_Model{
     function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function list_all() {
        $query = $this->db->query("select * from usuarios");
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }

    function add($nombre,$apepat,$apemat,$ciudad_id) {
        $this->db->query("insert into usuarios(nombre,apepat,apemat,estado,ciudad_id) values($nombre,$apepat,$apemat,'ACTIVO',$ciudad_id)");
        $this->db->close();
    }

    function del($usuario_id) {
        $this->db->query("delete * from paises where usuario_id=$usuario_id");
        $this->db->close();
    }

    function edit($usuario_id,$nombre,$apepat,$apemat,$estado,$ciudad_id) {
        $this->db->query("update paises set nombre='" . $nombre . "',apepat='".$apepat."',apemat='".$apemat."',estado='" . $estado . "',ciudad_id='".$ciudad_id."' where usuario_id='" . $usuario_id . "'");
        $this->db->close();
    }
}

<?php
class Ciudad_model extends CI_Model {
     function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function list_all() {
        $query = $this->db->query("select ciudades.ciudad_id,ciudades.nombre,paises.nombre as pais_id,ciudades.estado from ciudades,paises where ciudades.pais_id=paises.pais_id");
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }
   
    function listado_paises(){
        $query = $this->db->query("select * from paises");
        $result = $query->result_array();
        $this->db->close();
        return $result;
        
    }
    function add($nombre,$pais_id,$estado) {
        $this->db->query("insert into ciudades(nombre,estado,pais_id) values('".$nombre."','".$estado."','".$pais_id."')");
        $this->db->close();
    }

    function del($ciudad_id) {
        $this->db->query("delete * from ciudades where ciudad_id=$ciudad_id");
        $this->db->close();
    }

    function edit($ciudad_id,$nombre, $estado, $pais_id) {
        $this->db->query("update paises set nombre='" . $nombre . "',estado='" . $estado . "',$pais_id='".$pais_id."' where ciudad_id='" . $ciudad_id . "'");
        $this->db->close();
    }
}

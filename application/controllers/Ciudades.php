<?php

class Ciudades extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("Ciudad_model");
        $this->load->helper("url");
    }

    function index() {
        $data["todos"] = $this->Ciudad_model->list_all();
        $this->load->view("ciudades.php", $data);
    }
    function listado_ciudades(){
        $ciudades = $this->Ciudad_model->list_all();
        echo json_encode($ciudades);
    }
        
    function listado_paises() {
        $ciudades = $this->Ciudad_model->listado_paises();
        echo json_encode($ciudades);
    }

    function add() {
        $nombre = $this->input->post("nombre");
        $pais_id = $this->input->post("pais_id");
        $this->Ciudad_model->add($nombre, $pais_id, 'Activo');
    }

    function del($ciudad_id) {
        $this->Ciudad_model->del($ciudad_id);
    }

    function edit($ciudad_id, $nombre, $estado, $pais_id) {
        $this->Ciudad_model->edit($ciudad_id, $nombre, $estado, $pais_id);
    }

}

<?php

class Paises extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model("Pais_model");
        $this->load->helper("url");
    }
    function index(){
        $data["todos"] = $this->Pais_model->list_all();
        $this->load->view("paises.php", $data);
    }
}

<?php

class Usuarios extends CI_Controller {
    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model("Usuario_model");
        $this->load->helper("url");
    }
    function index(){
        $data["todos"] = $this->Usuario_model->list_all();
        $this->load->view("usuarios.php", $data);
        
    }
}

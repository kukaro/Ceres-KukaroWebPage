<?php //Test.php

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $css = array("bootstrap" => base_url("application/views/public/bootstrap/dist/css/bootstrap.min.css"),
            "custom" => base_url("application/views/public/custom/dist/css/custom.css")
        );
        $js = array("jquery" => base_url("application/views/public/jquery/dist/jquery.min.js"),
            "bootstrap" => base_url("application/views/public/bootstrap/dist/js/bootstrap.min.js")
        );
        $data = array("css" => $css,
            "js" => $js);

        $this->load->view('main', $data);
    }
}

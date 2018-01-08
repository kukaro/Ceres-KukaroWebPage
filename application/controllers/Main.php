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
        $css = array("bootstrap" => "application/views/public/bootstrap/dist/css/bootstrap.min.css",
            "custom" =>"application/views/public/custom/dist/css/custom.css"
        );
        $js = array("jquery" => "application/views/public/jquery/dist/jquery.min.js",
            "bootstrap" => "application/views/public/bootstrap/dist/js/bootstrap.min.js",
            "custom" => "application/views/public/custom/dist/js/main.js"
        );
        $image = array("custom-ceres" => "application/views/public/custom/dist/image/ceres_origin.gif");
        $data = array("css" => $css,
            "js" => $js,
            "image" => $image);

        $this->load->view('main', $data);
    }
}

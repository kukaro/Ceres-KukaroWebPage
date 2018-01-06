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
        $data = array("css"=>base_url("application/views/public/bootstrap/dist/css/bootstrap.min.css"));
        $this->load->view('main',$data);
    }
}

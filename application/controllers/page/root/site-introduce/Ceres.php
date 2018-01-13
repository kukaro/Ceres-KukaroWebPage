<?php //Test.php

class Ceres extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('page');
        pagePreLoad($this);
    }

    public function index()
    {
        $data = pageMainLoad($this,get_class(),current_url());
        $this->load->view('main', $data);
    }
}

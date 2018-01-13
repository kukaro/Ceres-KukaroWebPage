<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-14
 * Time: 오전 2:23
 */

class Sign_Out extends CI_Controller
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
        $this->session->unset_userdata('isLogin');
        $this->load->view('main', $data);
    }
}
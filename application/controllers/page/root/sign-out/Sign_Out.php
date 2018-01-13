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
        $this->session->unset_userdata('isLogin');
        echo("<script>location.href='/CI/main';</script>");
    }
}
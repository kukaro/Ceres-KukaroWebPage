<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-14
 * Time: 오전 9:02
 */

class File_Manage extends CI_Controller
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
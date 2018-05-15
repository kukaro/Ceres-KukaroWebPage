<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018. 4. 9.
 * Time: PM 10:29
 */

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nav_List_Model');
    }

    public function index()
    {
        $db_name = $this->uri->segment(3);
        $nav_list = $this->Nav_List_Model->get_all_entry();
        echo json_encode($nav_list);
    }
}
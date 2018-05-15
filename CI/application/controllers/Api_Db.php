<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018. 4. 9.
 * Time: PM 10:29
 */

class Api_Db extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Generic_Model');
    }

    public function index()
    {
        $table_name = $this->uri->segment(3);
        $nav_list = $this->Generic_Model->get_all_entry($table_name);
        echo json_encode($nav_list);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: kukaro
 * Date: 2018. 5. 16.
 * Time: AM 1:37
 */

class Nav_List_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_entry(){
        $query = $this->db->get('nav_list');
        return $query->result_array();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-10
 * Time: 오전 5:42
 */

class NavSubListModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function readOne($externalName)
    {
        $where = array('external_name' => $externalName);
        $query = $this->db->get_where('nav_list', $where);
        $result = $query->result_array();
        return $result;
    }

    public function readAll($mainNavName)
    {
        $where = array('main_nav_name' => $mainNavName);
        $this->db->order_by("internal_name", "asc");
        $query = $this->db->get_where('nav_sub_list',$where);
        $result = $query->result_array();
        return $result;
    }
}
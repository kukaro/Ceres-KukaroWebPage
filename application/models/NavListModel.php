<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-09
 * Time: 오후 5:38
 */

class NavListModel extends CI_Model
{
    private $externalName;
    private $internalName;
    private $isRoot;
    private $owner;
    private $showState;

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

    public function readLogoutState()
    {
        $this->db->order_by("internal_name", "asc");
        $where = array('show_state' => null);
        $query = $this->db->get_where('nav_list', $where);
        $resultNull = $query->result_array();
        $where = array('show_state' => 'out');
        $query = $this->db->get_where('nav_list', $where);
        $resultOut = $query->result_array();
        $result = array_merge($resultNull, $resultOut);
        return $result;
    }
    public function readLoginState()
    {
        $this->db->order_by("internal_name", "asc");
        $where = array('show_state' => null);
        $query = $this->db->get_where('nav_list', $where);
        $resultNull = $query->result_array();
        $where = array('show_state' => 'in');
        $query = $this->db->get_where('nav_list', $where);
        $resultOut = $query->result_array();
        $result = array_merge($resultNull, $resultOut);
        return $result;
    }


    public function readAll()
    {
        $this->db->order_by("internal_name", "asc");
        $query = $this->db->get('nav_list');
        $result = $query->result_array();
        return $result;
    }
}
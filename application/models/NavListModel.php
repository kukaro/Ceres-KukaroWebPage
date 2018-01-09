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

    public function read($externalName){
        $where = array('external_name'=> $externalName);
        $query = $this->db->get_where('nav_list',$where);
        $result = $query->result_array();
        return $result;
    }
}
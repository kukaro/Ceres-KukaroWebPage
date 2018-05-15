<?php
/**
 * Created by PhpStorm.
 * User: kukaro
 * Date: 2018. 5. 16.
 * Time: AM 1:37
 */

class Generic_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_entry($table_name){
        $query = $this->db->get($table_name);
        return $query->result_array();
    }
}
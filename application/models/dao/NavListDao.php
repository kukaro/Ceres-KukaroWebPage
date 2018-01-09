<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-09
 * Time: 오후 6:14
 */

class NavListDao
{
    private static $instance;
    public function __construct()
    {
        $this->load->database();
    }
    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function read($externalName)
    {
        $result = $this->db->query("select * from nav_list WHERE external_name='$externalName'")->result_array();
        return $result;
    }
}
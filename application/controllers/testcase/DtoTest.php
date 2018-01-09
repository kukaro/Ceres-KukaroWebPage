<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-09
 * Time: 오후 6:55
 */
class DtoTest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $result = $this->db->query("select * from nav_list")->result_array();
        foreach ($result as $item) {
            echo $item['external_name'];
        }
        echo "DTO Test";
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-05
 * Time: 오전 4:21
 */

class DatabaseConnection extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
    }

    public function index()
    {
        $result = $this->db->query('select * from member')->result_array();
        foreach ($result as $item) {
            echo $item['name'].'<br>';
        }

    }
}
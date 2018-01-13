<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-14
 * Time: 오전 12:20
 */

class SessionTest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function index()
    {
        $session = $this->session->all_userdata();
        foreach ($session as $value) {
            echo '<head><meta charset="utf-8"></head>';
            echo $value . '<br>';
        }
    }
}
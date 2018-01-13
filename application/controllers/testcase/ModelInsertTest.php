<?php

/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-09
 * Time: 오후 6:55
 */
class ModelInsertTest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $this->load->model('MemberModel', '', true);
        $value = $this->MemberModel->create('root', hash_hmac('sha256', 'root', 'root'), 'kukaro4515@pukyong.ac.kr', date("Y-m-d H:i:s", time()), 'This is root', strtoupper('M'), date("Y-m-d H:i:s", strtotime('1993-01-05')));
        echo $value;
        //성공하면 1(true)를 반환
    }
}

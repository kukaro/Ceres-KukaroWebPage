<?php //FormReceive.php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-05
 * Time: 오전 3:20
 */

class FormReceive extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }
    public function index()
    {
        if ($this->input->post('submit') == true) {
            $data['value1'] = $this->input->post('str1');
            $data['value2'] = $this->input->post('str2');
            $data['method'] = 'post';
        }
        else if($this->input->get('submit') == true){
            $data['value1'] = $this->input->get('str1');
            $data['value2'] = $this->input->post('str2');
            $data['method'] = 'get';
        }
        $this->load->view('form_receive_view',$data);
    }
}
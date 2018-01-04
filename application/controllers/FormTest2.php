<?php //FormTest.php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-04
 * Time: 오후 7:45
 */

class FormTest2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('form_test_view2');
        //$this->getvalue();
    }
    function getvalue()
    {
        if ($this->input->post('submit') == true) {
            $data['value'] = $this->input->post('str');
            $data['method'] = 'post';
            $this->load->view('form_receive_view',$data);
            echo $data['value'].$data['method'];
        }
        else if($this->input->get('submit') == true){
            $data['value'] = $this->input->get('str');
            $data['method'] = 'get';
            $this->load->view('form_receive_view',$data);
            echo $data['value'].$data['method'];
        }
    }
}
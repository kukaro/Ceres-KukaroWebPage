<?php //FormTest.php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-04
 * Time: 오후 7:45
 */

class FormTest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('form_test_view');
        $this->getvalue();
    }
    function getvalue()
    {
        if ($this->input->post('submit') == true) {
            $data['value'] = $this->input->post('str');
            echo $data['value'];
        }
    }
}
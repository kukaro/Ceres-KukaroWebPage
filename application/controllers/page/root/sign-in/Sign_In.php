<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-12
 * Time: 오후 3:58
 */

class Sign_In extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('page');
        pagePreLoad($this);
    }

    public function index()
    {
        $data = pageMainLoad($this,get_class(),current_url());
        $this->load->view('main', $data);
    }

    public function process()
    {
        $isSuccess = false;
        if ($this->input->post() == true) {
            $id = $this->input->post('signInId');
            $pass = $this->input->post('signInPass');
            $result = $this->MemberModel->readOne($id, $pass);
            if(count($result)==1){
                $isSuccess = true;
                $this->session->set_userdata($result[0]);
                $this->session->set_userdata('isLogin',true);
            }
            else{
                $isSuccess = false;
            }
        } else if ($this->input->get() == true) {

        }
        echo("<script>location.href='/CI/main';</script>");
    }
}
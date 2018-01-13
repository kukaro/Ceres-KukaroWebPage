<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-12
 * Time: 오후 3:58
 */

class Sign_Up extends CI_Controller
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
        //TODO 처리해야함
        if ($this->input->post() == true) {
            $id = $this->input->post('signUpId');
            $pass = $this->input->post('signUpPass');
            $passV = $this->input->post('signUpPassV');
            if ($pass == $passV) {
                $isSuccess = true;
            }
            $email = $this->input->post('signUpEmail');
            $joinDate = date("Y-m-d H:i:s", time());
            $gender = $this->input->post('signUpGender');
            $birthDate = $this->input->post('signUpBirthDate');
            if (strpos($gender, '남자') !== false) {
                $gender = 'm';
            } else if (strpos($gender, '여자') !== false) {
                $gender = 'f';
            } else {
                $isSuccess = false;
            }
            if ($isSuccess) {
                $this->MemberModel->create($id, $pass, $email, $joinDate, null, $gender, $birthDate);
            }
        } else if ($this->input->get() == true) {

        }
        echo("<script>location.href='/CI/main';</script>");
    }
}
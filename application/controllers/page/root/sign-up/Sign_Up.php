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
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('NavListModel', '', true);
        $this->load->model('NavSubListModel', '', true);
        $this->load->model('MemberModel', '', true);
    }

    public function index()
    {
        $arr = current_url();
        $arr = explode('/', $arr);
        $body = '';
        for ($i = 4; $i < count($arr); $i++) {
            $body = $body . '/' . $arr[$i];
        }
        $className = strtolower(get_class());
        $navList = $this->NavListModel->readLogoutState();
        $navSubList = array();
        foreach ($navList as $value) {
            $navSubList[$value['external_name']] = $this->NavSubListModel->readAll($value['external_name']);
        };
        $css = array("bootstrap" => "/CI/application/views/public/bootstrap/dist/css/bootstrap.min.css",
            "custom" => "/CI/application/views/public/custom/dist/css/custom.css"
        );
        $js = array("jquery" => "/CI/application/views/public/jquery/dist/jquery.min.js",
            "bootstrap" => "/CI/application/views/public/bootstrap/dist/js/bootstrap.min.js",
            "custom" => "/CI/application/views/public/custom/dist/js/main.js"
        );
        $image = array("custom-ceres" => "/CI/application/views/public/custom/dist/image/ceres_origin.gif");
        $data = array("css" => $css,
            "js" => $js,
            "image" => $image,
            "navList" => $navList,
            "navSubList" => $navSubList,
            "body" => 'page' . $body . '/' . $className,
        );
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
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
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('NavListModel', '', true);
        $this->load->model('NavSubListModel', '', true);
        $this->load->model('MemberModel', '', true);
        $this->load->library('session');
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
<?php //Main.php
/**
 * Class Main
 * 이 클래스는 page_helper를 사용하지 않는 특수한 클래스입니다.
 */
class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('NavListModel', '', true);
        $this->load->model('NavSubListModel', '', true);
        $this->load->library('session');
    }

    public function index()
    {
        if($this->session->userdata('isLogin')){
            $navList = $this->NavListModel->readLoginState();
        }
        else{
            $navList = $this->NavListModel->readLogoutState();
        }
        $navSubList = array();
        foreach($navList as $value){
            $navSubList[$value['external_name']]=$this->NavSubListModel->readAll($value['external_name']);
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
            "body" => 'home'
        );
        $this->load->view('main', $data);
    }
}

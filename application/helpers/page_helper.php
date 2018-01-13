<?php
function pagePreLoad($obj){
    $obj->load->helper('form');
    $obj->load->helper('url');
    $obj->load->database();
    $obj->load->model('NavListModel', '', true);
    $obj->load->model('NavSubListModel', '', true);
    $obj->load->model('MemberModel', '', true);
    $obj->load->library('session');
}

/**
 * pageMainLoad는 반드시 pagePreLoad가 로딩되고 난 후에 사용할 수 있습니다.
 * @param $obj
 * @param $className
 * @param $curl
 * @return array
 */
function pageMainLoad($obj, $className, $curl){

    $arr = $curl;
    $arr = explode('/', $arr);
    $body = '';
    for ($i = 4; $i < count($arr); $i++) {
        $body = $body . '/' . $arr[$i];
    }
    $className = strtolower($className);
    $navList = $obj->NavListModel->readLogoutState();
    $navSubList = array();
    foreach ($navList as $value) {
        $navSubList[$value['external_name']] = $obj->NavSubListModel->readAll($value['external_name']);
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
    return $data;
}
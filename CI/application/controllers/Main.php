<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018. 4. 9.
 * Time: PM 10:29
 */

class Main extends CI_Controller
{
    public function index()
    {
        $this->load->view('main');
    }
}
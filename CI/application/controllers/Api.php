<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018. 4. 9.
 * Time: PM 10:29
 */

class Api extends CI_Controller
{
    public function index()
    {
        echo $this->uri->segment(3).'<br>';
        echo 'this is api';
    }
}
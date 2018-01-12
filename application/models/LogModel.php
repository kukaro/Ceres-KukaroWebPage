<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-12
 * Time: 오후 2:14
 */

class LogModel extends CI_Model
{
    private $ip;
    private $id;
    private $comment;
    private $type;
    private $datae;

    public function __construct()
    {
        parent::__construct();
    }

    public function create($id,$ip,$comment,$type)
    {

    }
}
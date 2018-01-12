<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-12
 * Time: 오후 2:42
 */

class MemberModel extends CI_Model
{
    private $id;
    private $pass;
    private $email;
    private $join_date;
    private $comment;
    private $gender;
    private $birth_date;

    public function __construct()
    {
        parent::__construct();
    }

    public function create($id, $pass, $email, $join_date, $comment, $gender, $birth_date)
    {

    }
}
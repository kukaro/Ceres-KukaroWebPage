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
    private $joinDate;
    private $comment;
    private $gender;
    private $birthDate;

    public function __construct()
    {
        parent::__construct();
    }

    public function create($id, $pass, $email, $joinDate, $comment, $gender, $birthDate)
    {
        $data = array(
            'id' => $id,
            'pass' => $pass,
            'email' => $email,
            'join_date' => $joinDate,
            'comment' => $comment,
            'gender' => $gender,
            'birth_date' => $birthDate
        );
        $query = $this->db->insert('member_ceres', $data);
        return $query;
    }
}
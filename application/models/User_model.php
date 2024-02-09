<?php
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function user(){
       $this->db->select('*');
       $res = $this->db->get('logins');
       return $res->result_array();
    }
}
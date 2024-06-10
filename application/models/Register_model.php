<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function insert_user(){
    //
    $uuid_query = "SELECT uuid_generate_v4() AS uuid";
    $query = $this->db->query($uuid_query);
    $row = $query->row();

    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'user_id' => $row->uuid
    );
    $this->db->insert('users', $data);
    return ($this->db->affected_rows()) ? TRUE : FALSE;
    }

    public function get_user_by_name($userName) {
        $query = $this->db->get_where('users', array('name' => $userName));
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false; 
        }
    }


}
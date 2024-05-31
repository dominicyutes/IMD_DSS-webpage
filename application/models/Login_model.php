<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    function __construct() {
        parent::__construct();
		
    }
	
	public function check_login()
	{
		 $where = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
         );
         return $this->db->select('name,email,user_id,type')->get_where('users',$where)->row_array();
        
	}
	

}
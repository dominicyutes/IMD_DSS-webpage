<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('Register_model','register');
    }
	
	public function index()
	{
		if (!empty($this->input->post())) {
			$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]',['required' => 'Enter name','min_length'=>'Name should be minimum 5 characters']);

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',['required' => 'Enter email','valid_email'=>'Enter valid email','is_unique'=>'Email already registered']);

			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[cpassword]',['required' => 'Enter password','min_length'=>'Password should be minimum 5 characters','matches'=>'Password not matched with the confirm password']);
			
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[5]',['required' => 'Enter confirm password','min_length'=>'Confirm password']);

			// $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]', array(
            // 'required' => 'Enter password', 'min_length' => 'Password should be minimum 5 characters'));

			if ($this->form_validation->run() == TRUE) {
            $result = $this->register->insert_user();
               if ($result == TRUE) {
                   $this->session->set_flashdata('message', 'Data inserted successfully');
                   redirect('login');
               } else {
                   $this->session->set_flashdata('message1', 'Data not inserted');
               }
            } else {
			   $this->session->set_flashdata('message2', 'Data not inserted,form_validation error DB');
            }
			
		}

		$this->load->view('register');
		 
	}
	

}
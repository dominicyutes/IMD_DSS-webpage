<?php
class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('loginView');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login_form');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->auth_model->authenticate($username, $password)) {
                // Redirect to the dashboard or another page
            } else {
                // Invalid login; show an error
                $this->load->view('login_form');
            }
        }
    }
}
?>
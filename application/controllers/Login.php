<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model', 'login');
    }

    public function index()
    {
        if (!empty($this->input->post())) {

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', ['required' => 'Enter email', 'valid_email' => 'Enter valid email']);

            $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Enter password']);

            if ($this->form_validation->run() == TRUE) {
                $result = $this->login->check_login();

                if (!empty($result)) {
                    $array = array(
                        'user_id' => $result['user_id'],
                        'email' => $result['email'],
                        'name' => $result['name'],
                        'type' => $result['type'],
                        'is_loggedin' => TRUE
                    );
                    $this->session->set_userdata($array);

                    $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>USER: ' . ucfirst($result['name']) . '!!</strong><a href="#" class="close" data-dismiss= "alert" aria-label="close" title="close">X</a></div>');

                    // redirect('homePage');
                    redirect('homePage?user_id=' . $result['user_id']);

                } else {
                    $this->session->set_flashdata('message1', '<div class="alert alert-danger"><strong>Wrong email or password!!</strong><a href="#" class="close" data-dismiss= "alert" aria-label="close" title="close">X</a></div>');
                    redirect('login');
                }

            }

        }
        $this->load->view('login');
    }

    public function logout()
    {
        $array = array(
            'name',
            'email',
            'is_loggedin',
            'user_id'
        );
        $this->session->unset_userdata($array);

        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>LogedOut!!</strong><a href="#" class="close" data-dismiss= "alert" aria-label="close" title="close">X</a></div>');

        redirect('login');
    }

    public function process_form()
    {
        $email = $this->input->post('email');

        $this->session->set_userdata('user_email', $email);

        ?>
        <script>
            alert("Email passed to session: <?php echo $email; ?>");
        </script>
        <?php

        redirect('body');
    }


}
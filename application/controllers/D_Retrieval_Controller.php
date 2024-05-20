<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_Retrieval_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->_check_session();
    }

    private function _check_session() {
        if (!$this->session->has_userdata('name')) {
            redirect('login');
        }
    }

    public function index(){
        $data = array();
        $name = $this->session->userdata('name');
        $data['name'] = $name;
    
         $this->load->view('Data_Retrieval/D_Retrieval_view');
    }

}
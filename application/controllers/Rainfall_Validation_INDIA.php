<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rainfall_Validation_INDIA extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Rainfall_Validation_INDIA_Model', 'ofm');
    }




    public function index()
    {

        
        $data['stations'] = $this->ofm->get_stations();

        $this->load->view('Menu/Rainfall_Validation_INDIA', $data);
    }

    
}

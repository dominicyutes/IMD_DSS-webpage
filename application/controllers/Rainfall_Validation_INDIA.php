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

        $data['regionNames'] = $this->ofm->get_unique_region_names(); 
        $this->load->view('Menu/Rainfall_Validation_INDIA', $data);
    }

    
    public function get_subdivisions() {
        $region_name = $this->input->post('region_name');
        $this->load->model('Rainfall_Validation_INDIA_Model');
        $subdivisions = $this->Rainfall_Validation_INDIA_Model->get_unique_subdivision_names($region_name);
    
        echo json_encode($subdivisions); // Return subdivisions as JSON
    }

    public function get_states() {
        $subdiv_name = $this->input->post('subdiv_name');
        $this->load->model('Rainfall_Validation_INDIA_Model');
        $states = $this->Rainfall_Validation_INDIA_Model->get_unique_state_names($subdiv_name);
    
        echo json_encode($states); // Return states as JSON
    }
}

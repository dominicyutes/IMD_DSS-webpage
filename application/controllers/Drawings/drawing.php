<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Drawing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load your model
        $this->load->model('Drawings_model');
    }

    public function index()
    {
        $this->load->view('homePage');
    }

    public function fetch_names()
    {
        $selectedDate = $this->input->get('date');

        $this->load->model('Drawings_model');

        $names = $this->Drawings_model->get_names($selectedDate);

        header('Content-Type: application/json');
        echo json_encode($names);
    }

    public function fetch_names_odisha()
    {
        $selectedDate = $this->input->get('date');

        $this->load->model('Drawings_model');

        $names = $this->Drawings_model->get_names_odisha($selectedDate);

        header('Content-Type: application/json');
        echo json_encode($names);
    }

    public function fetch_names_delhi()
    {
        $selectedDate = $this->input->get('date');

        $this->load->model('Drawings_model');

        $names = $this->Drawings_model->get_names_delhi($selectedDate);

        header('Content-Type: application/json');
        echo json_encode($names);
    }
    public function save_coordinates()
    {
        // Get POST data
        $json_data = file_get_contents('php://input');

        // Decode JSON data
        $data = json_decode($json_data, true);

        // Debugging: Echo the received data
        // echo "<pre>";
        // echo "Received data from view page:\n";
        // var_dump($data);
        // echo "</pre>";

        // Load model
        // $this->load->model('Drawings_model');

        // Call model method to insert data into PostgreSQL table
        $result = $this->Drawings_model->insert_coordinates($data);

        // Check if data insertion was successful
        if ($result) {
            echo "Coordinates saved successfully";
        } else {
            echo "Error saving coordinates";
        }
    }

    public function save_coordinates_odisha()
    {
        $json_data = file_get_contents('php://input');

        $data = json_decode($json_data, true);

        
 
        $result = $this->Drawings_model->insert_coordinates_odisha($data);

        if ($result) {
            echo "Coordinates saved successfully";
        } else {
            echo "Error saving coordinates";
        }
    }

    public function save_coordinates_delhi()
    {
        $json_data = file_get_contents('php://input');

        $data = json_decode($json_data, true);

        
 
        $result = $this->Drawings_model->insert_coordinates_delhi($data);

        if ($result) {
            echo "Coordinates saved successfully";
        } else {
            echo "Error saving coordinates";
        }
    }
    
    public function save_coordinates_to_hq_odisha()
    {
        // Read JSON data from request body
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
    
        // Debug: Output received data
        // echo "<pre>";
        // echo "Received data from view page:\n";
        // var_dump($data);
        // echo "</pre>";
    
        // Process received data
        if (!empty($data)) {
            // Pass the data to the model method for insertion
            $result = $this->Drawings_model->insert_coordinates_to_hq_odisha($data);
    
            // if ($result) {
            //     echo "Coordinates saved successfully";
            // } else {
            //     echo "Error saving coordinates";
            // }
        } else {
            echo "No data received";
        }
    }

    public function save_coordinates_to_hq_delhi()
    {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
        if (!empty($data)) {
            $result = $this->Drawings_model->insert_coordinates_to_hq_delhi($data);
    
        } else {
            echo "No data received";
        }
    }
    
    

    public function get_lat_long()
    {
        // Get data from AJAX request
        $date = $this->input->post('date');
        $name = $this->input->post('name');

        // Call model function to get latitude and longitude
        $result = $this->Drawings_model->get_lat_long_from_database($date, $name);

        // Return JSON response
        echo json_encode($result);
    }

    public function get_lat_long_odisha()
    {
        // Get data from AJAX request
        $date = $this->input->post('date');
        $name = $this->input->post('name');

        // Call model function to get latitude and longitude
        $result = $this->Drawings_model->get_lat_long_from_database_odisha($date, $name);

        // Return JSON response
        echo json_encode($result);
    }

    public function get_lat_long_delhi()
    {
        // Get data from AJAX request
        $date = $this->input->post('date');
        $name = $this->input->post('name');

        // Call model function to get latitude and longitude
        $result = $this->Drawings_model->get_lat_long_from_database_delhi($date, $name);

        // Return JSON response
        echo json_encode($result);
    }


    public function delete_row()
    {

        // Get parameters from the AJAX request
        $date = $this->input->post('date');
        $name = $this->input->post('name');

        // Call the model function to delete row
        $deleted = $this->Drawings_model->deleterow($date, $name);

        if ($deleted) {
            echo "Row deleted successfully";
        } else {
            echo "No matching row found";
        }
    }



    public function fetch_name_odisha()
    {
        $selectedDate = $this->input->get('date');


        $names = $this->Drawings_model->get_names_odisha($selectedDate);

        header('Content-Type: application/json');

        if ($names !== false) {
            echo json_encode($names);
        } else {
            http_response_code(500);
            echo json_encode(array('error' => 'Error fetching names for the selected date'));
        }
    }

    public function fetch_name_odisha_hq()
    {
        $selectedDate = $this->input->get('date');


        $names = $this->Drawings_model->get_names_odisha_hq($selectedDate);

        header('Content-Type: application/json');

        if ($names !== false) {
            echo json_encode($names);
        } else {
            http_response_code(500);
            echo json_encode(array('error' => 'Error fetching names for the selected date'));
        }
    }


    public function fetch_name_delhi_hq()
    {
        $selectedDate = $this->input->get('date');


        $names = $this->Drawings_model->get_names_delhi_hq($selectedDate);

        header('Content-Type: application/json');

        if ($names !== false) {
            echo json_encode($names);
        } else {
            http_response_code(500);
            echo json_encode(array('error' => 'Error fetching names for the selected date'));
        }
    }

    // public function get_names_odisha($date)
    // {
    //     $query = $this->db->select('name, latitude, longitude')
    //         ->from('weather_inference_drawings_mc_odisha')
    //         ->where('date', $date)
    //         ->get();

    //     if ($query->num_rows() > 0) {
    //         return $query->result_array();
    //     } else {
    //         return false;
    //     }
    // }



}
<?php

defined('BASEPATH') or exit ('No direct script access allowed');



class Drawing extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load your model
        $this->load->model('Drawings_model');
    }

    public function index() {
        $this->load->view('homePage');
    }

    public function fetch_names() {
        // Retrieve the date parameter from the AJAX request
        $selectedDate = $this->input->get('date');

        // Load the model
        $this->load->model('Drawings_model');

        // Call the model method to get names for the selected date
        $names = $this->Drawings_model->get_names($selectedDate);

        // Send JSON response
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
        // var_dump($data);f10
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


    public function get_lat_long() {
        // Get data from AJAX request
        $date = $this->input->post('date');
        $name = $this->input->post('name');

        // Call model function to get latitude and longitude
        $result = $this->Drawings_model->get_lat_long_from_database($date, $name);

        // Return JSON response
        echo json_encode($result);
    }


    public function delete_row() {

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
    

}
<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Drawing extends CI_Controller
{

    public function save_coordinates()
    {
        // Get POST data
        $json_data = file_get_contents('php://input');

        // Decode JSON data
        $data = json_decode($json_data, true);

        // Debugging: Echo the received data
        echo "<pre>";
        echo "Received data from view page:\n";
        var_dump($data);
        echo "</pre>";

        // Load model
        $this->load->model('Drawings_model');

        // Call model method to insert data into PostgreSQL table
        $result = $this->Drawings_model->insert_coordinates($data);

        // Check if data insertion was successful
        if ($result) {
            echo "Coordinates saved successfully";
        } else {
            echo "Error saving coordinates";
        }
    }
}

<?php
class Drawings_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert_coordinates($data)
    {
        // Log received data
        // echo "<pre>";
        // echo "Data received in model:\n";
        // var_dump($data);
        // echo "</pre>";

        // Extract data from $data array
        $name = $data['name'];
        $latitudes = $data['latitudes'];
        $longitudes = $data['longitudes'];
        $date = $data['date'];


        // echo "z,jkhbvfkhvdzjsljhvfjs";

        // Construct the data array for insertion
        $insert_data = array(
            'name' => $name,
            'latitudes' => '{' . implode(',', $latitudes) . '}',
            'longitudes' => '{' . implode(',', $longitudes) . '}',
            'date' => $date
        );
        //  var_dump($insert_data);

        // table query 
        // CREATE TABLE weather_inference_drawings (
        //     id SERIAL PRIMARY KEY,
        //     name VARCHAR(100),
        //     date DATE,
        //     latitudes DOUBLE PRECISION[],
        //     longitudes DOUBLE PRECISION[]

        // );

        // Assuming $this->db->insert() is the method to insert data into the database
        $query_result = $this->db->insert('weather_inference_drawings', $insert_data);

        // Check if the query was successful
        if ($query_result) {
            echo "Data successfully inserted into the 'weather_inference_drawings' table.";
            return true;
        } else {
            echo "Failed to insert data into the 'weather_inference_drawings' table.";
            return false;
        }
    }

    public function get_names($date) {
        // Log the received date parameter
        log_message('info', 'Received date parameter in model: ' . $date);

        // Query the database to get names for the selected date
        $query = $this->db->select('name')
                          ->from('weather_inference_drawings')
                          ->where('date', $date)
                          ->get();

        // Log the generated query
        log_message('info', 'Generated query: ' . $this->db->last_query());

        // Check if query was successful
        if ($query->num_rows() > 0) {
            // Return names as an array
            return $query->result_array();
        } else {
            // Return an empty array if no names found
            return array();
        }
    }

    public function get_lat_long_from_database($date, $name) {
        // Perform database query to fetch latitude and longitude based on date and name
        $this->db->select('latitudes, longitudes');
        $this->db->where('date', $date);
        $this->db->where('name', $name); // Corrected column name
        $query = $this->db->get('weather_inference_drawings');

        // Check if query was successful
        if ($query->num_rows() > 0) {
            // Return latitude and longitude as an associative array
            return $query->row_array();
        } else {
            // If no data found, return empty array
            return array();
        }
    }

    public function deleterow($date, $name) {
        // Example SQL query to delete row
        $this->db->where('date', $date);
        $this->db->where('name', $name);
        $this->db->delete('weather_inference_drawings');

        // Check if any row was affected
        if ($this->db->affected_rows() > 0) {
            return true; // Row deleted successfully
        } else {
            return false; // No matching row found
        }
    }
}    

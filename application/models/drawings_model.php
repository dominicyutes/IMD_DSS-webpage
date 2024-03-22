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
            echo "Data successfully inserted into the 'drawings' table.";
            return true;
        } else {
            echo "Failed to insert data into the 'drawings' table.";
            return false;
        }
    }
}

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

        if ($query_result) {
            echo "Data successfully inserted into the 'weather_inference_drawings' table.";
            return true;
        } else {
            echo "Failed to insert data into the 'weather_inference_drawings' table.";
            return false;
        }
    }

    public function get_names($date) {
        log_message('info', 'Received date parameter in model: ' . $date);

        $query = $this->db->select('name')
                          ->from('weather_inference_drawings')
                          ->where('date', $date)
                          ->get();

        log_message('info', 'Generated query: ' . $this->db->last_query());

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function get_lat_long_from_database($date, $name) {
        $this->db->select('latitudes, longitudes');
        $this->db->where('date', $date);
        $this->db->where('name', $name); 
        $query = $this->db->get('weather_inference_drawings');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return array();
        }
    }

    public function deleterow($date, $name) {
        $this->db->where('date', $date);
        $this->db->where('name', $name);
        $this->db->delete('weather_inference_drawings');

        if ($this->db->affected_rows() > 0) {
            return true; 
        } else {
            return false; 
        }
    }
}    

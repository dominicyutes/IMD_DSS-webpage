<?php
class drawings_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function insert_coordinates($data) {
        // Log received data
        echo "<pre>";
        echo "Data received in model:\n";
        var_dump($data);
        echo "</pre>";
    
        // Construct the SQL INSERT statement
        $sql = "INSERT INTO drawings (name, coordinates, date) VALUES (?, ?, ?)";
    
        // Extract data from $data array
        $name = $data['name'];
        $coordinates = json_encode($data['coordinates']); // Convert coordinates to JSON string
        $date = $data['date'];

        // var_dump($coordinates);
        // echo "dfvsfgsdaghfhnadghdgth";
    
        // Execute the query with data bindings to prevent SQL injection
        $query_result = $this->db->query($sql, array($name, $coordinates, $date));
    
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

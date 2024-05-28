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
        $markers = $data['markers'];

        $markersJson = json_encode($markers);
        $insert_data = array(
            'name' => $name,
            'latitudes' => '{' . implode(',', $latitudes) . '}',
            'longitudes' => '{' . implode(',', $longitudes) . '}',
            'date' => $date,
            'markers' => $markersJson
        );
        //  var_dump($insert_data);


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



    public function insert_coordinates_odisha($data)
    {


        $name = $data['name'];
        $latitudes = $data['latitudes'];
        $longitudes = $data['longitudes'];
        $date = $data['date'];
        $markers = $data['markers'];

        $markersJson = json_encode($markers);
        $insert_data = array(
            'name' => $name,
            'latitudes' => '{' . implode(',', $latitudes) . '}',
            'longitudes' => '{' . implode(',', $longitudes) . '}',
            'date' => $date,
            'markers' => $markersJson
        );

        $query_result = $this->db->insert('weather_inference_drawings_mc_odisha', $insert_data);

        if ($query_result) {
            echo "Data successfully inserted into the 'weather_inference_drawings_mc_odisha' table.";
            return true;
        } else {
            echo "Failed to insert data into the 'weather_inference_drawings_mc_odisha' table.";
            return false;
        }
    }

    public function insert_coordinates_delhi($data)
    {


        $name = $data['name'];
        $latitudes = $data['latitudes'];
        $longitudes = $data['longitudes'];
        $date = $data['date'];
        $markers = $data['markers'];

        $markersJson = json_encode($markers);
        $insert_data = array(
            'name' => $name,
            'latitudes' => '{' . implode(',', $latitudes) . '}',
            'longitudes' => '{' . implode(',', $longitudes) . '}',
            'date' => $date,
            'markers' => $markersJson
        );

        $query_result = $this->db->insert('weather_inference_drawings_mc_delhi', $insert_data);

        if ($query_result) {
            echo "Data successfully inserted into the 'weather_inference_drawings_mc_delhi' table.";
            return true;
        } else {
            echo "Failed to insert data into the 'weather_inference_drawings_mc_delhi' table.";
            return false;
        }
    }


    public function insert_coordinates_to_hq_odisha($data)
    {
        if (empty($data)) {
            echo "No data received";
            return false;
        }

        foreach ($data as $item) {
            if (isset($item['name'], $item['latitudes'], $item['longitudes'], $item['date'], $item['markers'])) {
                $name = $item['name'];
                $latitudesStr = $item['latitudes'];
                $longitudesStr = $item['longitudes'];
                $date = $item['date'];
                $markers = $item['markers'];

                if (!empty($latitudesStr) && !empty($longitudesStr)) {
                    $insert_data = [
                        'name' => $name,
                        'latitudes' => $latitudesStr,
                        'longitudes' => $longitudesStr,
                        'date' => $date,
                        'markers' => $markers
                    ];

                    $query_result = $this->db->insert('weather_inference_drawings_odisha_hq', $insert_data);

                    if (!$query_result) {
                        echo "Failed to insert data for item:\n";
                        var_dump($item);
                        return false;
                    }
                } else {
                    echo "Empty latitudes or longitudes string for item:\n";
                    var_dump($item);
                    return false;
                }
            } else {
                echo "Missing or invalid data for item:\n";
                var_dump($item);
                return false;
            }
        }

        return true;
    }

    public function insert_coordinates_to_hq_delhi($data)
    {
        if (empty($data)) {
            echo "No data received";
            return false;
        }

        foreach ($data as $item) {
            if (isset($item['name'], $item['latitudes'], $item['longitudes'], $item['date'], $item['markers'])) {
                $name = $item['name'];
                $latitudesStr = $item['latitudes'];
                $longitudesStr = $item['longitudes'];
                $date = $item['date'];
                $markers = $item['markers'];

                if (!empty($latitudesStr) && !empty($longitudesStr)) {
                    $insert_data = [
                        'name' => $name,
                        'latitudes' => $latitudesStr,
                        'longitudes' => $longitudesStr,
                        'date' => $date,
                        'markers' => $markers
                    ];

                    $query_result = $this->db->insert('weather_inference_drawings_delhi_hq', $insert_data);

                    if (!$query_result) {
                        echo "Failed to insert data for item:\n";
                        var_dump($item);
                        return false;
                    }
                } else {
                    echo "Empty latitudes or longitudes string for item:\n";
                    var_dump($item);
                    return false;
                }
            } else {
                echo "Missing or invalid data for item:\n";
                var_dump($item);
                return false;
            }
        }

        return true;
    }



    public function get_names($date)
    {
        log_message('info', 'Received date parameter in model: ' . $date);

        $query = $this->db->select('name')
            ->from('weather_inference_drawings')
            ->where('date', $date)
            ->get();

        log_message('info', 'Generated query: ' . $this->db->last_query());

        if ($query->num_rows() > 0) {
            // Return names as an array
            return $query->result_array();
        } else {
            return array();
        }
    }
    public function get_names_odisha_mc($date)
    {
        log_message('info', 'Received date parameter in model: ' . $date);

        $query = $this->db->select('name')
            ->from('weather_inference_drawings_mc_odisha')
            ->where('date', $date)
            ->get();

        log_message('info', 'Generated query: ' . $this->db->last_query());

        if ($query->num_rows() > 0) {
            // Return names as an array
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function get_lat_long_from_database($date, $name)
    {
        $this->db->select('latitudes, longitudes, markers');
        $this->db->where('date', $date);
        $this->db->where('name', $name);
        $query = $this->db->get('weather_inference_drawings');
        // var_dump($query->result_array());
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return array();
        }
    }

    public function get_lat_long_from_database_odisha($date, $name)
    {
        $this->db->select('latitudes, longitudes, markers');
        $this->db->where('date', $date);
        $this->db->where('name', $name);
        $query = $this->db->get('weather_inference_drawings_mc_odisha');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return array();
        }
    }

    public function get_lat_long_from_database_delhi($date, $name)
    {
        $this->db->select('latitudes, longitudes, markers');
        $this->db->where('date', $date);
        $this->db->where('name', $name);
        $query = $this->db->get('weather_inference_drawings_mc_delhi');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return array();
        }
    }

    public function deleterow($date, $name)
    {
        $this->db->where('date', $date);
        $this->db->where('name', $name);
        $this->db->delete('weather_inference_drawings');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_names_odisha($date)
    {
        $query = $this->db->select('name, latitudes, longitudes, date, markers')
            ->from('weather_inference_drawings_mc_odisha')
            ->where('date', $date)
            ->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function get_names_delhi($date)
    {
        $query = $this->db->select('name, latitudes, longitudes, date, markers')
            ->from('weather_inference_drawings_mc_delhi')
            ->where('date', $date)
            ->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function get_names_odisha_hq($date)
    {
        $query = $this->db->select('name, latitudes, longitudes, date, markers')
            ->from('weather_inference_drawings_odisha_hq')
            ->where('date', $date)
            ->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function get_names_delhi_hq($date)
    {
        $query = $this->db->select('name, latitudes, longitudes, date, markers')
            ->from('weather_inference_drawings_delhi_hq')
            ->where('date', $date)
            ->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

}
// table query 
// CREATE TABLE weather_inference_drawings (
//     id SERIAL PRIMARY KEY,
//     name VARCHAR(100),
//     date DATE,
//     latitudes DOUBLE PRECISION[],
//     longitudes DOUBLE PRECISION[]

// );

<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rainfall_Validation_INDIA_Model extends CI_Model
{

    function __construct()
    {

    }

  
//  function get_stations()
//     {
//         $this->db->select('S.id AS StationID,S.name AS StationName,S.lat,S.lng,S.district_id,S.block_id,D.district_name,B.blk_name');
//         $this->db->from('obs_stations AS S');
//         $this->db->join('districts_s AS D', 'D.id=S.district_id');
//         $this->db->join('block_s AS B', 'B.id=S.block_id');
//         $res = $this->db->get();
//             $result = $res->result();

//         // var_dump($result);
//         // die();

//         return $res->result();

//     }
    // public function get_stations()
    // {
    //     $this->db->select('lat, lng');
    //     $this->db->from('obs_stations');
    //     $res = $this->db->get();
    //     $result = $res->result();
    // // var_dump($result);
    // //     die();

    //     return $result;
    // }


    public function get_stations()
    {
        $this->db->select('latitude, longitude');
        $this->db->from('obs_stations_india');
        $res = $this->db->get();
        $result = $res->result();
    // var_dump($result);
    //     die();

        return $result;
    }
    
    public function get_unique_region_names() {
        $query = $this->db->select("region_name")
                          ->distinct()
                          ->order_by("region_name", "ASC")
                          ->get('normal_district_details');
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array(); 
        }
    }

    public function get_unique_subdivision_names($region_name) {
        $this->db->distinct();
        $this->db->select('subdiv_name');
        $this->db->from('public.normal_district_details');
        $this->db->where('region_name', $region_name);
        $this->db->order_by('subdiv_name', 'ASC');
        $query = $this->db->get();
    
        return $query->result_array(); // Return result as array
    }
    
    public function get_unique_state_names($subdiv_name) {
        $this->db->distinct();
        $this->db->select('state_name');
        $this->db->from('public.normal_district_details');
        $this->db->where('subdiv_name', $subdiv_name);
        $this->db->order_by('state_name', 'ASC');
        $query = $this->db->get();
    
        return $query->result_array(); // Return result as array
    }
    
    
}
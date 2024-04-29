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
    
    
    
}
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rainfall_Validation_Model extends CI_Model
{

    function __construct()
    {

    }

    function get_stations()
    {
        $this->db->select('S.id AS StationID,S.name AS StationName,S.lat,S.lng,S.district_id,S.block_id,D.district_name,B.blk_name');
        $this->db->from('obs_stations AS S');
        $this->db->join('districts_s AS D', 'D.id=S.district_id');
        $this->db->join('block_s AS B', 'B.id=S.block_id');
        $res = $this->db->get();
        //     $result = $res->result();

        // var_dump($result);
        // die();

        return $res->result();

    }

    function get_station_data($id)
    {
        $this->db->select('DATE_FORMAT(date,"%d-%b") as date,max_temp')
            ->where('stn_id', $id);
        $res = $this->db->get('temp_stn_normals');
        $result = $res->result();

        // var_dump($result);
        // die();
        return $res->result();
    }

    function get_station_comp_data($StationID, $start_date, $end_date)
    {
        $final_res = array();
        $this->db->select('daily_obs_temp.date,stn_id,obs_stations.name, daily_obs_temp.rainfall,obs_stations.block_id,
        block_ecmwf_forecast.rainfall as ecmwf_rainfall,
        block_wrf_forecast.rainfall as wrf_rainfall,
        block_imd_gfs_forecast.rainfall as imd_gfs_rainfall');
        //value_added_forecast_updated.rainfall_fcst as value_added_rainfall');
        $this->db->from('daily_obs_temp');
        $this->db->join('obs_stations', 'obs_stations.id=stn_id');
        $this->db->join("block_ecmwf_forecast", 'block_ecmwf_forecast.block_id=obs_stations.block_id and block_ecmwf_forecast.fcst_date=daily_obs_temp.date');
        $this->db->join('block_imd_gfs_forecast', 'block_imd_gfs_forecast.block_id=obs_stations.block_id and block_imd_gfs_forecast.fcst_date=daily_obs_temp.date');
        $this->db->join('block_wrf_forecast', 'block_wrf_forecast.block_id=obs_stations.block_id and block_wrf_forecast.fcst_date=daily_obs_temp.date');
        //$this->db->join("value_added_forecast_updated",'value_added_forecast_updated.block_id=obs_stations.block_id and value_added_forecast_updated.updated_at=daily_obs_temp.date');
        // $this->db->where('daily_obs_temp.date BETWEEN "' . $start_date . '" and "' . $end_date . '" and (daily_obs_temp.temp_max>0 or daily_obs_temp.temp_min>0) and stn_id=' . $StationID);
        $this->db->where("daily_obs_temp.date BETWEEN DATE('$start_date') AND DATE('$end_date') and (daily_obs_temp.temp_max>0 or daily_obs_temp.temp_min>0) and stn_id=' . $StationID");

        
        $ret_ = $this->db->get()->result();
        return $ret_;
    }


    function get_forecast_data($stn_id, $start_date, $end_date)
    {
        $this->db->select('block_id');
        $this->db->from('obs_stations');
        $this->db->where('id', $stn_id);
        $res = $this->db->get()->row_array();
        //pr($res);
        $block_id = $res['block_id'];
        $ob_data = $this->get_daily_observation_data_($block_id, $start_date, $end_date, $stn_id);
        $va_data = $this->get_value_addition_data_($block_id, $start_date, $end_date, $stn_id);
        $ecm_data = $this->get_ecmwf_data_($block_id, $start_date, $end_date, $stn_id);
        $imd_data = $this->get_imd_gfs_data_($block_id, $start_date, $end_date, $stn_id);
        $wrf_data = $this->get_wrf_data_($block_id, $start_date, $end_date, $stn_id);
        $en_data = $this->get_ensemble_data_($block_id, $start_date, $end_date, $stn_id);
        return array('ob_data' => $ob_data, 'va_data' => $va_data, 'ecm_data' => $ecm_data, 'imd_data' => $imd_data, 'wrf_data' => $wrf_data, 'en_data' => $en_data);
  
    }
    public function date_loop($start, $end)
    {
        $start = strtotime($start);
        $end = strtotime($end);
        $currentdate = $start;
        $res = array();
        while ($currentdate <= $end) {
            $cur_date = date('Y-m-d', $currentdate);
            array_push($res, $cur_date);
            $currentdate = strtotime('+1 days', $currentdate);
            //do what you want here                       
        }
        // var_dump($res);
        // die();
        return $res;
    }
    function get_daily_observation_data_($block_id, $start_date, $end_date, $stn_id)
    {
         // echo('<script>alert(kbdsfiuhb");</script>');
        
        // die();
        $ret_ = array();
        $this->db->select('OB.id as stn_id,DO.date, OB.name, DO.rainfall');
       
        $this->db->from('obs_stations as OB');
        $this->db->join('daily_obs_temp as DO', 'DO.stn_id = OB.id');
        $this->db->where("DO.date BETWEEN DATE('$start_date') AND DATE('$end_date') AND DO.stn_id = '$stn_id'");
       
        $res = $this->db->get()->result_array();
        
        // Output the generated SQL query for debugging
        // var_dump($res);
        // die();
        $ret_ = $this->parse_date_wise($res, $start_date, $end_date);
        
        return $ret_;
    }
    public function get_daily_observation_data() {
        // Query to select all data from the daily_obs_temp table
        $query = $this->db->get("daily_obs_temp");

        // Check if the query executed successfully
        if ($query) {
            // Fetch the result as an array of objects
            $data = $query->result();

            // Output the data
            var_dump($data);
            die();
        } else {
            // If there's an error, handle it accordingly
            echo "Error fetching data from the database";
            die();
        }
    }
    
    function parse_date_wise($res, $start_date, $end_date)
    {
        $ret_ = $te = array();
        $date_loop = $this->date_loop($start_date, $end_date);
        if (!empty($res)) {
            foreach ($date_loop as $key => $val) {
                if (!array_key_exists($val, $te)) {
                    foreach ($res as $d) {
                        if (strtotime($val) == strtotime($d['date'])) {
                            $te[$val] = $d['rainfall'];
                        }
                    }
                }
            }
        }
        foreach ($date_loop as $k => $v) {
            if (array_key_exists($v, $te)) {
                array_push($ret_, $te[$v]);
            } else {
                array_push($ret_, null);
            }
        }
        // var_dump($ret_);
        // die();
        return $ret_;
    }
    function get_value_addition_data_($block_id, $start_date, $end_date, $stn_id)
    {
        $ret_ = $te = array();
        $this->db->select('OB.id as stn_id,VA.date, OB.name, VA.rainfall_fcst as rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('value_added_forecast_updated as VA', 'VA.block_id = OB.block_id');
        $this->db->where("VA.date BETWEEN DATE('$start_date') AND DATE('$end_date') AND OB.id = '$stn_id'");
        $res = $this->db->get()->result_array();
        // var_dump($res);
        // die();
        $ret_ = $this->parse_date_wise($res, $start_date, $end_date);
       
        return $ret_;
        //pr($res);

    }

    function get_imd_gfs_data_($block_id, $start_date, $end_date, $stn_id)
    {
        $ret_ = array();
        $this->db->select('OB.id as stn_id,IMD.fcst_date as date, OB.name, IMD.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('block_imd_gfs_forecast as IMD', 'IMD.block_id = OB.block_id');
        $this->db->where("IMD.fcst_date BETWEEN DATE('$start_date') AND DATE('$end_date') AND OB.id = '$stn_id'");

        $res = $this->db->get()->result_array();
        // var_dump($res);
        // die();
        $ret_ = $this->parse_date_wise($res, $start_date, $end_date);
        // var_dump($ret_);
        // die();
        return $ret_;
    }

    function get_wrf_data_($block_id, $start_date, $end_date, $stn_id)
    {
        $ret_ = array();
        $this->db->select('OB.id as stn_id,WRF.fcst_date as date, OB.name, WRF.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('block_wrf_forecast as WRF', 'WRF.block_id = OB.block_id');
        $this->db->where("WRF.fcst_date BETWEEN DATE('$start_date') AND DATE('$end_date') AND OB.id = '$stn_id'");

        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res, $start_date, $end_date);
        // var_dump($ret_);
        // die();
        return $ret_;
    }

    function get_ensemble_data_($block_id, $start_date, $end_date, $stn_id)
    {
        $ret_ = array();
        $this->db->select('OB.id as stn_id, EN.fcst_date as date, OB.name, EN.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('block_ensemble_forecast as EN', 'EN.block_id = OB.block_id');
        $this->db->where("EN.fcst_date BETWEEN DATE('$start_date') AND DATE('$end_date') AND OB.id = '$stn_id'");

        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res, $start_date, $end_date);
        // var_dump($ret_);
        // die();

        return $ret_;
    }

    function get_ecmwf_data_($block_id, $start_date, $end_date, $stn_id)
    {
        $ret_ = array();
        $this->db->select('OB.id as stn_id, ECMWF.fcst_date as date, OB.name, ECMWF.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('block_ecmwf_forecast as ECMWF', 'ECMWF.block_id = OB.block_id');
        $this->db->where("ECMWF.fcst_date BETWEEN DATE('$start_date') AND DATE('$end_date') AND OB.id = '$stn_id'");

        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res, $start_date, $end_date);
        // Output result to console and halt script execution
        // var_dump($ret_);
        // die();

        return $ret_;
    }

    public function get_station_ids() {
        $query = $this->db->select('id')->get('obs_stations');
        return $query->result_array();
    }
}
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rainfall_Validation_Model extends CI_Model{
    
    function __construct() {
        
    }
    
    function get_stations(){
        $this->db->select('S.id AS StationID,S.name AS StationName,S.lat,S.lng,S.district_id,S.block_id,D.district_name,B.blk_name');
        $this->db->from('obs_stations AS S');
        $this->db->join('districts_s AS D','D.id=S.district_id');
        $this->db->join('block_s AS B','B.id=S.block_id');
        $res= $this->db->get();
        return $res->result();
        
    }
    
   function get_station_data($id){
        $this->db->select('DATE_FORMAT(date,"%d-%b") as date,max_temp')
                 ->where('stn_id',$id);
        $res= $this->db->get('temp_stn_normals');
        return $res->result();
    }

    function get_station_comp_data($StationID,$start_date,$end_date){
        $final_res = array();
        $this->db->select('daily_obs_temp.date,stn_id,obs_stations.name, daily_obs_temp.rainfall,obs_stations.block_id,
        block_ecmwf_forecast.rainfall as ecmwf_rainfall,
        block_wrf_forecast.rainfall as wrf_rainfall,
        block_imd_gfs_forecast.rainfall as imd_gfs_rainfall');
        //value_added_forecast_updated.rainfall_fcst as value_added_rainfall');
        $this->db->from('daily_obs_temp');
        $this->db->join('obs_stations','obs_stations.id=stn_id');
        $this->db->join("block_ecmwf_forecast",'block_ecmwf_forecast.block_id=obs_stations.block_id and block_ecmwf_forecast.fcst_date=daily_obs_temp.date');
        $this->db->join('block_imd_gfs_forecast','block_imd_gfs_forecast.block_id=obs_stations.block_id and block_imd_gfs_forecast.fcst_date=daily_obs_temp.date');
        $this->db->join('block_wrf_forecast','block_wrf_forecast.block_id=obs_stations.block_id and block_wrf_forecast.fcst_date=daily_obs_temp.date');
        //$this->db->join("value_added_forecast_updated",'value_added_forecast_updated.block_id=obs_stations.block_id and value_added_forecast_updated.updated_at=daily_obs_temp.date');
        $this->db->where('daily_obs_temp.date BETWEEN "'.$start_date.'" and "'.$end_date.'" and (daily_obs_temp.temp_max>0 or daily_obs_temp.temp_min>0) and stn_id='.$StationID);
        $ret_ =  $this->db->get()->result();
        //echo $this->db->last_query();

        /*$this->db->select('OB.block_id,OB.name,EN.rainfall as ensemble_rainfall,EC.rainfall as ecmwf_rainfall,WRF.rainfall as wrf_rainfall,IMD.rainfall as imdd_gfs_rainfall,VA.rainfall_fcst as value_added_rainfall');
        $this->db->from('obs_stations AS OB');
        $this->db->join('block_ecmwf_forecast as EC', 'EC.block_id = O.block_id');
        $this->db->join('block_ensemble_forecast as EN', 'EN.block_id = O.block_id');
        $this->db->join('block_wrf_forecast as WRF', 'WRF.block_id = O.block_id');
        $this->db->join('block_imd_gfs_forecast as IMD', 'IMD.block_id = O.block_id');
        $this->db->join('value_added_forecast_updated as VA', 'VA.block_id = O.block_id');
        $this->db->where('daily_obs_temp.date BETWEEN "'.$start_date.'" and "'.$end_date.'" and (daily_obs_temp.temp_max>0 or daily_obs_temp.temp_min>0) and stn_id='.$StationID);*/
        return $ret_;
    }   


    function get_forecast_data($stn_id,$start_date,$end_date){
        $this->db->select('block_id');
        $this->db->from('obs_stations');
        $this->db->where('id',$stn_id);
        $res = $this->db->get()->row_array();
        //pr($res);
        $block_id = $res['block_id'];
        $ob_data = $this->get_daily_observation_data_($block_id,$start_date,$end_date,$stn_id);
        $va_data = $this->get_value_addition_data_($block_id,$start_date,$end_date,$stn_id);
        $ecm_data = $this->get_ecmwf_data_($block_id,$start_date,$end_date,$stn_id);
        $imd_data = $this->get_imd_gfs_data_($block_id,$start_date,$end_date,$stn_id);
        $wrf_data = $this->get_wrf_data_($block_id,$start_date,$end_date,$stn_id);
        $en_data = $this->get_ensemble_data_($block_id,$start_date,$end_date,$stn_id);
        return array('ob_data'=>$ob_data,'va_data'=>$va_data,'ecm_data'=>$ecm_data,'imd_data'=>$imd_data,'wrf_data'=>$wrf_data,'en_data'=>$en_data);
        // pr($ob_data);
        // pr($va_data);
        //pr($ecm_data);
        // pr($imd_data);
        // pr($wrf_data);
        // pr($en_data);
    }
    public function date_loop($start,$end){
        $start = strtotime($start);
        $end = strtotime($end);        
        $currentdate = $start;
        $res = array();
        while($currentdate <= $end)
        {
            $cur_date = date('Y-m-d', $currentdate);
            array_push($res,$cur_date);
            $currentdate = strtotime('+1 days', $currentdate);
            //do what you want here                       
        }
        return $res;
    }
    function get_daily_observation_data_($block_id,$start_date,$end_date,$stn_id){
        $ret_ = array();
        $this->db->select('OB.id as stn_id,DO.date, OB.name, DO.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('daily_obs_temp as DO','DO.stn_id = OB.id');
        $this->db->where('DO.date BETWEEN "'.$start_date.'" and "'.$end_date.'" AND  DO.stn_id = "'.$stn_id.'"' );
        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res,$start_date,$end_date);
        //pr($ret_);
        return $ret_;
    }
    function parse_date_wise($res,$start_date,$end_date){
        $ret_ = $te = array();
        $date_loop = $this->date_loop($start_date,$end_date);
        if(!empty($res)){
            foreach($date_loop as $key => $val){
                if(!array_key_exists($val,$te)){
                    foreach($res as $d){ 
                        if(strtotime($val) == strtotime($d['date'])){
                            $te[$val] = $d['rainfall'];
                        } 
                    }
                } 
            }
        }
        foreach($date_loop as $k => $v){
            if(array_key_exists($v,$te)){
                array_push($ret_,$te[$v]);
            } else {
                array_push($ret_,null);
            }
        }
        return $ret_;
    }
    function get_value_addition_data_($block_id,$start_date,$end_date,$stn_id){
        $ret_ = $te = array();
        $this->db->select('OB.id as stn_id,VA.date, OB.name, VA.rainfall_fcst as rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('value_added_forecast_updated as VA','VA.block_id = OB.block_id');
        $this->db->where('VA.date BETWEEN "'.$start_date.'" and "'.$end_date.'" AND  OB.id = "'.$stn_id.'"' );
        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res,$start_date,$end_date);
        return $ret_;
        //pr($res);
        // if(!empty($res)){
        //     foreach($date_loop as $key => $val){
        //         if(!array_key_exists($val,$te)){
        //             foreach($res as $d){ 
        //                 if($val == $d['date']){
        //                     $te[$val] = $d['rainfall'];
        //                 }
        //             }
        //         } 
        //     }
        // }
        // //pr($te);
        // foreach($date_loop as $k => $v){
        //     if(array_key_exists($v,$te)){
        //         array_push($ret_,$te[$v]);
        //     } else {
        //         array_push($ret_,'-9.999');
        //     }
        // }
        
    }

    function get_imd_gfs_data_($block_id,$start_date,$end_date,$stn_id){
        $ret_ = array();
        $this->db->select('OB.id as stn_id,IMD.fcst_date as date, OB.name, IMD.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('block_imd_gfs_forecast as IMD','IMD.block_id = OB.block_id');
        $this->db->where('IMD.fcst_date BETWEEN "'.$start_date.'" and "'.$end_date.'" AND  OB.id = "'.$stn_id.'"' );
        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res,$start_date,$end_date);
        return $ret_;
    }

    function get_wrf_data_($block_id,$start_date,$end_date,$stn_id){
        $ret_ = array();
        $this->db->select('OB.id as stn_id,WRF.fcst_date as date, OB.name, WRF.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('block_wrf_forecast as WRF','WRF.block_id = OB.block_id');
        $this->db->where('WRF.fcst_date BETWEEN "'.$start_date.'" and "'.$end_date.'" AND  OB.id = "'.$stn_id.'"' );
        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res,$start_date,$end_date);
        return $ret_;
    }

    function get_ensemble_data_($block_id,$start_date,$end_date,$stn_id){
        $ret_ = array();
        $this->db->select('OB.id as stn_id, EN.fcst_date as date, OB.name, EN.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('block_ensemble_forecast as EN','EN.block_id = OB.block_id');
        $this->db->where('EN.fcst_date BETWEEN "'.$start_date.'" and "'.$end_date.'" AND  OB.id = "'.$stn_id.'"' );
        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res,$start_date,$end_date);
        return $ret_;
    }

    function get_ecmwf_data_($block_id,$start_date,$end_date,$stn_id){
        $ret_ = array();
        $this->db->select('OB.id as stn_id, ECMWF.fcst_date as date, OB.name, ECMWF.rainfall');
        $this->db->from('obs_stations as OB');
        $this->db->join('block_ecmwf_forecast as ECMWF','ECMWF.block_id = OB.block_id');
        $this->db->where('ECMWF.fcst_date BETWEEN "'.$start_date.'" and "'.$end_date.'" AND  OB.id = "'.$stn_id.'"' );
        $res = $this->db->get()->result_array();
        $ret_ = $this->parse_date_wise($res,$start_date,$end_date);
        return $ret_;
    }
}
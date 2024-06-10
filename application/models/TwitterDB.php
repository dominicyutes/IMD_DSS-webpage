<?php

class TwitterDB extends CI_Model {
    
    public function fetch_nowcast_district_wise($todays_date){
        $ret_1 = array();
        //$latest = $this->latest_record_of_district();
        $this->db->select('*');
        $this->db->where('date',$todays_date);
        //$this->db->where('update_count',$latest);
        $this->db->where('update_count is NOT NULL', NULL, FALSE);
        $this->db->order_by('update_count', 'DESC');
        $res = $this->db->get('imd_nowcast_district');

        if (!$res) {
            echo $this->db->error(); 
        }
    
        $ret_ = $res->result_array();
        $info = $this->filter_n_get_latest_info($ret_);
        //pr($info);
        //return $info;
        if(!empty($info)){
            foreach($info as $key => $val){
                $ret_1[$val['dist_id']] = $val;
            }
        }
        return $ret_1;
    }

    public function fetch_nowcast_district_($todays_date){
        $ret_ = array();
        $this->db->select('*');
        $this->db->where('date',$todays_date);
        $this->db->where('update_count is NOT NULL', NULL, FALSE);
        $this->db->order_by('update_count', 'DESC');
        $res = $this->db->get('imd_nowcast_district');

        if (!$res) {
            echo $this->db->error(); // Display the database error
        }

        $ret = $res->result_array();
        //echo $this->db->last_query();
        $info = $this->filter_n_get_latest_info($ret);
        if(!empty($info)){
            foreach($info as $key => $val){
                $ret_[$val['dist_id']] = $val['color'];
            }
        }
        return $ret_;
    }

    public function filter_n_get_latest_info($info){
        //pr($info);
        $ret = array();
        if(!empty($info)){
            $latest_count = $info[0]['update_count'];
            foreach($info as $key => $val){
                if($val['update_count'] == $latest_count){
                    array_push($ret,$val);
                }
            }
            return $ret;
        } else {
            return $info;
        }
        
    }
    
}
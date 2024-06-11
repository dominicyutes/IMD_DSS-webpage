<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Heatwave_graphical_model
 * @author Keerati
 */
class Heatwave_graphical_model extends CI_Model{
    function getPropDistrict($d_id){
        $this->db->select('*');
        $this->db->where('id', $d_id);
        $res = $this->db->get('districts');
        return $res->row();
    }
    
    function getBlockName(){
        $this->db->select('id, block_name');
        $res = $this->db->get('blocks');
        $block_name = $res->result();
        
        $block_name_array = array();
        foreach ($block_name as $block) {
            $block_id = $block->id;
            $block_name = $block->block_name;
            
            $block_name_array[$block_id] = $block_name;
        }
        return $block_name_array;
    }

    function getBlockDetails(){
        $this->db->select('id, block_name');
        $res = $this->db->get('blocks');
        $blocks = $res->result_array();
        return $blocks;
    }
    
    function getPropLocation($bl_id){
        $this->db->select('*');
        $this->db->from('blocks');
        $this->db->join('districts', 'blocks.district_id = districts.id');
        $this->db->where('blocks.id', $bl_id);
        $res = $this->db->get();
        return $res->row();
    }
    
    function getBlockformDistrict($d_id){
        $this->db->select('*');
        $this->db->where('district_id', $d_id);
        $res = $this->db->get('blocks');
        return $res->result();
    }
    
    function getTxHistoryData($data_type, $date, $timestamp){
        $where_datetime = "date = '".$date."'";
        $this->db->select('*,round(tx_fcst) as tx_fcst,round(tx_dynamic) as tx_dynamic');
        if($data_type != "weight"){
            $this->db->from('heatwave_alert_dissemination_'.$data_type);
        } else {
            $this->db->from('weighted_matrix_max_temp');
        }
        $this->db->where($where_datetime);
        $res = $this->db->get();
        return $res->result();
    }
    
    function getUpdatedBlocks($data_type,$date){
        $updated_ids = array();
        $where_date = "date = '".$date."'";
        $this->db->select('block_id');
        if($data_type != "weight"){
            $this->db->from('heatwave_alert_dissemination_'.$data_type);
        } else {
            $this->db->from('weighted_matrix_max_temp');
        }
        $this->db->where($where_date);
        $this->db->where('updated_at is NOT NULL', NULL, FALSE);
        $res = $this->db->get();
        $ret_ = $res->result_array();
        //echo $this->db->last_query();
        if(!empty($ret_)){
            foreach ($ret_ as $key => $value) {
                array_push($updated_ids,$value['block_id']);
            }
        }
        return $updated_ids;
    }
    function getTxHistoryAdvisoryData($data_type, $date, $filter_type, $filter_details){
        $where_filter = $this->getWhereFilter($data_type, $date, $filter_type, $filter_details);

        $where_datetime = "date = '".$date."'";
        $this->db->select('heatwave_alert_dissemination_'.$data_type.'.*, blocks.block_name as block_name, districts.id as district_id, districts.district_name as district_name ');
        $this->db->from('heatwave_alert_dissemination_'.$data_type);
        $this->db->join('blocks', 'heatwave_alert_dissemination_'.$data_type.'.block_id = blocks.id');
        $this->db->join('districts', 'blocks.district_id = districts.id');
        $this->db->where($where_datetime.$where_filter);
        $this->db->order_by('district_id, block_id');
        $res = $this->db->get();
        return $res->result();
    }
        
    function getWhereFilter($data_type, $date, $filter_type, $filter_details){
        $where_filter = '';
        if( $filter_type == 'chkedited' ){
            $where_filter = " AND tx_fcst != tx_dynamic";
        }
        else if( $filter_type == 'chklatest' ){
            $max_datetime = $this->getMaxDatetime($data_type, $date);
            $where_filter = " AND timestamp = '".$max_datetime."' " ;
        }
        else if( $filter_type == 'chklocation' ){
            $filter_details = explode("_", $filter_details);
            if(!empty($filter_details[0])){
                $di_id = $filter_details[0];
                $bl_id = $filter_details[1];
                if( $di_id == '0'){
                    $where_filter = "";
                }
                else if( $bl_id != '' && $bl_id != '0'){
                    $where_filter = " AND block_id = '".$bl_id."' " ;
                }
                else{
                    $where_filter = " AND district_id = '".$di_id."' " ;
                }
            }
        }
        else if( $filter_type == 'chkalert' ){
            $filter_details = explode("_", $filter_details);
            if(!empty($filter_details[0])){
                $where_filter = " AND (";
                for($i = 0; $i < count($filter_details); $i++ ){
                    $where_filter .= " warning_level_id = '".$filter_details[$i]."' ";
                    if($i < count($filter_details)-1 ){
                        $where_filter .= "  OR ";
                    }
                }
                $where_filter .= ")";    
            }
            
        }
        return $where_filter;
    }

    function getMaxDatetime($data_type, $date){
        $this->db->select('MAX(timestamp) as max_timestamp');
        $this->db->from('heatwave_alert_dissemination_'.$data_type);
        $this->db->where('date =', $date);
        $res = $this->db->get();
        return $res->row()->max_timestamp;
    }
    
    function getTxFcstData($data_type, $date){
        if( $data_type == 'imd'){
            $this->db->select('alert_tb.block_id,alert_tb.tx_dynamic,alert_tb.updated_at');
            $this->db->from('block_imd_gfs_forecast');
            $this->db->join('heatwave_alert_dissemination_'.$data_type.' as alert_tb','block_imd_gfs_forecast.fcst_date = alert_tb.date');
            $this->db->where('block_imd_gfs_forecast.fcst_date', $date);
        } else if( $data_type == 'ensemble'){
            $this->db->select('alert_tb.block_id,alert_tb.tx_dynamic,alert_tb.updated_at');
            $this->db->from('block_ensemble_forecast');
            $this->db->join('heatwave_alert_dissemination_'.$data_type.' as alert_tb','block_ensemble_forecast.fcst_date = alert_tb.date');
            $this->db->where('block_ensemble_forecast.fcst_date', $date);
        } else if( $data_type == 'ecmwf'){
            $this->db->select('alert_tb.block_id,alert_tb.tx_dynamic,alert_tb.updated_at');
            $this->db->from('block_ecmwf_forecast');
            $this->db->join('heatwave_alert_dissemination_'.$data_type.' as alert_tb','block_ecmwf_forecast.fcst_date = alert_tb.date');
            $this->db->where('block_ecmwf_forecast.fcst_date', $date);
        } else if( $data_type == 'wrf'){
            $this->db->select('alert_tb.block_id,alert_tb.tx_dynamic,alert_tb.updated_at');
            $this->db->from('block_wrf_forecast');
            $this->db->join('heatwave_alert_dissemination_'.$data_type.' as alert_tb','block_wrf_forecast.fcst_date = alert_tb.date');
            $this->db->where('block_wrf_forecast.fcst_date', $date);
        } else if( $data_type == 'weight'){
            $this->db->select('block_id,tx_dynamic,updated_at');
            $this->db->from('weighted_matrix_max_temp');
            $this->db->where('weighted_matrix_max_temp.date', $date);
            $this->db->where('weight_added_at IS NOT NULL', NULL, FALSE);
        } else {
            return NULL;
        }
        $res = $this->db->get();
        $tx_fcst_res = $res->result();
        
        $tx_fcst_array = array();
        foreach ($tx_fcst_res as $tx_fcst) {
            $block_id = $tx_fcst->block_id;
            $tx = $tx_fcst->tx_dynamic;
            
            $tx_fcst_array[$block_id] = round($tx);
        }
        return $tx_fcst_array;
    }
    
    function getTxNormalData($date){
        $date_explode = explode('-',$date);
        $month_day = $date_explode[1].$date_explode[2];
        $this->db->select('blk_id, max_temp');
        $this->db->from('temp_stn_normals');
        $this->db->join('temp_stn_block', 'temp_stn_normals.stn_id = temp_stn_block.stn_id');
        $this->db->where('DATE_FORMAT(`temp_stn_normals`.`date`, "%m%d") =', $month_day);
        $res = $this->db->get();
        //echo $this->db->last_query();
        $tx_normal_res = $res->result();
        $tx_normal_array = array();
        foreach ($tx_normal_res as $tx_normal) {
            $block_id = $tx_normal->blk_id;
            $tx = $tx_normal->max_temp;
            
            $tx_normal_array[$block_id] = $tx;
        }
        return $tx_normal_array;
    }
    
    function getAreaType(){
        $area_type_arr = array();
        $coastal_areas_list = array("WS2", "WS7", "WS9", "WS12", "WS14");
        $stn_id_res = $this->db->select('*')->get('temp_stn_block')->result();
        foreach ($stn_id_res as $stn_data) {
            $blk_id = $stn_data->blk_id;
            $stn_id = $stn_data->stn_id;
            if(in_array($stn_id, $coastal_areas_list)){
                $area_type_arr[$blk_id] = 1;
            }
            else{
                $area_type_arr[$blk_id] = 0;
            }
        }
        return $area_type_arr;
    }
    
    function getPrevAlert($fcst_data_type, $fcst_date){
        $prev_alert_arr = array();
        $day1 = date("Y-m-d", strtotime("$fcst_date -6 days"));
        $day2 = date("Y-m-d", strtotime("$fcst_date -5 days"));
        $day3 = date("Y-m-d", strtotime("$fcst_date -4 days"));
        $day4 = date("Y-m-d", strtotime("$fcst_date -3 days"));
        $day5 = date("Y-m-d", strtotime("$fcst_date -2 days"));
        $day6 = date("Y-m-d", strtotime("$fcst_date -1 days"));
        $blk_id_res = $this->db->select('id')->get('blocks')->result();
        foreach ($blk_id_res as $blk_id) {
            $block_id = $blk_id->id;
            $select_col = "SUM(CASE WHEN date='".$day1."' THEN warning_level_id ELSE NULL END) AS day1,"
                    . "SUM(CASE WHEN date='".$day2."' THEN warning_level_id ELSE NULL END) AS day2,"
                    . "SUM(CASE WHEN date='".$day3."' THEN warning_level_id ELSE NULL END) AS day3,"
                    . "SUM(CASE WHEN date='".$day4."' THEN warning_level_id ELSE NULL END) AS day4,"
                    . "SUM(CASE WHEN date='".$day5."' THEN warning_level_id ELSE NULL END) AS day5,"
                    . "SUM(CASE WHEN date='".$day6."' THEN warning_level_id ELSE NULL END) AS day6";
            $where_date_r = "(date >='".$day1."' AND date <='".$day6."') AND block_id = ".$block_id;
            $this->db->select($select_col);
            $this->db->from('heatwave_alert_dissemination_'.$fcst_data_type);
            $this->db->where($where_date_r);
            $res = $this->db->get();
            if ($res->num_rows() > 0){
                $prev_alert_arr[$block_id] = $this->getPrevDataArr($res->row());
            }
            else{
                $prev_alert_arr[$block_id] = NULL;
            }
        }
        return $prev_alert_arr;
    }
    
    function getPrevTx($fcst_data_type, $fcst_date){
        $prev_tx_arr = array();
        $day1 = date("Y-m-d", strtotime("$fcst_date -6 days"));
        $day2 = date("Y-m-d", strtotime("$fcst_date -5 days"));
        $day3 = date("Y-m-d", strtotime("$fcst_date -4 days"));
        $day4 = date("Y-m-d", strtotime("$fcst_date -3 days"));
        $day5 = date("Y-m-d", strtotime("$fcst_date -2 days"));
        $day6 = date("Y-m-d", strtotime("$fcst_date -1 days"));
        $blk_id_res = $this->db->select('id')->get('blocks')->result();
        foreach ($blk_id_res as $blk_id) {
            $block_id = $blk_id->id;
            $select_col = "SUM(CASE WHEN date='".$day1."' THEN tx_dynamic ELSE NULL END) AS day1,"
                        . "SUM(CASE WHEN date='".$day2."' THEN tx_dynamic ELSE NULL END) AS day2,"
                        . "SUM(CASE WHEN date='".$day3."' THEN tx_dynamic ELSE NULL END) AS day3,"
                        . "SUM(CASE WHEN date='".$day4."' THEN tx_dynamic ELSE NULL END) AS day4,"
                        . "SUM(CASE WHEN date='".$day5."' THEN tx_dynamic ELSE NULL END) AS day5,"
                        . "SUM(CASE WHEN date='".$day6."' THEN tx_dynamic ELSE NULL END) AS day6";
            $where_date_r = "(date >='".$day1."' AND date <='".$day6."') AND block_id = ".$block_id;
            $this->db->select($select_col);
            $this->db->from('heatwave_alert_dissemination_'.$fcst_data_type);
            $this->db->where($where_date_r);
            $res = $this->db->get();
            if ($res->num_rows() > 0){
                $prev_tx_arr[$block_id] = $this->getPrevDataArr($res->row());
            }
            else{
                $prev_tx_arr[$block_id] = NULL;
            }
        }
        return $prev_tx_arr;
    }
    
    function getPrevDataArr($data_row){
        $data_d1 = $data_row->day1;
        $data_d2 = $data_row->day2;
        $data_d3 = $data_row->day3;
        $data_d4 = $data_row->day4;
        $data_d5 = $data_row->day5;
        $data_d6 = $data_row->day6;
        $prev_data_arr = array($data_d1, $data_d2, $data_d3, $data_d4, $data_d5, $data_d6);
        return $prev_data_arr;
    }
    
    function checkExistAlertData($data_type, $bl_id, $date, $timestamp){
        /*pr($data_type);
        pr($bl_id);
        pr($date);
        pr($timestamp);*/
        //$where_datetime = "date = '".$date."' AND UNIX_TIMESTAMP('".$timestamp." 14:00:00') <= UNIX_TIMESTAMP(`timestamp`) AND UNIX_TIMESTAMP('".date("Y-m-d", strtotime("$timestamp +1 days"))." 14:00:00') > UNIX_TIMESTAMP(`timestamp`)";
        $where_datetime = "date = '".$date."'";
        $this->db->select('id');
        if($data_type != 'weight'){
            $this->db->from('heatwave_alert_dissemination_'.$data_type);
        } else {   
            $this->db->from('weighted_matrix_max_temp');
        }
        $this->db->where('block_id', $bl_id);
        $this->db->where($where_datetime);
        $res = $this->db->get();
        if ($res->num_rows() > 0){
            return $res->row()->id;
        }
        else{
            return false;
        }
    }
    
    function insertHeatwaveAlert($data_type, $data){
        $this->db->insert_batch('heatwave_alert_dissemination_'.$data_type, $data);
    }
    
    function updateHeatwaveAlert($data_type, $data){
        if($data_type != 'weight'){
            $this->db->update_batch('heatwave_alert_dissemination_'.$data_type, $data, 'id');
        } else {   
            $this->db->update_batch('weighted_matrix_max_temp', $data, 'id');
        }
    }

    function updateHeatwaveAlert_VA_UP($data, $fcst_data_type, $date){
        $tbl_to_choose = '';
        $not_include_ids = array();
        if($fcst_data_type == 'imd'){
            $tbl_to_choose = 'heatwave_alert_dissemination_imd';
        } else if($fcst_data_type == 'ensemble'){
            $tbl_to_choose = 'heatwave_alert_dissemination_ensemble';
        } else if($fcst_data_type == 'wrf'){
            $tbl_to_choose = 'heatwave_alert_dissemination_wrf';
        } else if($fcst_data_type == 'ecmwf'){
            $tbl_to_choose = 'heatwave_alert_dissemination_ecmwf';
        } else if($fcst_data_type == 'weight'){
            $tbl_to_choose = 'weighted_matrix_max_temp';
        }
        if(!empty($data)){
            foreach ($data as $key => $value) {
                array_push($not_include_ids, $value['block_id']);
            }
            $this->db->select('*');
            $this->db->where_not_in('block_id',$not_include_ids);
            $this->db->where('date',$date);
            $res = $this->db->get($tbl_to_choose);
            $res_ = $res->result_array();
            if(!empty($res_)){
                foreach ($res_ as $key => $value) {
                    $temp_arr = array(
                        'date'                      => $date,
                        'block_id'                  => $value['block_id'],
                        'max_temp_fcst'             => $value['tx_dynamic'],
                        'max_temp_warning_level'    => $value['warning_level_id'],
                        'max_temp_user_id'          => $this->session->userdata('user_id'),
                        'max_temp_update'           => date('Y-m-d H:i:s'),
                        'updated_at'                => date('Y-m-d H:i:s'),
                        'max_temp_model_name'       => $fcst_data_type
                    );
                    array_push($data, $temp_arr);
                    unset($temp_arr);
                }
            }
            if(!empty($data)){
                // Update or Insert information to Master Table
                foreach ($data as $key_ => $value_) {
                    $this->db->select('*');
                    $this->db->where('block_id',$value_['block_id']);
                    $this->db->where('date',$value_['date']);
                    $this->db->from('value_added_forecast_updated');
                    $result = $this->db->get();
                    if ($result->num_rows() > 0){ // Update
                        $result_      = $result->row_array();
                        $id_to_update = $result_['id'];
                        $this->db->where('id', $id_to_update);
                        $this->db->update('value_added_forecast_updated', $value_);
                    } else{  // Insert
                        $this->db->insert('value_added_forecast_updated',$value_);
                    }
                }
            }
        } else {
            return false;
        }
    }
    
    function get_alert_latest_info($data_type, $date){
        $where_datetime = "date = '".$date."'";
        $this->db->select('user_id, MAX(timestamp) as max_datetime');
        if($data_type != 'weight'){
            $this->db->from('heatwave_alert_dissemination_'.$data_type);    
        } else {
            $this->db->from('weighted_matrix_max_temp');    
        }
        $this->db->where($where_datetime);
        $res = $this->db->get();
        
        $u_id = $res->row()->user_id;
        $user_name = $this->get_user_info_by_uid($u_id);
        $max_datetime = $res->row()->max_datetime;
        return array('max_datetime' => $max_datetime, 'latest_user' => $user_name);
    }
    
    function get_user_info_by_uid($u_id){
        $this->db->select('full_name');
        $this->db->from('users');
        $this->db->where('id', $u_id);
        $res = $this->db->get();
        return ( $res->num_rows() > 0 )? $res->row()->full_name : null;
    }
    
    function alertAdvisoryText(){
        $this->db->select('*');
        $res = $this->db->get('advisory_heatwave');
        return $res->result();
    }
    
    function getHeatwaveColName(){
        $this->db->select('*');
        $res = $this->db->get('advisory_heatwave_col_name');
        //return $res->result();
        $col_name = $res->result();
        
        $column_name_array = array();
        $col_name_gp = array('alert', 'impact', 'warning', 'suggested_action');
        $count = 0;
        foreach ($col_name as $col) {
            $col_name_eng = $col->eng_col_name;
            $col_name_ory = $col->ory_col_name;
            $column_name_array[$col_name_gp[$count]] = array('col_eng' => $col_name_eng, 'col_ory' => $col_name_ory);
            $count++;
        }
        return $column_name_array;
    }
    
    function getHeatwaveAdvisory($alert_id){
        $this->db->select('*');
        $this->db->where('warning_level_id', $alert_id);
        $res = $this->db->get('advisory_heatwave');
        return $res->row();
    }
    
    public function getDistrict(/*$curr_date*/){
        $this->db->select('id,district_name');
        $result = $this->db->get('districts')->result();
        
//        $where_datetime = "UNIX_TIMESTAMP('".$curr_date." 14:00:00') <= UNIX_TIMESTAMP(`timestamp`)  AND UNIX_TIMESTAMP('".date("Y-m-d", strtotime("$curr_date +1 days"))." 14:00:00') > UNIX_TIMESTAMP(`timestamp`) ";
//        $this->db->select('DISTINCT(districts.district_name), blocks.district_id as id');
//        $this->db->from('districts');
//        $this->db->join('blocks', 'districts.id = blocks.district_id');
//        $this->db->join('heatwave_alert_dissemination', 'blocks.id = heatwave_alert_dissemination.block_id');
//        $this->db->where($where_datetime);
//        $result = $this->db->get()->result();
        
        $id = array('0');
        $name = array('Select District');
        for($i = 0; $i < count($result); $i++){
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->district_name);
        }
        return array_combine($id, $name);
    }
    
    public function getBlock($district_id = NULL){
        $this->db->select('id,block_name');
        $result = $this->db->where('district_id', $district_id)->get('blocks')->result();
        $id = array('0');
        $name = array('All Blocks');
        for ($i=0; $i<count($result); $i++){
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->block_name);
        }
        return array_combine($id, $name);
    }
    
    
    
    public function getLocDistrict(){
        $result = $this->db->get('districts')->result();
        $id = array('0');
        $name = array('Select District');
        for($i = 0; $i < count($result); $i++){
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->district_name);
        }
        return array_combine($id, $name);
    }
    
    public function getManBlock($district_id = NULL){
        $result = $this->db->where('district_id', $district_id)->get('blocks')->result();
        
//        $where_datetime = "UNIX_TIMESTAMP('".$curr_date." 14:00:00') <= UNIX_TIMESTAMP(`timestamp`)  AND UNIX_TIMESTAMP('".date("Y-m-d", strtotime("$curr_date +1 days"))." 14:00:00') > UNIX_TIMESTAMP(`timestamp`) ";
//        $this->db->select('*');
//        $this->db->from('blocks');
//        $this->db->join('heatwave_alert_dissemination', 'blocks.id = heatwave_alert_dissemination.block_id');
//        $this->db->where('blocks.district_id', $district_id);
//        $this->db->where($where_datetime);
//        $result = $this->db->get()->result();
        
        $id = array('0');
        $name = array('All Blocks');
        for ($i=0; $i<count($result); $i++){
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->block_name);
        }
        return array_combine($id, $name);
    }
    
    public function getLocBlock($district_id = NULL){
        $result = $this->db->where('district_id', $district_id)->get('blocks')->result();
        $id = array('0');
        $name = array('All Blocks');
        for ($i=0; $i<count($result); $i++){
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->block_name);
        }
        return array_combine($id, $name);
    }
    
    public function getUserGroup(){
        //$result = $this->db->select('DISTINCT(gp_id)')->where('user_group != ""')->get('users')->result();
        $get_result = $this->db->select('*')->get('advisory_heatwave_user_gp');
        
        $id = array('');
        $name = array('Select Group');
        if( $get_result->num_rows() > 0 ){
            $result = $get_result->result();
            for ($i=0; $i<count($result); $i++){
                array_push($id, $result[$i]->gp_id);
                array_push($name, $result[$i]->gp_name);
            }
        }
        return array_combine($id, $name);
    }
    
    public function getUserbyGroupID($group_id){
        $get_result = $this->db->select('*')->where('gp_id =', $group_id)->get('advisory_heatwave_user_gp');
        
        if( $get_result->num_rows() > 0 ){
            $result = $get_result->row();
            $u_id_list = $result->gp_user_id;
            $u_email_list = $result->gp_email_list;
        }
        return array( "u_id_list" => $u_id_list, "u_email_list" => $u_email_list);
    }
    
    
    public function getUserEmail(/*$curr_date*/){
        $this->db->select('id,full_name,email');
        $result = $this->db->where(' email != "" ')->where('block_id != 0')->get('users')->result();

//        $where_datetime = "UNIX_TIMESTAMP('".$curr_date." 14:00:00') <= UNIX_TIMESTAMP(`timestamp`)  AND UNIX_TIMESTAMP('".date("Y-m-d", strtotime("$curr_date +1 days"))." 14:00:00') > UNIX_TIMESTAMP(`timestamp`) ";
//        $this->db->select('`users`.`id` as id, `users`.`full_name` as full_name');
//        $this->db->from('users');
//        $this->db->join('heatwave_alert_dissemination', 'users.block_id = heatwave_alert_dissemination.block_id');
//        $this->db->where('users.email != ""');
//        $this->db->where('users.block_id != 0');
//        $this->db->where($where_datetime);
//        $result = $this->db->get()->result();
        
        return $result;
    }
/*    
    function getAlert_by_Loc($data_type, $bl_id, $curr_date){
        //$where_datetime = "UNIX_TIMESTAMP('".$curr_date." 14:00:00') <= UNIX_TIMESTAMP(`timestamp`)  AND UNIX_TIMESTAMP('".date("Y-m-d", strtotime("$curr_date +1 days"))." 14:00:00') > UNIX_TIMESTAMP(`timestamp`) ";
        $where_datetime = "date = '".$curr_date."'";
        $this->db->select('warning_level_id');
        $this->db->from('heatwave_alert_dissemination_'.$data_type);
        $this->db->where('block_id', $bl_id);
        $this->db->where($where_datetime);
        $res = $this->db->get();
        //return $res->row();
        return ( $res->num_rows() > 0 )? $res->row() : null;
    }
*/    
    function getLoc_by_User($u_id){
        $this->db->select('block_id');
        $this->db->from('users');
        $this->db->where('id', $u_id);
        $res = $this->db->get();
        //return $res->row();
        return ( $res->num_rows() > 0 )? $res->row() : null;
    }
    
    function getEmail_by_User($u_id){
        $this->db->select('email');
        $this->db->from('users');
        $this->db->where('id', $u_id);
        $res = $this->db->get();
        //return $res->row();
        return ( $res->num_rows() > 0 )? $res->row() : null;
    }
    
    function getEmail_by_UserGroup($u_gp){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_group', $u_gp);
        $res = $this->db->get();
        return $res->result();
    }
    
    function getEmail_by_Loc($di_id, $bl_id){
        $this->db->select('email');
        $this->db->from('users');
        if( $bl_id == '0' ){
            $this->db->where('district_id', $di_id);
        }
        else{
            $this->db->where('block_id', $bl_id);
        }
        $res = $this->db->get();
        return ( $res->num_rows() > 0 )? $res->result() : null;
    }
    
    function check_exist_user_group($name){
        $result = $this->db->where('gp_name', $name)->get('advisory_heatwave_user_gp');
        return ( $result->num_rows() > 0 )? true : false;
    }

    function update_user_group($data){
        //$this->db->update_batch('users', $data, 'gp_id');
        $this->db->update_batch('advisory_heatwave_user_gp', $data, 'gp_id');
    }
    
    function getUpdatedData($date){    
        $imd_up_time        = $this->latest_imd_update($date);
        $ensemble_up_time   = $this->latest_ensemble_update($date);
        $ecmwf_up_time      = $this->latest_ecmwf_update($date);
        $wrf_up_time        = $this->latest_wrf_update($date);
        /*pr($imd_up_time);
        pr($ensemble_up_time);
        pr($ecmwf_up_time);*/
        /*$imd_up_time        = NULL;
        $ensemble_up_time   = NULL;
        $ecmwf_up_time      = NULL;*/
        $res_arr = array($imd_up_time,$ensemble_up_time,$ecmwf_up_time,$wrf_up_time);
        arsort($res_arr);
        $param_to_show = key($res_arr); // 0 - IMD, 1 - Ensemble, 2 - Ecmwf, 3 - Wrf
        #pr($param_to_show);
        if($imd_up_time == '' && $ensemble_up_time == '' && $ecmwf_up_time == '' && $wrf_up_time == '' ){
            // Fetch IMD defult or when PARAM to SHOW is 0
            #echo 'herer';
            return array('result_arr'=>array(),'map_data'=>array());
        } else if($param_to_show == 0) { // Fetch IMD data
            $this->db->select('A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_imd AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->where('A.date', $date);
        } else if($param_to_show == 1) { // Fetch ENSEMBLE data
            $this->db->select('A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_ensemble AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->where('A.date', $date);
        } else if($param_to_show == 2) { // Fetch ECMWF data
            $this->db->select('A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_ecmwf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->where('A.date', $date);
        } else if($param_to_show == 3) { // Fetch ECMWF data
            $this->db->select('A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_wrf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->where('A.date', $date);
        }
        $res = $this->db->get();
        $result_arr = $res->result_array();

        $tx_fcst_array = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);
        }
        $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array);
        return $ret_arr;
    }
   
    public function latest_imd_update($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('heatwave_alert_dissemination_imd');
        $this->db->where('date',$date);
        $this->db->where('updated_at IS NOT NULL');
        $res = $this->db->get();
        $ret_ = $res->row_array();
        if(!empty($ret_)){
            return $ret_['updated_at'];
        } else {
            return NULL;
        }
    }

    public function latest_ensemble_update($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('heatwave_alert_dissemination_ensemble');
        $this->db->where('date',$date);
        $this->db->where('updated_at IS NOT NULL');
        $res = $this->db->get();
        $ret_ = $res->row_array();
        if(!empty($ret_)){
            return $ret_['updated_at'];
        } else {
            return NULL;
        }
    }
    public function latest_ecmwf_update($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('heatwave_alert_dissemination_ecmwf');
        $this->db->where('date',$date);
        $this->db->where('updated_at IS NOT NULL');
        $res = $this->db->get();
        $ret_ = $res->row_array();
        if(!empty($ret_)){
            return $ret_['updated_at'];
        } else {
            return NULL;
        }
    }
    public function latest_wrf_update($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('heatwave_alert_dissemination_wrf');
        $this->db->where('date',$date);
        $this->db->where('updated_at IS NOT NULL');
        $res = $this->db->get();
        $ret_ = $res->row_array();
        if(!empty($ret_)){
            return $ret_['updated_at'];
        } else {
            return NULL;
        }
    }

    public function getImdLatestData($date){
        $where = "date = '".$date."'";
        $this->db->select('date,block_id,tx_fcst,tx_dynamic');
        $this->db->from('heatwave_alert_dissemination_imd');
        $this->db->where($where);
        $this->db->order_by("block_id", "asc");
        $res = $this->db->get();
        $imd_tx_fcst = $res->result_array();
        $tx_fcst_array = array();
        foreach ($imd_tx_fcst as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx_fcst_array[$block_id] = $tx_fcst;
        }
        return $tx_fcst_array;
    }

    public function getEcmwfLatestData($date){
        $where = "date = '".$date."'";
        $this->db->select('date,block_id,tx_fcst,tx_dynamic');
        $this->db->from('heatwave_alert_dissemination_ecmwf');
        $this->db->where($where);
        $this->db->order_by("block_id", "asc");
        $res = $this->db->get();
        $ecmwf_tx_fcst = $res->result_array();
        $tx_fcst_array = array();
        foreach ($ecmwf_tx_fcst as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx_fcst_array[$block_id] = $tx_fcst;
        }
        return $tx_fcst_array;
    }

    // Hilly or Plain or Coastal list of each block
    public function getHillyPlainBlockWise(){
        $ret_ = array();
        $this->db->select('id,region');
        $this->db->from('blocks');
        $res = $this->db->get();
        $ret = $res->result_array();
        foreach($ret as $key => $val){
            $block_id = $val['id'];
            $ret_ [$val['id']] = $val['region']; 
        }
        return $ret_;
    }
}

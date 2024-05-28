<?php
class D_retrieval_model extends CI_Model{
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
}

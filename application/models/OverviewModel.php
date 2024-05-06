<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class OverviewModel extends CI_Model{
    
    function __construct() {
    }

    function _get_district_id_list() {
        $this->db->distinct();
        $this->db->select('id');
        $this->db->order_by('id', 'ASC');
        $results = $this->db->get('districts');
        return $results->result_array();
    }

    function _get_block_id_list() {
        $this->db->distinct();
        $this->db->select('id');
        $this->db->order_by('id', 'ASC');
        $results = $this->db->get('block_s');
        return $results->result_array();
    }

    public function filter_district_wise($info){
        $ret = array();
        $dist_list = $this->_get_district_id_list();
        foreach($dist_list as $key=>$val){
            if(!empty($info)){
                foreach ($info as $key_ => $value) {
                    if($val['id'] ==$key_){
                        $ret[$val['id']] = $value;
                    } 
                } 
            } else {
                $ret[$val['id']] = NULL;
            }
        }
        return $ret;
    }

    public function filter_block_wise($info){
        $ret = array();
        $block_list = $this->_get_block_id_list();
        foreach($block_list as $key=>$val){
            if(!empty($info)){
                foreach ($info as $key_ => $value) {
                    if($val['id'] == $key_){
                        $ret[$val['id']] = $value;
                    } 
                } 
            } else {
                $ret[$val['id']] = NULL;
            }
        }
        return $ret;
    }

    function get_heatwave_warning_level_district($dist_id,$date,$fcst){
        $alert_id = '';
        $normal = $this->Va_forecst_model->get_normal_value_district($date , $dist_id);
        if($fcst !== null && $normal !== null){
            if($fcst >= 47 && ($fcst - $normal > 6.4) ){
                $alert_id = 3;
            }
            else if(($fcst - $normal > 6.4)){
                $alert_id = 3;
            }
            else if($fcst >= 45 && ( ($fcst - $normal >= 4.5) && ($fcst - $normal <= 6.4 ) ) ){
                $alert_id = 2;
            }
            else if( ($fcst - $normal >= 4.5) && ($fcst - $normal <= 6.4 ) ){
                $alert_id = 2;
            } 
            else if($fcst - $normal < 4.5){
                $alert_id = 1;
            }
        } 
        return $alert_id;
    }

    function get_normal_value_district($date,$dist_id){
        $date_explode = explode('-',$date);
        $month_day = $date_explode[1].$date_explode[2];
        $this->db->select('max_temp');
        $this->db->from('temp_stn_normals');
        $this->db->join('temp_stn_district', 'temp_stn_normals.stn_id = temp_stn_district.stn_id');
        $this->db->where('DATE_FORMAT(`temp_stn_normals`.`date`, "%m%d") =', $month_day);
        $this->db->where('dist_id',$dist_id);
        $res = $this->db->get();
        $tx_normal_res = $res->row_array();
        if(!empty($tx_normal_res)){
            return $tx_normal_res['max_temp'];
        } else {
            return NULL;
        }
    }

    public function get_district_info($date,$model){
        $final_ = array();
        $this->db->select('district_id,temp_max');
        $this->db->where('fcst_date',$date);
        if($model == 'wrf'){
            $this->db->from('district_wrf_forecast');    
        } else if($model == 'imd_gfs'){
            $this->db->from('district_imd_gfs_forecast');
        } else if($model == 'ecmwf'){
            $this->db->from('district_ecmwf_forecast');
        } else if($model == 'ensemble'){
            $this->db->from('district_ensemble_forecast');
        } else if($model == 'value_added'){
            $this->db->from('value_added_forecast_updated');
        }
        
        $res_ = $this->db->get()->result_array();
        if(!empty($res_)){
            foreach ($res_ as $key => $value) {
                $temp = $value['temp_max'];
                $final_[$value['district_id']] = round($temp,2);
            }
        }
        $ret_ = $this->filter_district_wise($final_);
        return $ret_;
    }

    function getTxFcstData($data_type, $date){
        if( $data_type == 'imd'){
            $this->db->select('block_id,temp_max');
            $this->db->from('block_imd_gfs_forecast');
            $this->db->where('block_imd_gfs_forecast.fcst_date', $date);
        } else if( $data_type == 'ensemble'){
            $this->db->select('block_id,temp_max');
            $this->db->from('block_ensemble_forecast');
            $this->db->where('block_ensemble_forecast.fcst_date', $date);
        } else if( $data_type == 'ecmwf'){
            $this->db->select('block_id,temp_max');
            $this->db->from('block_ecmwf_forecast');
            $this->db->where('block_ecmwf_forecast.fcst_date', $date);
        } else if( $data_type == 'wrf'){
            $this->db->select('block_id,temp_max');
            $this->db->from('block_wrf_forecast');
            $this->db->where('block_wrf_forecast.fcst_date', $date);
        } else if( $data_type == 'va'){
            $this->db->select('alert_tb.block_id,round(alert_tb.max_temp_fcst) as temp_max,alert_tb.updated_at');
            $this->db->from('value_added_forecast_updated as alert_tb');
            $this->db->where('alert_tb.date', $date);
        } else {
            return NULL;
        }
        $res = $this->db->get();
        $tx_fcst_res = $res->result();
        $tx_fcst_array = array();
        foreach ($tx_fcst_res as $tx_fcst) {
            $block_id = $tx_fcst->block_id;
            $tx = $tx_fcst->temp_max;
            
            $tx_fcst_array[$block_id] = round($tx,1);
        }
        return $tx_fcst_array;
    }

    function getTxFcstDataDistrict($data_type, $date){
        if( $data_type == 'imd'){
            $this->db->select('district_id,temp_max');
            $this->db->from('district_ecmwf_forecast');
            $this->db->where('district_ecmwf_forecast.fcst_date', $date);
        } else if( $data_type == 'ensemble'){
            $this->db->select('district_id,temp_max');
            $this->db->from('district_ensemble_forecast');
            $this->db->where('district_ensemble_forecast.fcst_date', $date);
        } else if( $data_type == 'ecmwf'){
            $this->db->select('district_id,temp_max');
            $this->db->from('district_ecmwf_forecast');
            $this->db->where('district_ecmwf_forecast.fcst_date', $date);
        } else if( $data_type == 'wrf'){
            $this->db->select('district_id,temp_max');
            $this->db->from('district_wrf_forecast');
            $this->db->where('district_wrf_forecast.fcst_date', $date);
        } else if( $data_type == 'va'){
            $district_wise = array();
            $district_data = $this->get_district_dtls();
            foreach($district_data as $key => $val){
                $total = 0;
                $block_ids = '';
                $this->db->select('id');
                $this->db->from('blocks');
                $this->db->where('district_id',$val['id']);
                $res_block = $this->db->get();
                $result_blocks = $res_block->result_array();
                foreach($result_blocks as $res_k => $res_v){
                    $block_ids .= $res_v['id'].','; 
                }
                $block_ids = rtrim($block_ids,',');
                $this->db->select('alert_tb.block_id,round(alert_tb.max_temp_fcst) as tx_dynamic,alert_tb.updated_at');
                $this->db->from('value_added_forecast_updated as alert_tb');
                $this->db->join('blocks as B', 'B.id = alert_tb.block_id');
                $this->db->where_in('B.id', $block_ids,FALSE);
                $this->db->where('alert_tb.date', $date);
                $res = $this->db->get();
                $ret_ = $res->result_array();
                if(!empty($ret_)){
                    foreach($ret_ as $k => $v){
                        $total += $v['tx_dynamic'];
                    }
                    $district_wise[$val['id']] = round($total  / $val['total_blocks'],2);
                } else {
                    $district_wise[$val['id']] = '';
                }
            }
            return $district_wise;
        } else {
            return NULL;
        }
        $res = $this->db->get();
        $tx_fcst_res = $res->result();
        $tx_fcst_array = array();
        foreach ($tx_fcst_res as $tx_fcst) {
            $district_id = $tx_fcst->district_id;
            $tx = $tx_fcst->temp_max;
            $tx_fcst_array[$district_id] = round($tx,1);
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
        $this->db->order_by("blk_id", "asc");
        $res = $this->db->get();
        $tx_normal_res = $res->result();
        $tx_normal_array = array();
        foreach ($tx_normal_res as $tx_normal) {
            $block_id = $tx_normal->blk_id;
            $tx = $tx_normal->max_temp;
            $tx_normal_array[$block_id] = round($tx,1);
        }
        return $tx_normal_array;
    }

    function get_district_dtls (){
        $this->db->select('id,district_name,total_blocks');
        $this->db->from('districts');
        $result = $this->db->get();
        $res = $result->result_array();
        return $res;
    }
    
    function getTxNormalDataDistrict($date){
        $district_wise = $ret_ = array();
        $date_explode = explode('-',$date);
        $month_day = $date_explode[1].$date_explode[2];
        $district_data = $this->get_district_dtls();
        foreach($district_data as $key => $val){
            $total = 0;
            $block_ids = '';
            $this->db->select('id');
            $this->db->from('blocks');
            $this->db->where('district_id',$val['id']);
            $res_block = $this->db->get();
            $result_blocks = $res_block->result_array();
            foreach($result_blocks as $res_k => $res_v){
                $block_ids .= $res_v['id'].','; 
            }
            $block_ids = rtrim($block_ids,',');
            $this->db->select('blk_id, max_temp,district_id');
            $this->db->from('temp_stn_normals');
            $this->db->join('temp_stn_block', 'temp_stn_normals.stn_id = temp_stn_block.stn_id');
            $this->db->join('blocks', 'blocks.id = temp_stn_block.blk_id');
            $this->db->where('DATE_FORMAT(`temp_stn_normals`.`date`, "%m%d") =', $month_day);
            $this->db->where_in('blocks.id', $block_ids,FALSE);
            $this->db->order_by("blk_id", "asc");
            $res = $this->db->get();
            $ret_ = $res->result_array();
            foreach($ret_ as $k => $v){
                $total += $v['max_temp'];
            }
            $district_wise[$val['id']] = round($total  / $val['total_blocks'],2);
        }
        return $district_wise;
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

    public function getBlockDetails(){
        $this->db->select('id, block_name');
        $res = $this->db->get('blocks');
        $blocks = $res->result_array();
        return $blocks;
    }
    public function getDistrictDetails(){
        $this->db->select('id, district_name');
        $res = $this->db->get('districts');
        $blocks = $res->result_array();
        return $blocks;
    }

    // Hilly or Plain or Coastal list of each District
    public function getHillyPlainDistrictWise(){
        $ret_ = array();
        $this->db->select('id,region');
        $this->db->from('districts');
        $res = $this->db->get();
        $ret = $res->result_array();
        foreach($ret as $key => $val){
            $block_id = $val['id'];
            $ret_ [$val['id']] = $val['region']; 
        }
        return $ret_;
    }
}
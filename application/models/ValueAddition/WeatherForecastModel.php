<?php
/**
 * Description of WeatherForecastModel
 * @author Saroj
 */
class WeatherForecastModel extends CI_Model{    
    
    function get_parameter_name($parameter){
        $this->db->select("id,parameter_name,nick_name");
        $this->db->from("parameter_list");
        $this->db->where("id",$parameter);
        $res = $this->db->get();
        $ret_ = $res->row_array();
        //$parameter_nick = $ret_['nick_name'];
        return $ret_;

    }
    function getForecastInfo ($data_type, $date, $parameter){
        $parameter = trim($parameter['nick_name']);
        $response = array();
        $this->db->select("id,fcst_date,district_id");
        $this->db->select($parameter);
        if($data_type == 'imd'){
            $this->db->from("district_imd_gfs");
        } else if ($data_type == 'ecmwf'){
            $this->db->from("district_ecmwf");
        } else if ($data_type == 'ensemble'){
            $this->db->from("district_ensemble");
        }
        $this->db->where('fcst_date',$date);
        $res = $this->db->get();
        $ret_ = $res->result_array();
        if(!empty($ret_)){
            foreach($ret_ as $key => $val){
                if($parameter == 'temp_max') {
                    $response[$val['district_id']] = $val['temp_max'];
                } else if($parameter == 'temp_min') {
                    $response[$val['district_id']] = $val['temp_min'];
                } else if($parameter == 'rainfall') {
                    $response[$val['district_id']] = $val['rainfall'];
                } else if($parameter == 'humidity') {
                    $response[$val['district_id']] = $val['humidity'];
                } else if($parameter == 'wind_speed') {
                    $response[$val['district_id']] = $val['wind_speed'];
                } else if($parameter == 'cloud_cover') {
                    $response[$val['district_id']] = $val['cloud_cover'];
                }
            }
        }
        return $response;
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
        $this->db->group_by('user_id');
        $res = $this->db->get();
        
        $u_id = $res->row()->user_id;
        $user_name = $this->get_user_info_by_uid($u_id);
        $max_datetime = $res->row()->max_datetime;
        return array('max_datetime' => $max_datetime, 'latest_user' => $user_name);
    }
    function get_user_info_by_uid($u_id){
        $this->db->select('name');
        $this->db->from('users');
        $this->db->where('id', $u_id);
        $res = $this->db->get();
        return ( $res->num_rows() > 0 )? $res->row()->full_name : null;
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
    function getUpdatedData($date,$filter_level = NULL){    
        $model_name = '';
        $imd_up_time        = $this->latest_imd_update($date);
        $ensemble_up_time   = $this->latest_ensemble_update($date);
        $ecmwf_up_time      = $this->latest_ecmwf_update($date);
        $weighted_up_time   = $this->latest_weighted_update($date);
        $wrf_up_time   = $this->latest_wrf_update($date);
        $res_arr = array($imd_up_time,$ensemble_up_time,$ecmwf_up_time,$weighted_up_time,$wrf_up_time);
        arsort($res_arr);
        $param_to_show = key($res_arr); // 0 - IMD, 1 - Ensemble, 2 - Ecmwf, 3 - Weighted, 4- Wrf
        if($imd_up_time == '' && $ensemble_up_time == '' && $ecmwf_up_time == '' && $weighted_up_time == '' && $wrf_up_time == ''){
            return array('result_arr'=>array(),'map_data'=>array(), 'model_name'=>'N/A');
        } else if($param_to_show == 0) { // Fetch IMD data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic) as tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_imd AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            if($filter_level != 4){
                $this->db->where('A.warning_level_id',$filter_level);    
            }
            $model_name = 'IMD';
        } else if($param_to_show == 1) { // Fetch ENSEMBLE data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic) as tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_ensemble AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            if($filter_level != 4){
                $this->db->where('A.warning_level_id',$filter_level);    
            }
            $model_name = 'Ensemble';
        } else if($param_to_show == 2) { // Fetch ECMWF data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic) as tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_ecmwf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            if($filter_level != 4){
                $this->db->where('A.warning_level_id',$filter_level);    
            }
            $model_name = 'ECMWF';
        } else if($param_to_show == 3) { // Fetch Weighted data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic) as tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('weighted_matrix_max_temp AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            if($filter_level != 4){
                $this->db->where('A.warning_level_id',$filter_level);    
            }
            $model_name = 'Weighted';
        } else if($param_to_show == 4) { // Fetch WRF data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic) as tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_wrf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            if($filter_level != 4){
                $this->db->where('A.warning_level_id',$filter_level);    
            }
            $model_name = 'WRF';
        }
        $res = $this->db->get();
        $result_arr = $res->result_array();
        $district_found = $block_found = array();
        $tx_fcst_array = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);
            if (!in_array($tx_fcst['district_id'], $district_found)) {
                $district_found[] = $tx_fcst['district_id'];
            }
            if (!in_array($tx_fcst['block_id'], $block_found)) {
                $block_found[] = $tx_fcst['block_id'];
            }
        }
        $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array,'district_found'=>$district_found,'block_found'=>$block_found, 'model_name'=>$model_name);
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
    public function latest_weighted_update($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('weighted_matrix_max_temp');
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

    function getUpdatedDataRainfall($date){    
        $model_name = '';
        $imd_up_time        = $this->latest_imd_update_rainfall($date);
        $ecmwf_up_time      = $this->latest_ecmwf_update_rainfall($date);
        $wrf_up_time        = $this->latest_wrf_update_rainfall($date);
        $weighted_up_time   = $this->latest_weigted_update_rainfall($date);
        $res_arr = array($imd_up_time,$ecmwf_up_time,$wrf_up_time,$weighted_up_time);
        arsort($res_arr);
        $param_to_show = key($res_arr); // 0 - IMD, 1 - Ecmwf, 2- WRF, 3 - Weighted
        if($imd_up_time == '' && $ecmwf_up_time == '' && $wrf_up_time == '' && $weighted_up_time == ''){
            return array('result_arr'=>array(),'map_data'=>array(),'model_name' =>'N/A');
        } else if($param_to_show == 0) { // Fetch IMD data
            $this->db->select('D.id as district_id,A.block_id,round(A.rainfall_dynamic,1) as rainfall_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('rainfall_alert_dissemination_imd AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'IMD';
        } else if($param_to_show == 1) { // Fetch ECMWF data
            $this->db->select('D.id as district_id,A.block_id,round(A.rainfall_dynamic,1) as rainfall_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('rainfall_alert_dissemination_ecmwf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Ecmwf';
        } else if($param_to_show == 2) { // Fetch WRF data
            $this->db->select('D.id as district_id,A.block_id,round(A.rainfall_dynamic,1) as rainfall_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('rainfall_alert_dissemination_wrf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Wrf';
        } else if($param_to_show == 3) { // Fetch Weighted data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic,1) as rainfall_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('weighted_matrix_rainfall AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Weighted';
        }
        $res = $this->db->get();
        $result_arr = $res->result_array();
        $tx_fcst_array = $updated_data = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['rainfall_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);

            $te = array();
            $te['block_name']        = $tx_fcst['block_name'];
            $te['rainfall_dynamic'] = round($tx_fcst['rainfall_dynamic'],1);
            array_push($updated_data, $te);
            unset($te);
        }
        $ret_arr = array('result_arr'=>$updated_data,'map_data'=>$tx_fcst_array,'model_name'=>$model_name);
        return $ret_arr;
    }

    public function latest_imd_update_rainfall($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('rainfall_alert_dissemination_imd');
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

    public function latest_ecmwf_update_rainfall($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('rainfall_alert_dissemination_ecmwf');
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

    public function latest_wrf_update_rainfall($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('rainfall_alert_dissemination_wrf');
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

    public function latest_weigted_update_rainfall($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('weighted_matrix_rainfall');
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

    public function get_rainfall_forecast_legend(){
        $this->db->select('*');
        $this->db->from('rainfall_forecast_legends');
        $this->db->where('id>',0);
        $this->db->order_by('legend_order','ASC');
        $res = $this->db->get();
        $result_arr = $res->result_array();
        return $result_arr;
    }

    public function count_info($s_table_name, $arr_where = NULL, $alias = 'id'){
        $tmp = $this->db->select('count('.$alias.') AS total', false)->where($arr_where,'',false)->get($s_table_name)->result_array();
        return $tmp[0]['total'];
    } 
    public function insert_multi($tbl, $info) {
        if(!empty($info)) {
            return $this->db->insert_batch($tbl, $info);
        }
        return false; 
    }
    public function update_multi($tbl, $info) {
        if(!empty($info)) {
            foreach ($info as $key => $value) {
                $condArr = 'date ="'.$value['date'].'" AND block_id = "'.$value['block_id'].'"';
                $check = $this->Va_forecst_model->count_info('value_added_forecast_updated',$condArr,'id');
                if($check == 1){
                    // Update
                    $this->db->where($condArr);
                    $this->db->update('value_added_forecast_updated', $value);
                } 
            }
        }
        return false; 
    }

    public function update_multi_graph($tbl, $info) {
        if(!empty($info)) {
            foreach ($info as $key => $value) {
                $condArr = 'date ="'.$value['date'].'" AND block_id = "'.$value['block_id'].'"';
                $check = $this->Va_forecst_model->count_info($tbl,$condArr,'id');
                if($check == 1){
                    // Update
                    $this->db->where($condArr);
                    $this->db->update($tbl, $value);
                } 
            }
        }
        return false; 
    }
    public function add_data($table, $info){
        if(!empty($info)) {
            $s_qry = $this->db->insert_string($table, $info); 
            return ($this->db->simple_query($s_qry))? $this->db->insert_id() : 0;
        }
        return false;       
    }

    public function va_addition_grap_functions($data,$model,$type){
        $csvData_in = $csvData_up = array();
        if($type == 'max_temp'){
            if($model == 'imd-gfs'){
                $table = 'heatwave_alert_dissemination_imd';
            } elseif($model == 'ecmwf'){
                $table = 'heatwave_alert_dissemination_ecmwf';
            } elseif($model == 'ensemble'){
                $table = 'heatwave_alert_dissemination_ensemble';
            } elseif($model == 'wrf'){
                $table = 'heatwave_alert_dissemination_wrf';
            } 
            /*foreach ($data as $k => $v) {
                $condArr = '';
                $condArr = 'date ="'.$v['date'].'" AND block_id = "'.$v['block_id'].'"';
                $check = $this->Va_forecst_model->count_info($table,$condArr,'id');
                if($check == 0){
                    $csvData_in[] = $v; 
                } else {
                    $csvData_up[] = $v;
                }
            }*/
        } elseif ($type == 'min_temp') {
            if($model == 'imd-gfs'){
                $table = 'coldwave_alert_dissemination_imd';
            /*} elseif($model == 'ecmwf'){
                $table = 'heatwave_alert_dissemination_ecmwf';
            } elseif($model == 'ensemble'){
                $table = 'heatwave_alert_dissemination_ensemble';*/
            } elseif($model == 'wrf'){
                $table = 'coldwave_alert_dissemination_wrf';
            }
        }elseif ($type == 'rainfall') {
            if($model == 'imd-gfs'){
                $table = 'rainfall_alert_dissemination_imd';
            } elseif($model == 'ecmwf'){
                $table = 'rainfall_alert_dissemination_ecmwf';
            /*} elseif($model == 'ensemble'){
                $table = 'heatwave_alert_dissemination_ensemble';*/
            } elseif($model == 'wrf'){
                $table = 'rainfall_alert_dissemination_wrf';
            }
        }elseif ($type == 'humidity') {
            if($model == 'imd-gfs'){
                $table = 'humidity_alert_dissemination_imd';
            } elseif($model == 'wrf'){
                $table = 'humidity_alert_dissemination_wrf';
            }
        }

        foreach ($data as $k => $v) {
            $condArr = '';
            $condArr = 'date ="'.$v['date'].'" AND block_id = "'.$v['block_id'].'"';
            $check = $this->Va_forecst_model->count_info($table,$condArr,'id');
            if($check == 0){
                $csvData_in[] = $v; 
            } else {
                $csvData_up[] = $v;
            }
        }
        //pr($csvData_up);
        if(count($csvData_in) >= 1){
            $res = $this->insert_multi($table,$csvData_in); 
            $statusCode = 1;   
        } 
        if(count($csvData_up) >= 1){
            $res = $this->update_multi_graph($table,$csvData_up);
            $statusCode = 1;
        } 
    }
    
    function get_normal_value($date,$block_id){
        $date_explode = explode('-',$date);
        $month_day = $date_explode[1].$date_explode[2];
        $this->db->select('max_temp');
        $this->db->from('temp_stn_normals');
        $this->db->join('temp_stn_block', 'temp_stn_normals.stn_id = temp_stn_block.stn_id');
        $this->db->where('DATE_FORMAT(`temp_stn_normals`.`date`, "%m%d") =', $month_day);
        $this->db->where('blk_id',$block_id);
        $res = $this->db->get();
        $tx_normal_res = $res->row_array();
        if(!empty($tx_normal_res)){
            return $tx_normal_res['max_temp'];
        } else {
            return NULL;
        }
    }
    function get_normal_value_min($date,$block_id){
        $date_explode = explode('-',$date);
        $month_day = $date_explode[1].$date_explode[2];
        $this->db->select('min_temp');
        $this->db->from('temp_stn_normals');
        $this->db->join('temp_stn_block', 'temp_stn_normals.stn_id = temp_stn_block.stn_id');
        $this->db->where('DATE_FORMAT(`temp_stn_normals`.`date`, "%m%d") =', $month_day);
        $this->db->where('blk_id',$block_id);
        $res = $this->db->get();
        $tx_normal_res = $res->row_array();
        if(!empty($tx_normal_res)){
            return $tx_normal_res['min_temp'];
        } else {
            return NULL;
        }
    }

    function getUpdatedDataMinTemp($date){    
        $model_name = '';
        $imd_up_time        = $this->latest_imd_update_min_temp($date);
        #$ensemble_up_time   = $this->latest_ensemble_update_min_temp($date);
        #$ecmwf_up_time      = $this->latest_ecmwf_update_min_temp($date);
        $wrf_up_time      = $this->latest_wrf_update_min_temp($date);
        $ensemble_up_time = NULL;
        $ecmwf_up_time = NULL;
        $res_arr = array($imd_up_time,$ensemble_up_time,$ecmwf_up_time,$wrf_up_time);
        arsort($res_arr);
        $param_to_show = key($res_arr); // 0 - IMD, 1 - Ensemble, 2 - Ecmwf, 3 - Wrf
        if($imd_up_time == '' && $ensemble_up_time == '' && $ecmwf_up_time == '' ){
            return array('result_arr'=>array(),'map_data'=>array(),'model_name' =>'N/A');
        } else if($param_to_show == 0) { // Fetch IMD data
            $this->db->select('D.id as district_id,A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('coldwave_alert_dissemination_imd AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'IMD';
        } else if($param_to_show == 1) { // Fetch ENSEMBLE data
            $this->db->select('D.id as district_id,A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('coldwave_alert_dissemination_ensemble AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Ensemble';
        } else if($param_to_show == 2) { // Fetch ECMWF data
            $this->db->select('D.id as district_id,A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('coldwave_alert_dissemination_ecmwf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Ecmwf';
        } else if($param_to_show == 3) { // Fetch Wrf data
            $this->db->select('D.id as district_id,A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('coldwave_alert_dissemination_wrf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Wrf';
        }
        $res = $this->db->get();
        $result_arr = $res->result_array();

        $tx_fcst_array = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);
        }
        $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array,'model_name'=>$model_name);
        return $ret_arr;
    }

    public function latest_imd_update_min_temp($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('coldwave_alert_dissemination_imd');
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

    public function latest_wrf_update_min_temp($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('coldwave_alert_dissemination_wrf');
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

    public function getMapTitle($forect_type = NULL){
        if($forect_type != NULL){
            $this->db->select('va_forecast_type,titile');
            $this->db->from('va_map_heading_details');
            $this->db->where('va_forecast_type',$forect_type);
            $res = $this->db->get();
            $ret_ = $res->row_array();
            if(!empty($ret_)){
                return $ret_['titile'];
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
    }

     function getUpdatedDataRelHum($date){  
     $model_name = '';  
        $imd_up_time            = $this->latest_imd_update_relhum($date);
        $wrf_up_time            = $this->latest_wrf_update_relhum($date);
        $weighted_up_time       = $this->latest_weighted_update_relhum($date);
        $res_arr = array($imd_up_time,$wrf_up_time,$weighted_up_time);
        //pr($res_arr);
        arsort($res_arr);
        //pr($res_arr);
        $param_to_show = key($res_arr); // 0 - IMD, 1 - WRF, 2 - Weighted
        //pr($param_to_show);
        if($imd_up_time == '' && $wrf_up_time == '' && $weighted_up_time == ''){
            return array('result_arr'=>array(),'map_data'=>array(),'model_name' =>'N/A');
        } else if($param_to_show == 0) { // Fetch IMD data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic) as tx_dynamic,B.block_name');
            $this->db->from('humidity_alert_dissemination_imd AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Imd';
        } else if($param_to_show == 1) { // Fetch ECMWF data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic)  as tx_dynamic,B.block_name');
            $this->db->from('humidity_alert_dissemination_wrf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Ecmwf';
        } else if($param_to_show == 2) { // Fetch Weighted data
            $this->db->select('D.id as district_id,A.block_id,round(A.tx_dynamic)  as tx_dynamic,B.block_name');
            $this->db->from('weighted_matrix_humidity AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            $model_name = 'Weighted';
        }
        $res = $this->db->get();
        //echo $this->db->last_query();
        $result_arr = $res->result_array();
        
        $tx_fcst_array = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx);
        }
        $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array,'model_name'=>$model_name);
        return $ret_arr;
    }

    public function latest_imd_update_relhum($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('humidity_alert_dissemination_imd');
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

    public function latest_wrf_update_relhum($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('humidity_alert_dissemination_wrf');
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

    public function latest_weighted_update_relhum($date){
        $this->db->select('block_id, date, max(updated_at) as updated_at');
        $this->db->from('weighted_matrix_humidity');
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

    function getUpdatedData_bulletin($date,$filter_level = NULL){    
        $imd_up_time        = $this->latest_imd_update($date);
        $ensemble_up_time   = $this->latest_ensemble_update($date);
        $ecmwf_up_time      = $this->latest_ecmwf_update($date);
        $res_arr = array($imd_up_time,$ensemble_up_time,$ecmwf_up_time);
        arsort($res_arr);
        $param_to_show = key($res_arr); // 0 - IMD, 1 - Ensemble, 2 - Ecmwf
        if($imd_up_time == '' && $ensemble_up_time == '' && $ecmwf_up_time == '' ){
            return array('result_arr'=>array(),'map_data'=>array());
        } else if($param_to_show == 0) { // Fetch IMD data
            $this->db->select('A.date,D.id as district_id,A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_imd AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            if($filter_level != 4){
                $this->db->where('A.warning_level_id',$filter_level);    
            }
            $this->db->order_by("A.date", "asc");
            $model_name = 'Imd';
        } else if($param_to_show == 1) { // Fetch ENSEMBLE data
            $this->db->select('A.date,D.id as district_id,A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_ensemble AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            if($filter_level != 4){
                $this->db->where('A.warning_level_id',$filter_level);    
            }
            $this->db->order_by("A.date", "asc");
            $model_name = 'Ensemble';
        } else if($param_to_show == 2) { // Fetch ECMWF data
            $this->db->select('A.date,D.id as district_id,A.block_id,A.tx_dynamic,A.warning_level_id,B.block_name');
            $this->db->from('heatwave_alert_dissemination_ecmwf AS A');
            $this->db->join('blocks AS B', 'A.block_id = B.id');
            $this->db->join('districts AS D', 'B.district_id = D.id');
            $this->db->where('A.date', $date);
            if($filter_level != 4){
                $this->db->where('A.warning_level_id',$filter_level);    
            }
            $this->db->order_by("A.date", "asc");
            $model_name = 'Ecmwf';
        }
        $res = $this->db->get();
        $result_arr = $res->result_array();
        $date_data = array();
        $tx_fcst_array = $warning_level = array();
        $district_found = $block_found = array();
        $today_m_d = date('m-d');
        foreach ($result_arr as $tx_fcst) {
            $date_data[$tx_fcst['date']][] = $tx_fcst;
            if (!in_array($tx_fcst['district_id'], $district_found)) {
                $district_found[] = $tx_fcst['district_id'];
            }
            if (!in_array($tx_fcst['block_id'], $block_found)) {
                $block_found[] = $tx_fcst['block_id'];
            }
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);
            if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
                $warning = $tx_fcst['warning_level_id'];
            } else {
                $warning = 1;
            }
            $warning_level[$block_id] = $warning;
        }
        //pr($district_found,1);
        $ret_arr = array(   'result_arr'=>$result_arr,
                            'map_data'=>$tx_fcst_array,
                            'date_wise_data'=>$date_data,
                            'district_found'=>$district_found,
                            'block_found'=>$block_found,
                            'warning_level_wise'=>$warning_level
                        );
        //pr($ret_arr,1);
        return $ret_arr;
    }


    public function check_legend_name_rainfall($name,$id = null){
        $this->db->select('count(id) AS tot');
        $this->db->from('rainfall_forecast_legends');
        $this->db->where('legend_name',$name);
        if($id != null){
            $this->db->where('id !=',$id);
        } 
        $res = $this->db->get();
        $result_arr = $res->row_array();
        return $result_arr['tot'];
    }

    public function get_max_temp_forecast_legend(){
        $this->db->select('*');
        $this->db->from('max_temp_forecast_legends');
        $this->db->where('id>',0);
        $this->db->order_by('legend_order','ASC');
        $res = $this->db->get();
        $result_arr = $res->result_array();
        return $result_arr;
    }
    public function check_legend_name_max_temp($name,$id = null){
        $this->db->select('count(id) AS tot');
        $this->db->from('max_temp_forecast_legends');
        $this->db->where('legend_name',$name);
        if($id != null){
            $this->db->where('id !=',$id);
        } 
        $res = $this->db->get();
        $result_arr = $res->row_array();
        return $result_arr['tot'];
    }

    public function get_min_temp_forecast_legend(){
        $this->db->select('*');
        $this->db->from('min_temp_forecast_legends');
        $this->db->where('id>',0);
        $this->db->order_by('legend_order','ASC');
        $res = $this->db->get();
        $result_arr = $res->result_array();
        return $result_arr;
    }
    public function check_legend_name_min_temp($name,$id = null){
        $this->db->select('count(id) AS tot');
        $this->db->from('min_temp_forecast_legends');
        $this->db->where('legend_name',$name);
        if($id != null){
            $this->db->where('id !=',$id);
        } 
        $res = $this->db->get();
        $result_arr = $res->row_array();
        return $result_arr['tot'];
    }

    public function get_relative_humidity_forecast_legend(){
        $this->db->select('*');
        $this->db->from('relative_humidity_legends');
        $this->db->where('id>',0);
        $this->db->order_by('legend_order','ASC');
        $res = $this->db->get();
        $result_arr = $res->result_array();
        return $result_arr;
    }

    public function check_legend_name_relative_humidity($name,$id = null){
        $this->db->select('count(id) AS tot');
        $this->db->from('relative_humidity_legends');
        $this->db->where('legend_name',$name);
        if($id != null){
            $this->db->where('id !=',$id);
        } 
        $res = $this->db->get();
        $result_arr = $res->row_array();
        return $result_arr['tot'];
    }

    public function getMapText($forect_type = NULL){
        if($forect_type != NULL){
            $this->db->select('va_forecast_type,text');
            $this->db->from('va_map_text_details');
            $this->db->where('va_forecast_type',$forect_type);
            $res = $this->db->get();
            $ret_ = $res->row_array();
            if(!empty($ret_)){
                return $ret_['text'];
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
    }

    function getWindSpeedData($data_type, $date){
        if( $data_type == 'imd-gfs'){
            $this->db->select('block_id,wind_speed');
            $this->db->from('block_imd_gfs_forecast');
            $this->db->where('block_imd_gfs_forecast.fcst_date', $date);
        } else if( $data_type == 'ensemble'){
            $this->db->select('block_id,wind_speed');
            $this->db->from('block_ensemble_forecast');
            $this->db->where('block_ensemble_forecast.fcst_date', $date);
        } else if( $data_type == 'ecmwf'){
            $this->db->select('block_id,wind_speed');
            $this->db->from('block_ecmwf_forecast');
            $this->db->where('block_ecmwf_forecast.fcst_date', $date);
        } else if( $data_type == 'wrf'){
            $this->db->select('block_id,wind_speed');
            $this->db->from('block_wrf_forecast');
            $this->db->where('block_wrf_forecast.fcst_date', $date);
        } else {
            return NULL;
        }
        $res = $this->db->get();
        $res_ = $res->result();
        $wind_speed_arr = array();
        foreach ($res_ as $wind) {
            $block_id = $wind->block_id;
            $wind_speed = $wind->wind_speed;
            $wind_speed_arr[$block_id] = $wind_speed;
        }
        return $wind_speed_arr;
    }

    function getTxNormalData($date){
        $date_explode = explode('-',$date);
        $month_day = $date_explode[1].'-'.$date_explode[2];
        $this->db->select('blk_id, min_temp');
        $this->db->from('temp_stn_normals');
        $this->db->join('temp_stn_block', 'temp_stn_normals.stn_id = temp_stn_block.stn_id');
        $this->db->where("TO_CHAR(temp_stn_normals.date, 'MM-DD') =", $month_day);
        $res = $this->db->get();
        $tx_normal_res = $res->result();
        $tx_normal_array = array();
        foreach ($tx_normal_res as $tx_normal) {
            $block_id = $tx_normal->blk_id;
            $tx = $tx_normal->min_temp;
            $tx_normal_array[$block_id] = round($tx,1);
        }
        return $tx_normal_array;
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
    
    public function getUpdatedData_new($date,$filter_level = NULL,$dist_id = NULL){
        $today_m_d = date('m-d');
        $model_name = $max_temp_update =  '';
        #$this->db->select("D.id as district_id,A.block_id,round(A.max_temp_fcst) as tx_dynamic,A.max_temp_warning_level as warning_level,B.block_name AS block_name,A.max_temp_model_name,A.max_temp_update");
        $this->db->select("D.id as district_id,A.block_id,round(A.max_temp_fcst) as tx_dynamic,
            A.max_temp_warning_level AS warning_level,
            B.block_name AS block_name,A.max_temp_model_name,A.max_temp_update");
        $this->db->from('value_added_forecast_updated AS A');
        $this->db->join('blocks AS B', 'A.block_id = B.id');
        $this->db->join('districts_s AS D', 'B.district_id = D.id');
        if($dist_id !== NULL){
            $this->db->where('D.id', $dist_id);
        }
        $this->db->where('A.date', $date);
        $this->db->where('A.max_temp_update IS NOT NULL');
        if($filter_level != 4){
            $this->db->where('A.max_temp_warning_level',$filter_level);    
        }
        $res = $this->db->get();
        $result_arr = $res->result_array();
        //echo $this->db->last_query();
        $district_found = $block_found = array();
        $tx_fcst_array = array(); $warning_level = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);
            $model_name = $tx_fcst['max_temp_model_name'];
            $max_temp_update = $tx_fcst['max_temp_update'];
            if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
            $warning_level[$block_id] = $tx_fcst['warning_level'];
            } else {
                $warning_level[$block_id] = 1;
            }
        }
        $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array,'model_name'=>$model_name,'update_time'=>$max_temp_update,'warning_level'=>$warning_level);
        return $ret_arr;
    }

    function get_district_dtls (){
        $this->db->select('id,district_name,total_blocks');
        $this->db->from('districts');
        $result = $this->db->get();
        $res = $result->result_array();
        return $res;
    }

    public function getUpdatedData_new_dist($date,$filter_level = NULL,$dist_id = NULL){
        $district_data = $this->get_district_dtls();
        $today_m_d = date('m-d');
        $district_details = array();
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
            $this->db->select('alert_tb.block_id,round(alert_tb.max_temp_fcst) as tx_dynamic,alert_tb.updated_at,
                                alert_tb.max_temp_warning_level AS warning_level,alert_tb.max_temp_model_name,alert_tb.max_temp_update');
            $this->db->from('value_added_forecast_updated as alert_tb');
            $this->db->join('blocks as B', 'B.id = alert_tb.block_id');
            if($dist_id !== NULL){
                $this->db->join('districts as D', 'D.id = B.district_id');
                $this->db->where('D.id', $dist_id);
            }
            $this->db->where_in('B.id', $block_ids,FALSE);
            $this->db->where('alert_tb.date', $date);
            $res = $this->db->get();
            $ret_ = $res->result_array();
            if(!empty($ret_)){
                foreach($ret_ as $k => $v){
                    $total += $v['tx_dynamic'];
                }
                $district_wise[$val['id']] = round($total / $val['total_blocks']);
                if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
                    $warning_level[$val['id']] = $v['warning_level'];
                } else {
                    $warning_level[$val['id']] = 1;
                }
                $model_name = $v['max_temp_model_name'];
                $max_temp_update = $v['max_temp_update'];
                $temp = array('dist_id'=>$val['id'],'dist_name'=>$val['district_name'],'tx_dynamic'=>$district_wise[$val['id']], 'warning_level'=>$warning_level[$val['id']]);
                array_push($district_details,$temp);
                unset($temp);
            } else {
                $district_wise[$val['id']] = '';
            }
        }
        $ret_arr = array('result_arr'=>$district_details,'map_data'=>$district_wise);
        return $ret_arr;
    }

    public function getUpdatedDataMinTemp_NEW($date,$filter_level = NULL,$dist_id = NULL){
        $model_name = $min_temp_update = '';
        $this->db->select("D.id as district_id,A.block_id,round(A.min_temp_fcst) as tx_dynamic,A.min_temp_warning_level as warning_level,B.block_name AS block_name,A.min_temp_model_name,A.min_temp_update");
        $this->db->from('value_added_forecast_updated AS A');
        $this->db->join('blocks AS B', 'A.block_id = B.id');
        $this->db->join('districts_s AS D', 'B.district_id = D.id');
        
        $this->db->where('A.date', $date);
        $this->db->where('A.min_temp_update IS NOT NULL');
        if($filter_level != 4){
            $this->db->where('A.min_temp_warning_level',$filter_level);    
        }
        if($dist_id !== NULL){
            $this->db->where('D.id', $dist_id);
        }
        $res = $this->db->get();
        $result_arr = $res->result_array();
        $district_found = $block_found = array();
        $tx_fcst_array = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);
            $model_name = $tx_fcst['min_temp_model_name'];
            $min_temp_update = $tx_fcst['min_temp_update'];
        }
        $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array,'model_name'=>$model_name,'update_time'=>$min_temp_update);
        return $ret_arr;
    }

    public function getUpdatedDataMinTemp_NEW_dist($date,$filter_level = NULL,$dist_id = NULL){
        $district_data = $this->get_district_dtls();
        $today_m_d = date('m-d');
        $district_details = array();
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
            $this->db->select('round(alert_tb.min_temp_fcst) as tx_dynamic,alert_tb.min_temp_warning_level AS warning_level');
            $this->db->from('value_added_forecast_updated as alert_tb');
            $this->db->join('blocks as B', 'B.id = alert_tb.block_id');
            if($dist_id !== NULL){
                $this->db->join('districts as D', 'D.id = B.district_id');
                $this->db->where('D.id', $dist_id);
            }
            $this->db->where_in('B.id', $block_ids,FALSE);
            $this->db->where('alert_tb.date', $date);
            
            $res = $this->db->get();
            $ret_ = $res->result_array();
            if(!empty($ret_)){
                foreach($ret_ as $k => $v){
                    $total += $v['tx_dynamic'];
                }
                $district_wise[$val['id']] = round($total / $val['total_blocks']);
                $warning_level[$val['id']] = $v['warning_level'];
                $temp = array('dist_id'=>$val['id'],'dist_name'=>$val['district_name'],'tx_dynamic'=>$district_wise[$val['id']], 'warning_level'=>$warning_level[$val['id']]);
                array_push($district_details,$temp);
                unset($temp);
            } else {
                $district_wise[$val['id']] = '';
            }
        }
        $ret_arr = array('result_arr'=>$district_details,'map_data'=>$district_wise);
        return $ret_arr;
    }

    public function getModelName($date){
        $this->db->select('rainfall_model_name');
        $this->db->where('date',$date);
        $res = $this->db->get('value_added_forecast_updated');
        return $res->result_array();
    }

    public function getcountOfModel($date,$type){
        $this->db->select('*');
        $this->db->where('date',$date);
        $res = $this->db->get('rainfall_alert_dissemination_'.$type.'');
        return $res->result_array();
    }

    public function getUpdatedDataRainfall_NEW($date,$filter_level = NULL,$dist_id = NULL){
        $model_name = $rainfall_update = '';
        $this->db->select("D.id as district_id,A.block_id,round(A.rainfall_fcst) as tx_dynamic,A.rainfall_warning_level as warning_level,B.block_name AS block_name,A.rainfall_model_name,A.rainfall_update");
        $this->db->from('value_added_forecast_updated AS A');
        $this->db->join('blocks AS B', 'A.block_id = B.id');
        $this->db->join('districts_s AS D', 'B.district_id = D.id');
        if($dist_id !== NULL){
            $this->db->where('D.id', $dist_id);
        }
        $this->db->where('A.date', $date);
        $this->db->where('A.rainfall_update IS NOT NULL');
        if($filter_level != 4){
            $this->db->where('A.min_temp_warning_level',$filter_level);    
        }
        $res = $this->db->get();
        $result_arr = $res->result_array();
        $district_found = $block_found = array();
        $tx_fcst_array = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);
            $model_name = $tx_fcst['rainfall_model_name'];
            $rainfall_update = $tx_fcst['rainfall_update'];
        }
        $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array,'model_name'=>$model_name,'update_time'=>$rainfall_update);
        return $ret_arr;
    }
    // public function getUpdatedDataRainfall_NEW($date,$filter_level = NULL,$final_model_name = NULL,$dist_id = NULL){
    //     $model_name = $rainfall_update ='';
    //     $this->db->select("D.id as district_id,A.block_id,round(A.rainfall_fcst,1) as tx_dynamic,B.block_name AS block_name,A.rainfall_model_name,A.rainfall_update,E.warning_level_id as warning_level_legend, E.rainfall_dynamic as backup_rainfall_data");
    //     $this->db->from('value_added_forecast_updated AS A');
    //     if($final_model_name == 'imd - gfs'){
    //         $this->db->join('rainfall_alert_dissemination_imd AS E','E.block_id=A.block_id');
    //     }else if($final_model_name == 'ecmwf'){
    //         $this->db->join('rainfall_alert_dissemination_ecmwf AS E','E.block_id=A.block_id');
    //     }else if($final_model_name == 'ensemble'){
    //         $this->db->join('rainfall_alert_dissemination_ensemble AS E','E.block_id=A.block_id');
    //     }
    //     $this->db->join('blocks AS B', 'A.block_id = B.id');
    //     $this->db->join('districts_s AS D', 'B.district_id = D.id');
    //     if($dist_id !== NULL){
    //         $this->db->where('D.id', $dist_id);
    //     }
    //     $this->db->where('A.date', $date);
    //     $this->db->where('E.date', $date);
    //     if($filter_level != 4){
    //         $this->db->where('A.rainfall_warning_level',$filter_level);    
    //     }
    //     $res = $this->db->get();
    //     $result_arr = $res->result_array();
    //     $district_found = $block_found = array();
    //     $tx_fcst_array = array();
    //     foreach ($result_arr as $tx_fcst) {
    //         $block_id = $tx_fcst['block_id'];
    //         $tx = $tx_fcst['tx_dynamic'];
    //         $tx_fcst_array[$block_id] = round($tx,1);
    //         $model_name = $tx_fcst['rainfall_model_name'];
    //         $rainfall_update = $tx_fcst['rainfall_update'];
    //     }
    //     // $res = $this->db->get();
    //     // $result_arr = $res->result_array();
    //     $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array,'model_name'=>$model_name,'update_time'=>$rainfall_update);
    //     return $ret_arr;
    // }
    public function getUpdatedDataRelHum_NEW($date,$dist_id = NULL){
        $model_name =  $humidity_update = '';
        $this->db->select("D.id as district_id,A.block_id,round(A.humidity_fcst) as tx_dynamic,LOWER(B.block_name) AS block_name,A.humidity_model_name,A.humidity_update");
        $this->db->from('value_added_forecast_updated AS A');
        $this->db->join('blocks AS B', 'A.block_id = B.id');
        $this->db->join('districts_s AS D', 'B.district_id = D.id');
        if($dist_id !== NULL){
            $this->db->where('D.id', $dist_id);
        }
        $this->db->where('A.date', $date);
        $this->db->where('A.humidity_update IS NOT NULL');
        $res = $this->db->get();
        $result_arr = $res->result_array();
        $district_found = $block_found = array();
        $tx_fcst_array = array();
        foreach ($result_arr as $tx_fcst) {
            $block_id = $tx_fcst['block_id'];
            $tx = $tx_fcst['tx_dynamic'];
            $tx_fcst_array[$block_id] = round($tx,1);
            $model_name = $tx_fcst['humidity_model_name'];
            $humidity_update = $tx_fcst['humidity_update'];
        }
        $ret_arr = array('result_arr'=>$result_arr,'map_data'=>$tx_fcst_array,'model_name'=>$model_name,'update_time'=>$humidity_update);
        return $ret_arr;
    }

    public function get_value_addition_information_max_temp($date1,$date2,$date3,$date4,$date5,$filter_level){

        $this->db->select('V.date,V.block_id,D.id as district_id,V.max_temp_fcst AS tx_dynamic,V.max_temp_warning_level as warning_level_id');
        $this->db->from('value_added_forecast_updated AS V');
        $this->db->join('block_s AS B', 'V.block_id = B.id');
        $this->db->join('districts_s AS D', 'B.dist_id = D.id');
        if($filter_level != 4){
            $this->db->where('V.max_temp_warning_level',$filter_level);    
        }
        $this->db->where_in('V.date',[$date1,$date2,$date3,$date4,$date5]);
        $res = $this->db->get();
        $result_arr = $res->result_array();
        echo $this->db->last_query();
        pr($result_arr);

    }

    public function get_blocks_from_region($region_id){
        $this->db->select('B.id');
        $this->db->from('districts_s AS D');
        $this->db->join('block_s AS B', 'D.id = B.dist_id');
        $this->db->where('D.val_region', $region_id);
        $res = $this->db->get();
        $result_arr = $res->result_array();
        return $result_arr;
    }

    public function getModelDtls($id= NULL){
        $this->db->select("*");
        $this->db->from('model_list');
        if($id != '') {
            $this->db->where("id",$id);
        }
        $this->db->where("id >",0);
        $res = $this->db->get();
        $result_arr = $res->result_array();
        return $result_arr;
    }

    public function getParamDtls($model_id){
        $this->db->select("*");
        $this->db->from('parameter_list');
        $this->db->where("model_id",$model_id);
        $res = $this->db->get();
        $result_arr = $res->result_array();
        return $result_arr;
    }
}
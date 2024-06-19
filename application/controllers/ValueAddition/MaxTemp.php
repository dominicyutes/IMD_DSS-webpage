<?php
/**
 * Description of Max Temp Value Addition
 * @author Keerati
 * @author Saroj Choudhury
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class MaxTemp extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $this->_check_session();
        $this->load->helper(array('form', 'url'));
        $this->load->model('ValueAddition/VaModel');  
        ini_set('max_input_vars', 3000);
        date_default_timezone_set('Asia/Kolkata');  //time in India
    }
    function _check_session() {
        if (!$this->session->has_userdata('name') || !$this->session->is_loggedin) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Please Login to continue!!</strong><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">X</a></div>');
            redirect('login');
        }
    }
    
    function mapType($map_type, $district_id){
        $lat_lng = "20.1992, 84.4510";
        $map_zoom = 7;
        $selected_district_id = null;
        if($map_type){
            if( $map_type == 'block_wise'){
                $geojson_file = base_url()."DATA/INDIA_DISTRICT.json";
            }
            else if( $map_type == 'block_from_district' && ($district_id == null) ){
                $geojson_file = base_url()."DATA/Odisha_Dist_Simplified.geojson";
            }
            else if( $map_type == 'block_from_district' && $district_id != null ){
                $selected_district_id = $district_id;
                $geojson_file = base_url()."DATA/Odisha_block/Odisha_block_id".$district_id.".geojson";
            }
            $active_map_type = $map_type;
        } else {
            $geojson_file = base_url()."DATA/INDIA_DISTRICT.json";
            $active_map_type = 'block_wise';
        }
        return array('geojson_file' => $geojson_file, 
                     'lat_lng'=> $lat_lng, 
                     'map_zoom'=> $map_zoom, 
                     'selected_district_id'=> $selected_district_id, 
                     'active_map_type' => $active_map_type);
    }
    
    function saveAlertData(){
        //pr($_POST,1);
        $set_data_list = $this->input->post('set_alert_list'); 
        $fcst_date = $this->input->post('fcst_date');
        $fcst_data_type = $this->input->post('fcst_data_type');
        $curr_date = $this->getDate();
        $curr_datetime = $this->getCurrentDatatime();
        $curr_timestamp = $curr_date;
        $upd_arr = array();
        $up_va_arr = array();
        for($i = 0; $i < count($set_data_list); $i++){
            $loc_id =  $set_data_list[$i]['selected_loc_id'];
            $check_exist = $this->VaModel->checkExistAlertData($fcst_data_type, $loc_id, $fcst_date, $curr_timestamp);
            if($check_exist != false){
                $upd_set_data = array(
                    'id' => $check_exist,
                    'district_id' => $set_data_list[$i]['selected_loc_id'],
                    'tx_fcst' => $set_data_list[$i]['selected_fcst'],      
                    'tx_dynamic' => $set_data_list[$i]['selected_tx_fcst_dynamic'], 
                    'warning_level_id' => $set_data_list[$i]['selected_alert'],
                    //'user_id' => $this->session->userdata('user_id'),
                    'timestamp' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                );
                //pr($upd_set_data,1);
                array_push($upd_arr, $upd_set_data);
                // $upd_va_data = array(
                //     'date' => date('Y-m-d',strtotime($fcst_date)),
                //     'block_id' => $set_data_list[$i]['selected_loc_id'],
                //     'max_temp_fcst' => $set_data_list[$i]['selected_tx_fcst_dynamic'],
                //     'max_temp_warning_level' => $set_data_list[$i]['selected_alert'],
                //     'max_temp_user_id' => $this->session->userdata('user_id'),
                //     'max_temp_update' => date('Y-m-d H:i:s'),
                //     'updated_at' => date('Y-m-d H:i:s'),
                //     'max_temp_model_name' => $fcst_data_type
                // );
                
                //array_push($up_va_arr, $upd_va_data);
            }
        }
        if( !empty($upd_arr) ){
            //pr($upd_arr,1);
            $this->VaModel->updateHeatwaveAlert($fcst_data_type, $upd_arr);
            // if(!empty($up_va_arr)){
            //     $this->VaModel->updateHeatwaveAlert_VA_UP($up_va_arr,$fcst_data_type,$fcst_date);
            // }
        }
        $history_list = $this->VaModel->getTxHistoryData($fcst_data_type, $fcst_date, $curr_timestamp);
        echo json_encode($history_list);
    }
    
    function get_updated_info(){
        $fcst_date = $this->input->post('fcst_date');
        $fcst_data_type = $this->input->post('fcst_data_type');
        $latest_update_info_arr = $this->VaModel->get_alert_latest_info($fcst_data_type, $fcst_date);
        $latest_update_info_txt = "Latest Updated: ".$latest_update_info_arr['max_datetime'].' by '.(($latest_update_info_arr['latest_user']==null)?'System':$latest_update_info_arr['latest_user']);
        echo json_encode($latest_update_info_txt);
    }
    
    function index(){
        $data['role'] = $this->session->userdata('role');
        $map_type_selected = $this->uri->segment(4);
        $segs = $this->uri->segment_array();
        
        $today_m_d = date('m-d');
        $data['today_m_d'] = $today_m_d;
        
        if(empty($_POST)){
            $model_choosed = 1;
            $param_choosed = 1;
        } else {
            $model_choosed = $this->input->post('models');
            $param_choosed = $this->input->post('parameter');
        }
        $data['model_choosed'] = $model_choosed;
        $data['param_choosed'] = $param_choosed;

        $model_list = $this->VaModel->getModelDtls();
        $param_list = $this->VaModel->getParamDtls($model_choosed);
        $data['param_list'] = $param_list;
        $data['model_list'] = $model_list;

        $curr_date = $this->getDate();
        $fcst_date = $curr_date;
        $data['curr_date'] = $fcst_date;
        if($model_choosed == 1){
            $fcst_data_type = "imd";
        } else if($model_choosed == 2){
            $fcst_data_type = "ecmwf";
        } else if($model_choosed == 3){
            $fcst_data_type = "ensemble";
        }

        if($this->uri->segment(6) != null && $this->uri->segment(6) != ''){
            $param_type = $this->uri->segment(6);
        }
        else{
            $param_type = "temperature";
        }

        if($map_type_selected != ''){
            $chk_ary = array('block_wise','block_from_district');
            if(!in_array($map_type_selected, $chk_ary)){
                redirect('Home');
            }
        }
        if($fcst_data_type != ''){
            $chk_ary_dt = array('imd','ensemble','ecmwf','wrf','weight');
            if(!in_array($fcst_data_type, $chk_ary_dt)){
                redirect('Home');
            }
        }
        
        if($param_type != ''){
            $chk_ary_dt = array('temperature');
            if(!in_array($param_type, $chk_ary_dt)){
                redirect('Home');
            }
        }

        $district_loc_id = $this->uri->segment(8);
        $curr_date = $this->getDate();
        $curr_timestamp = $curr_date;
        if($this->input->get('submit_day')){
            $day = $this->input->get('submit_day');
            preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $day, $regs);
            if(!empty($regs)){
                $day_int = intval($regs[1]);
            } else {
                $day_int = 1;
            }
            $fcst_date = $this->day_to_date($day_int);
        }
        else{
            $day_int = 1;
            $fcst_date = $curr_date;
        }
        //echo $fcst_date; 
        $data['active_param_type'] = $param_type;
        // Contour File details
        $contour_date = $this->getDate();
        $num_padded = sprintf("%02d", $day_int);
        //print_r($fcst_data_type);
        //$latest_update_info_arr = $this->VaModel->get_alert_latest_info($fcst_data_type, $fcst_date);
        //$latest_update_info_txt = "Latest updated: ".$latest_update_info_arr['max_datetime'].' by '.(($latest_update_info_arr['latest_user']==null)?'system':$latest_update_info_arr['latest_user']);
        $get_map_prop = $this->mapType($map_type_selected, $district_loc_id);
        $data['active_map_type'] = $get_map_prop['active_map_type'];
        $data['fcst_data_type'] = $fcst_data_type;
        $data['active_day'] = $day_int;
        $data['lat_lng'] = $get_map_prop['lat_lng'];
        $data['map_zoom'] = $get_map_prop['map_zoom'];
        $data['geojson_file'] = $get_map_prop['geojson_file'];
        $data['block_list'] = $this->VaModel->getBlockName();
        $data['district_list'] = $this->VaModel->getDistrictList();
        $data['updated_data'] = $this->VaModel->getUpdatedBlocks($fcst_data_type,$fcst_date);
        $data['curr_date'] = $fcst_date;
        $data['history_list'] = $this->VaModel->getTxHistoryData($fcst_data_type, $fcst_date, $curr_timestamp);
        $data['fcst_list'] = $this->VaModel->getTxFcstData($fcst_data_type, $fcst_date);
        $data['normal_list'] = $this->VaModel->getTxNormalData($fcst_date);
        
        $data['region_info'] = $this->VaModel->getHillyPlainBlockWise();
        
        $legend_data  = $this->VaModel->get_max_temp_forecast_legend();
        $data['legend_data'] = $legend_data;
        #pr($data['history_list']);
        $this->load->view('value_addition/max_temperature_addition', $data);        
    }
    
    function Block_from_district(){
        $map_type_selected = 'block_from_district';
        $district_loc_id = $this->input->post('district_loc_id');
        $get_map_prop = $this->mapType($map_type_selected, $district_loc_id);
        echo json_encode($get_map_prop);
    }

    public function weighted_forecast(){
        $data['role'] = $this->session->userdata('role');
        $map_type_selected = $this->uri->segment(3);
        $curr_date = $this->getDate();
        $curr_timestamp = $curr_date;
        if($this->input->get('submit_day')){
            $day = $this->input->get('submit_day');
            preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $day, $regs);
            if(!empty($regs)){
                $day_int = intval($regs[1]);
            } else {
                $day_int = 1;
            }
            $fcst_date = $this->day_to_date($day_int);
        }
        else{
            $day_int = 1;
            $fcst_date = $curr_date;
        }
        //$latest_update_info_arr = $this->VaModel->get_alert_latest_info('imd', $fcst_date);
        //$latest_update_info_txt = "Latest updated: ".$latest_update_info_arr['max_datetime'].' by '.(($latest_update_info_arr['latest_user']==null)?'system':$latest_update_info_arr['latest_user']);
        $get_map_prop = $this->mapType('block_wise',null);
        $data['active_map_type'] = 'block_wise';
        $data['fcst_data_type'] = 'imd';
        $data['active_param_type'] = '';
        $data['active_day'] = $day_int;
        $data['curr_date'] = $fcst_date;
        $data['active_day'] = $day_int;
        $data['lat_lng'] = $get_map_prop['lat_lng'];
        $data['map_zoom'] = $get_map_prop['map_zoom'];
        $data['geojson_file'] = $get_map_prop['geojson_file'];
        $data['block_list'] = $this->VaModel->getBlockName();
        $data['block_dtls'] = $this->VaModel->getBlockDetails();
        $data['updated_data'] = $this->VaModel->getUpdatedBlocks('imd',$fcst_date);
        $data['curr_date'] = $fcst_date;
        $data['history_list'] = $this->VaModel->getTxHistoryData('imd', $fcst_date, $curr_timestamp);
        $data['fcst_list'] = $this->VaModel->getTxFcstData('imd', $fcst_date);
        $data['normal_list'] = $this->VaModel->getTxNormalData($fcst_date);
        //$data['latest_update_info'] = $latest_update_info_txt;
        $data['imd_data'] = $this->VaModel->getImdLatestData($fcst_date);
        $data['ecmwf_data'] = $this->VaModel->getEcmwfLatestData($fcst_date);
        
        $this->load->view('value_addition/weighted_max_temperature_addition', $data);
    }

    public function block_from_region (){
        $region = $this->input->post('region_id');
        $info = $this->Va_forecst_model->get_blocks_from_region($region);
        echo json_encode($info);
    }

    function getDate(){
        $curr_time = strtotime(date('H:i'));
        #echo date($curr_time);
        if($curr_time < strtotime(date('00:30')) ){
            $date = date("Y-m-d", strtotime("-1 days"));
        }
        else{
            $date = date("Y-m-d");
        }
        $date = '2024-04-27';
        return $date;
    }
    
    function getCurrentDatatime(){
        $curr_datetime = date('Y-m-d H:i:s');
        return $curr_datetime;
    }
    
    public function day_to_date($day){
        $date_before_modify = $this->getDate();
        if($day == 1){
            $date = date("Y-m-d", strtotime("$date_before_modify"));
        }
        else if($day===2){
            $date = date("Y-m-d", strtotime("$date_before_modify +1 days"));
        }
        else if($day===3){
            $date = date("Y-m-d", strtotime("$date_before_modify +2 days"));
        }
        else if($day===4){
            $date = date("Y-m-d", strtotime("$date_before_modify +3 days"));
        }
        else if($day===5){
            $date = date("Y-m-d", strtotime("$date_before_modify +4 days"));
        }
        return $date;
    } 

    public function ajax_param_list(){
        if(!empty($_POST)){
            $model_id = $this->input->post('model_id',true);
            $info = getOptionParameter("model_id ='".$model_id."'");
            $html = "<option value='' selected='selected'>Select An Option</option>";
            $html .= $info;
            echo $html; exit;
        } else {
            redirect('Home');
        }
    }
}
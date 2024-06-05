<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_Retrieval_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->_check_session();
    }

    private function _check_session() {
        if (!$this->session->has_userdata('name')) {
            redirect('login');
        }
    }

    function index(){
        $data['role'] = $this->session->userdata('role');
        $map_type_selected = $this->uri->segment(4);
        $segs = $this->uri->segment_array();
        /*pr($segs);
        pr($map_type_selected);
        pr($_REQUEST,1);*/
        $today_m_d = date('m-d');
        $data['today_m_d'] = $today_m_d;
        if($this->uri->segment(5) != null && $this->uri->segment(5) != ''){
            $fcst_data_type = $this->uri->segment(5);
        }
        else{
            $fcst_data_type = "imd";
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
        
        $data['active_param_type'] = $param_type;
        // Contour File details
        $contour_date = $this->getDate();
        $num_padded = sprintf("%02d", $day_int);
        $contour_geojson = "DATA/forecast_data/imd/tmax-cont/".$contour_date."/temp_cont.max.at_".$contour_date."_UTC00.d_".$num_padded.".geojson";
        $contour_legend = "DATA/forecast_data/imd/tmax-cont/".$contour_date."/temp_cont.max.avg.ad_".$contour_date."_UTC00.d_".$num_padded.".svg";
        $data['contour_geojson'] = $contour_geojson;
        $data['contour_legend'] = $contour_legend;

        $latest_update_info_arr = $this->Heatwave_graphical_model->get_alert_latest_info($fcst_data_type, $fcst_date);
        $latest_update_info_txt = "Latest updated: ".$latest_update_info_arr['max_datetime'].' by '.(($latest_update_info_arr['latest_user']==null)?'system':$latest_update_info_arr['latest_user']);
        $get_map_prop = $this->mapType($map_type_selected, $district_loc_id);
        $data['active_map_type'] = $get_map_prop['active_map_type'];
        $data['fcst_data_type'] = $fcst_data_type;
        $data['active_day'] = $day_int;
        $data['lat_lng'] = $get_map_prop['lat_lng'];
        $data['map_zoom'] = $get_map_prop['map_zoom'];
        $data['geojson_file'] = $get_map_prop['geojson_file'];
        $data['block_list'] = $this->Heatwave_graphical_model->getBlockName();
        $data['updated_data'] = $this->Heatwave_graphical_model->getUpdatedBlocks($fcst_data_type,$fcst_date);
        $data['curr_date'] = $fcst_date;
        $data['history_list'] = $this->Heatwave_graphical_model->getTxHistoryData($fcst_data_type, $fcst_date, $curr_timestamp);
        $data['fcst_list'] = $this->Heatwave_graphical_model->getTxFcstData($fcst_data_type, $fcst_date);
        $data['normal_list'] = $this->Heatwave_graphical_model->getTxNormalData($fcst_date);
        $data['latest_update_info'] = $latest_update_info_txt;
        //pr($data['fcst_list']);
        $data['region_info'] = $this->Heatwave_graphical_model->getHillyPlainBlockWise();
        //pr($data['region_info']);

        $legend_data  = $this->Va_forecst_model->get_max_temp_forecast_legend();
        $data['legend_data'] = $legend_data;
        
        $this->load->view('Data_Retrieval/D_Retrieval_view', $data);        
    }

}
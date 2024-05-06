<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TESTING extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('OverviewModel');
    }
    
    public function index(){
        error_reporting(E_ALL ^ E_NOTICE);  
        $HeatWaveDtls = $HeatWaveDtlsD = array();
        $active_type = "Ecmwf";
        $today = date('Y-m-d');
        $today_m_d = date('m-d');
        $data['map_date'] = $today;
        $blockDtls = $this->OverviewModel->getBlockDetails();
        $districtDtls = $this->OverviewModel->getDistrictDetails();
        $forecastData = $this->OverviewModel->getTxFcstData('ecmwf',$today);
        $forecastDataDistrict = $this->OverviewModel->getTxFcstDataDistrict('ecmwf',$today);
        $data['forecastData'] = $forecastData;
        $data['forecastDataDistrict'] = $forecastDataDistrict;
        $normalData = $this->OverviewModel->getTxNormalData($today);
        $normalDataDistrict = $this->OverviewModel->getTxNormalDataDistrict($today);
        $data['normalData'] = $normalData;
        $data['normalDataDistrict'] = $normalDataDistrict;
        $regionBlockWise = $this->OverviewModel->getHillyPlainBlockWise();
        $regionDistrictWise = $this->OverviewModel->getHillyPlainDistrictWise();
        foreach ($blockDtls as $key => $val){
            $blockId = $val['id'];
            if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
                if($blockId <= 314){
                    if(!empty($forecastData) && !empty($normalData)){
                        if($regionBlockWise[$blockId] == 1){ // Hilly
                            if(($forecastData[$blockId] - $normalData[$blockId]) > 6.4){
                                $HeatWaveStatus = 3;
                            } else if(($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4){
                                $HeatWaveStatus = 2;
                            } else {
                                $HeatWaveStatus = 1;
                            }
                        } else if ($regionBlockWise[$blockId] == 2){ // Plain
                            if (($forecastData[$blockId] >= 40) && (($forecastData[$blockId] - $normalData[$blockId]) > 6.4)){
                                $HeatWaveStatus = 3;
                            } else if ($forecastData[$blockId] >= 47){
                                $HeatWaveStatus = 3;
                            } else if($forecastData[$blockId] > 45 && $forecastData[$blockId] < 47){
                                $HeatWaveStatus = 2;
                            } else if (($forecastData[$blockId] >= 40) || (($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4 )){
                                $HeatWaveStatus = 2;
                            }  else {
                                $HeatWaveStatus =1;
                            }
                        } else if($regionBlockWise[$blockId] == 3) { // Coastal
                            if(($forecastData[$blockId] - $normalData[$blockId]) > 6.4) {
                                $HeatWaveStatus = 3;
                            } else if ($forecastData[$blockId] >= 37 || ($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4){
                                $HeatWaveStatus = 2;
                            } else {
                                $HeatWaveStatus = 1;
                            }
                        }
                    } else {
                        $HeatWaveStatus = 'N/A';   
                    }
                    $HeatWaveDtls[$blockId] = $HeatWaveStatus;
                }
            } else {
                $HeatWaveDtls[$blockId] = 1;
            }
        }
        // District Wise
        foreach ($districtDtls as $d_key => $d_val){
            $district_id = $d_val['id'];
            if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
                if(!empty($forecastDataDistrict) && !empty($normalDataDistrict)){
                    if($regionDistrictWise[$district_id] == 1){ // Hilly
                        if(($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) > 6.4){
                            $HeatWaveStatusD = 3;
                        } else if(($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) <= 6.4){
                            $HeatWaveStatusD = 2;
                        } else {
                            $HeatWaveStatusD = 1;
                        }
                    } else if ($regionDistrictWise[$district_id] == 2){ // Plain
                        if (($forecastDataDistrict[$district_id] >= 40) && (($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) > 6.4)){
                            $HeatWaveStatusD = 3;
                        } else if ($forecastDataDistrict[$district_id] >= 47){
                            $HeatWaveStatusD = 3;
                        } else if($forecastDataDistrict[$district_id] > 45 && $forecastDataDistrict[$district_id] < 47){
                            $HeatWaveStatusD = 2;
                        } else if (($forecastDataDistrict[$district_id] >= 40) || (($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$blockId]) <= 6.4 )){
                            $HeatWaveStatusD = 2;
                        }  else {
                            $HeatWaveStatusD =1;
                        }
                    } else if($regionDistrictWise[$district_id] == 3) { // Coastal
                        if(($forecastDataDistrict[$district_id] - $normalData[$district_id]) > 6.4) {
                            $HeatWaveStatusD = 3;
                        } else if ($forecastDataDistrict[$district_id] >= 37 || ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) <= 6.4){
                            $HeatWaveStatusD = 2;
                        } else {
                            $HeatWaveStatusD = 1;
                        }
                    } 
                } else {
                    $HeatWaveStatusD = 'N/A';   
                }
                $HeatWaveDtlsD[$district_id] = $HeatWaveStatusD;
            } else {
                $HeatWaveDtlsD[$district_id] = 1;
            }
        }

        $data['heat_wave'] = $HeatWaveDtls;
        $data['heat_wave_dist'] = $HeatWaveDtlsD;
        //pr($data);
        // $this->load->view('heat_wave/overview/overview',$data);
        $this->load->view('Social_media/test_view',$data);
    }

    public function fetch_overview_status(){
        //pr($_POST,1);
        $HeatWaveStatus = $HeatWaveStatusD = '';
        $HeatWaveDtlsD = array();
        $f_date = $this->input->post('fd');
        $days = $this->input->post('d');
        $model = $this->input->post('m');
        $fetch_day = date("Y-m-d", strtotime("$f_date +".$days." days"));
        $blockDtls = $this->OverviewModel->getBlockDetails();
        $districtDtls = $this->OverviewModel->getDistrictDetails();
        $forecastData = $this->OverviewModel->getTxFcstData($model,$fetch_day);
        $data['forecastData'] = $forecastData;
        $forecastDataDistrict = $this->OverviewModel->getTxFcstDataDistrict($model,$fetch_day);
        $data['forecastDataDistrict'] = $forecastDataDistrict;
        $normalData = $this->OverviewModel->getTxNormalData($fetch_day);
        $data['normalData'] = $normalData;
        $normalDataDistrict = $this->OverviewModel->getTxNormalDataDistrict($fetch_day);
        $data['normalDataDistrict'] = $normalDataDistrict;
        $regionBlockWise = $this->OverviewModel->getHillyPlainBlockWise();
        $regionDistrictWise = $this->OverviewModel->getHillyPlainDistrictWise();
        //pr($forecastData);
        //pr($normalData);
        $today_m_d = date('m-d');
        foreach ($blockDtls as $key => $val){

            $blockId = $val['id'];
            if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
                if($blockId <= 314){
                    if(!empty($forecastData) && !empty($normalData)){
                        #pr($forecastData);
                        if($regionBlockWise[$blockId] == 1){ // Hilly
                            if(($forecastData[$blockId] - $normalData[$blockId]) > 6.4){
                                $HeatWaveStatus = 3;
                            } else if( ($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4){
                                $HeatWaveStatus = 2;
                            } else {
                                $HeatWaveStatus = 1;
                            }
                        } else if ($regionBlockWise[$blockId] == 2){ // Plain
                            if (($forecastData[$blockId] >= 40) && (($forecastData[$blockId] - $normalData[$blockId]) > 6.4)){
                                $HeatWaveStatus = 3;
                            } else if ($forecastData[$blockId] >= 47){
                                $HeatWaveStatus = 3;
                            } else if($forecastData[$blockId] > 45 && $forecastData[$blockId] < 47){
                                $HeatWaveStatus = 2;
                            } else if (($forecastData[$blockId] >= 40) || (($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4 )){
                                $HeatWaveStatus = 2;
                            }  else {
                                $HeatWaveStatus =1;
                            }
                        } else if($regionBlockWise[$blockId] == 3) { // Coastal
                            if(($forecastData[$blockId] - $normalData[$blockId]) > 6.4) {
                                $HeatWaveStatus = 3;
                            } else if ($forecastData[$blockId] >= 37 || ($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4){
                                $HeatWaveStatus = 2;
                            } else {
                                $HeatWaveStatus = 1;
                            }
                        }   
                    } 
                } else {
                    $HeatWaveStatus = 'N/A';   
                }
                $HeatWaveDtls[$blockId] = $HeatWaveStatus;
                //pr ($HeatWaveDtls);
            } else {
                $HeatWaveDtls[$blockId] = 1;
            }
            if($model == 'wrf'){
                $HeatWaveDtls[$blockId] = '';
            }
        }
        // District Wise
        foreach ($districtDtls as $d_key => $d_val){
            $district_id = $d_val['id'];
            if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
                if(!empty($forecastDataDistrict) && !empty($normalDataDistrict)){
                    if($regionDistrictWise[$district_id] == 1){ // Hilly
                        if(($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) > 6.4){
                            $HeatWaveStatusD = 3;
                        } else if(($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) <= 6.4){
                            $HeatWaveStatusD = 2;
                        } else {
                            $HeatWaveStatusD = 1;
                        }
                    } else if ($regionDistrictWise[$district_id] == 2){ // Plain
                        if (($forecastDataDistrict[$district_id] >= 40) && (($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) > 6.4)){
                            $HeatWaveStatusD = 3;
                        } else if ($forecastDataDistrict[$district_id] >= 47){
                            $HeatWaveStatusD = 3;
                        } else if($forecastDataDistrict[$district_id] > 45 && $forecastDataDistrict[$district_id] < 47){
                            $HeatWaveStatusD = 2;
                        } else if (($forecastDataDistrict[$district_id] >= 40) || (($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$blockId]) <= 6.4 )){
                            $HeatWaveStatusD = 2;
                        }  else {
                            $HeatWaveStatusD =1;
                        }
                    } else if($regionDistrictWise[$district_id] == 3) { // Coastal
                        if(($forecastDataDistrict[$district_id] - $normalData[$district_id]) > 6.4) {
                            $HeatWaveStatusD = 3;
                        } else if ($forecastDataDistrict[$district_id] >= 37 || ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) <= 6.4){
                            $HeatWaveStatusD = 2;
                        } else {
                            $HeatWaveStatusD = 1;
                        }
                    } 
                } else {
                    $HeatWaveStatusD = 'N/A';   
                }
                $HeatWaveDtlsD[$district_id] = $HeatWaveStatusD;
            } else {
                $HeatWaveDtlsD[$district_id] = 1;
            }
        }

        $f_arr = array('fOut'=>$HeatWaveDtls,'fOut_dist'=>$HeatWaveDtlsD, 'map_date'=>$fetch_day);
        echo json_encode($f_arr);
    }
    public function fetch_f_n_value(){
        $f_date = $this->input->post('fd');
        $days = $this->input->post('d');
        $model = $this->input->post('m');
        $fetch_day = date("Y-m-d", strtotime("$f_date +".$days." days"));
        $data['dates'] = $fetch_day;
        $blockDtls = $this->OverviewModel->getBlockDetails();
        $forecastData = $this->OverviewModel->getTxFcstData($model,$fetch_day);
        $data['forecastData'] = $forecastData;
        $normalData = $this->OverviewModel->getTxNormalData($fetch_day);
        $data['normalData'] = $normalData;
        $f_ar = array('f_n'=>$data,'f_n_date'=>$fetch_day);
        echo json_encode($f_ar);
    }

    public function fetch_f_n_value_dist(){
        $f_date = $this->input->post('fd');
        $days = $this->input->post('d');
        $model = $this->input->post('m');
        $fetch_day = date("Y-m-d", strtotime("$f_date +".$days." days"));
        $data['dates'] = $fetch_day;
        $forecastDataDistrict = $this->OverviewModel->getTxFcstDataDistrict($model,$fetch_day);
        $data['forecastDataDistrict'] = $forecastDataDistrict;
        $normalDataDistrict = $this->OverviewModel->getTxNormalDataDistrict($fetch_day);
        $data['normalDataDistrict'] = $normalDataDistrict;
        $f_ar = array('f_n'=>$data,'f_n_date'=>$fetch_day);
        echo json_encode($f_ar);
    }


    public function ecmwf(){
        $district_info = $block_info = array();
        $data['fcst_data_type'] = 'ecmwf';
        $data['active_map_type'] = 'ecmwf';
        $data['role'] = $this->session->userdata('role');
        if($this->input->get('submit_day')){
            $day = $this->input->get('submit_day');
            preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $day, $regs);
            if(!empty($regs)){
                $day_int = intval($regs[1]);
            } else {
                $day_int = 1;
            }
        } else{
            $day_int = 1;
        }
        $data['active_day']=$day_int;
        $date = $this->get_date($day_int);
        $data['date_select']=$this->get_date($day_int);
        $data['active_day'] = $day_int;
        
        $block_info         = $this->OverviewModel->getTxFcstData('ecmwf',$data['date_select']);
        $normalData         = $this->OverviewModel->getTxNormalData($data['date_select']);
        $heatWaveDtls       = $this->get_Heat_wave_status_block($normalData,$block_info);
        $data['block_info'] = $heatWaveDtls;

        $district_info              = $this->OverviewModel->getTxFcstDataDistrict('ecmwf',$data['date_select']);
        $normalDataDistrict         = $this->OverviewModel->getTxNormalDataDistrict($data['date_select']);
        $heatWaveDtlsDistrict       = $this->get_Heat_wave_status_district($normalDataDistrict,$district_info);
        $data['district_info']      = $heatWaveDtlsDistrict;
        $data['normal_block'] = $normalData;
        $data['normal_district'] = $normalDataDistrict;

        $data['block_wise_data'] = $block_info;
        $data['dist_wise_data'] = $district_info;
        $this->load->view('Social_media/test_view',$data);         
    }

    public function imd(){
        $district_info = $block_info = array();
        $data['fcst_data_type'] = 'imd';
        $data['active_map_type'] = 'imd';
        $data['role'] = $this->session->userdata('role');
        if($this->input->get('submit_day')){
            $day = $this->input->get('submit_day');
            preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $day, $regs);
            if(!empty($regs)){
                $day_int = intval($regs[1]);
            } else {
                $day_int = 1;
            }
        } else{
            $day_int = 1;
        }
        $data['active_day']=$day_int;
        $date = $this->get_date($day_int);
        $data['date_select']=$this->get_date($day_int);
        $data['active_day'] = $day_int;
        #$district_info  =    $this->OverviewModel->get_ecmwf_info_district($data['date_select']);
        $block_info         =    $this->OverviewModel->getTxFcstData('imd',$data['date_select']);
        $normalData         = $this->OverviewModel->getTxNormalData($data['date_select']);
        $heatWaveDtls = $this->get_Heat_wave_status_block($normalData,$block_info);

        $data['block_info'] = $heatWaveDtls;
        
        $district_info              =   $this->OverviewModel->getTxFcstDataDistrict('imd',$data['date_select']);
        $normalDataDistrict         =   $this->OverviewModel->getTxNormalDataDistrict($data['date_select']);
        $heatWaveDtlsDistrict      = $this->get_Heat_wave_status_district($normalDataDistrict,$district_info);
        $data['district_info']      = $heatWaveDtlsDistrict;
        $data['normal_block'] = $normalData;
        $data['normal_district'] = $normalDataDistrict;
        $data['block_wise_data'] = $block_info;
        $data['dist_wise_data'] = $district_info;
        $this->load->view('Social_media/test_view',$data);        
    }

    public function ensemble(){
        $district_info = $block_info = array();
        $data['fcst_data_type'] = 'ensemble';
        $data['active_map_type'] = 'ensemble';
        $data['role'] = $this->session->userdata('role');
        if($this->input->get('submit_day')){
            $day = $this->input->get('submit_day');
            preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $day, $regs);
            if(!empty($regs)){
                $day_int = intval($regs[1]);
            } else {
                $day_int = 1;
            }
        } else{
            $day_int = 1;
        }
        $data['active_day']=$day_int;
        $date = $this->get_date($day_int);
        $data['date_select']=$this->get_date($day_int);
        $data['active_day'] = $day_int;
        #$district_info  =    $this->OverviewModel->get_ecmwf_info_district($data['date_select']);
        $block_info         =    $this->OverviewModel->getTxFcstData('ensemble',$data['date_select']);
        $normalData         = $this->OverviewModel->getTxNormalData($data['date_select']);
        $heatWaveDtls = $this->get_Heat_wave_status_block($normalData,$block_info);

        $data['block_info'] = $heatWaveDtls;
        $district_info              =   $this->OverviewModel->getTxFcstDataDistrict('ecmwf',$data['date_select']);
        $normalDataDistrict         =   $this->OverviewModel->getTxNormalDataDistrict($data['date_select']);
        $heatWaveDtlsDistrict      = $this->get_Heat_wave_status_district($normalDataDistrict,$district_info);
        $data['district_info']      = $heatWaveDtlsDistrict;
        $data['normal_block'] = $normalData;
        $data['normal_district'] = $normalDataDistrict;
        $data['block_wise_data'] = $block_info;
        $data['dist_wise_data'] = $district_info;
        $this->load->view('Social_media/test_view',$data);       
    }
    public function va(){
        $district_info = $block_info = array();
        $data['fcst_data_type'] = 'va';
        $data['active_map_type'] = 'va';
        $data['role'] = $this->session->userdata('role');
        if($this->input->get('submit_day')){
            $day = $this->input->get('submit_day');
            preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $day, $regs);
            if(!empty($regs)){
                $day_int = intval($regs[1]);
            } else {
                $day_int = 1;
            }
        } else{
            $day_int = 1;
        }
        $data['active_day']=$day_int;
        $date = $this->get_date($day_int);
        $data['date_select']=$this->get_date($day_int);
        $data['active_day'] = $day_int;
        $block_info         =    $this->OverviewModel->getTxFcstData('va',$data['date_select']);
        $normalData         = $this->OverviewModel->getTxNormalData($data['date_select']);
        $heatWaveDtls = $this->get_Heat_wave_status_block($normalData,$block_info);

        $data['block_info'] = $heatWaveDtls;
        $district_info              =   $this->OverviewModel->getTxFcstDataDistrict('va',$data['date_select']);
        $normalDataDistrict         =   $this->OverviewModel->getTxNormalDataDistrict($data['date_select']);
        $heatWaveDtlsDistrict      = $this->get_Heat_wave_status_district($normalDataDistrict,$district_info);
        $data['district_info']      = $heatWaveDtlsDistrict;

        $data['normal_block'] = $normalData;
        $data['normal_district'] = $normalDataDistrict;
        $data['block_wise_data'] = $block_info;
        $data['dist_wise_data'] = $district_info;
        $this->load->view('Social_media/test_view',$data);      
    }

    function get_date($day){
        date_default_timezone_set('Asia/Kolkata');  //time in Thailand
        $date_before_modify = date("Y-m-d");
        if($day===1){
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
        else if($day===6){
            $date = date("Y-m-d", strtotime("$date_before_modify +5 days"));
        }
        else if($day===7){
            $date = date("Y-m-d", strtotime("$date_before_modify +6 days"));
        }
        else if($day===8){
            $date = date("Y-m-d", strtotime("$date_before_modify +7 days"));
        }
        else if($day===9){
            $date = date("Y-m-d", strtotime("$date_before_modify +8 days"));
        }
        else{
            $date = date("Y-m-d", strtotime("$date_before_modify +9 days"));
        }
        return $date;
    }

    public function get_Heat_wave_status_block($normalData,$forecastData){
        error_reporting(E_ALL ^ E_NOTICE); 
        $blockDtls          = $this->OverviewModel->getBlockDetails();
        $regionBlockWise    = $this->OverviewModel->getHillyPlainBlockWise();
        $HeatWaveDtls = array();
        $today_m_d = date('m-d');
        foreach ($blockDtls as $key => $val){
            $blockId = $val['id'];
            if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
                if($blockId <= 314){
                    if(!empty($forecastData) && !empty($normalData)){
                        if($regionBlockWise[$blockId] == 1){ // Hilly
                            if(($forecastData[$blockId] - $normalData[$blockId]) > 6.4){
                                $HeatWaveStatus = 3;
                            } else if(($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4){
                                $HeatWaveStatus = 2;
                            } else {
                                $HeatWaveStatus = 1;
                            }
                        } else if ($regionBlockWise[$blockId] == 2){ // Plain
                            if (($forecastData[$blockId] >= 40) && (($forecastData[$blockId] - $normalData[$blockId]) > 6.4)){
                                $HeatWaveStatus = 3;
                            } else if ($forecastData[$blockId] >= 47){
                                $HeatWaveStatus = 3;
                            } else if($forecastData[$blockId] > 45 && $forecastData[$blockId] < 47){
                                $HeatWaveStatus = 2;
                            } else if (($forecastData[$blockId] >= 40) || (($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4 )){
                                $HeatWaveStatus = 2;
                            }  else {
                                $HeatWaveStatus =1;
                            }
                        } else if($regionBlockWise[$blockId] == 3) { // Coastal
                            if(($forecastData[$blockId] - $normalData[$blockId]) > 6.4) {
                                $HeatWaveStatus = 3;
                            } else if ($forecastData[$blockId] >= 37 || ($forecastData[$blockId] - $normalData[$blockId]) >= 4.5 && ($forecastData[$blockId] - $normalData[$blockId]) <= 6.4){
                                $HeatWaveStatus = 2;
                            } else {
                                $HeatWaveStatus = 1;
                            }
                        }
                    } else {
                        $HeatWaveStatus = 'N/A';   
                    }
                    $HeatWaveDtls[$blockId] = $HeatWaveStatus;
                }
            } else {
                $HeatWaveDtls[$blockId] = 1;
            }
        }
        return $HeatWaveDtls;
    }
    public function get_Heat_wave_status_district($normalDataDistrict,$forecastDataDistrict){
        error_reporting(E_ALL ^ E_NOTICE); 
        $HeatWaveDtlsD = array();
        $today_m_d = date('m-d');
        $districtDtls = $this->OverviewModel->getDistrictDetails();
        $regionDistrictWise = $this->OverviewModel->getHillyPlainDistrictWise();
        foreach ($districtDtls as $d_key => $d_val){
            $district_id = $d_val['id'];
            if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){
                if(!empty($forecastDataDistrict) && !empty($normalDataDistrict)){
                    if($regionDistrictWise[$district_id] == 1){ // Hilly
                        if(($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) > 6.4){
                            $HeatWaveStatusD = 3;
                        } else if(($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) <= 6.4){
                            $HeatWaveStatusD = 2;
                        } else {
                            $HeatWaveStatusD = 1;
                        }
                    } else if ($regionDistrictWise[$district_id] == 2){ // Plain
                        if (($forecastDataDistrict[$district_id] >= 40) && (($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) > 6.4)){
                            $HeatWaveStatusD = 3;
                        } else if ($forecastDataDistrict[$district_id] >= 47){
                            $HeatWaveStatusD = 3;
                        } else if($forecastDataDistrict[$district_id] > 45 && $forecastDataDistrict[$district_id] < 47){
                            $HeatWaveStatusD = 2;
                        } else if (($forecastDataDistrict[$district_id] >= 40) || (($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$blockId]) <= 6.4 )){
                            $HeatWaveStatusD = 2;
                        }  else {
                            $HeatWaveStatusD =1;
                        }
                    } else if($regionDistrictWise[$district_id] == 3) { // Coastal
                        if(($forecastDataDistrict[$district_id] - $normalData[$district_id]) > 6.4) {
                            $HeatWaveStatusD = 3;
                        } else if ($forecastDataDistrict[$district_id] >= 37 || ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) >= 4.5 && ($forecastDataDistrict[$district_id] - $normalDataDistrict[$district_id]) <= 6.4){
                            $HeatWaveStatusD = 2;
                        } else {
                            $HeatWaveStatusD = 1;
                        }
                    } 
                } else {
                    $HeatWaveStatusD = 'N/A';   
                }
                $HeatWaveDtlsD[$district_id] = $HeatWaveStatusD;
            } else {
                $HeatWaveDtlsD[$district_id] = 1;
            }
        }
        return $HeatWaveDtlsD;
    }
}
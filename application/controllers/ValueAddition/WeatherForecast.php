<?php
/**
 * Description of View Weather Forecast information
 * @author Saroj Choudhury
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class WeatherForecast extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->_check_session();
        $this->load->model('ValueAddition/WeatherForecastModel','WFM');  
        $this->load->model('ValueAddition/VaModel');  
        date_default_timezone_set('Asia/Kolkata');  //time in India
    }
    
    function _check_session() {
        if (!$this->session->has_userdata('name') || !$this->session->is_loggedin) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Please Login to continue!!</strong><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">X</a></div>');
            redirect('login');
        }
    }

    public function index(){
        $data = array();
        $basemap = 'osm';
        $data['basemap'] = $basemap;
        #pr($_POST);
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
        //pr($model_list);
        $data['param_list'] = $param_list;
        $data['model_list'] = $model_list;

        $curr_date = $this->getDate();
        $fcst_date = $curr_date;
        $data['curr_date'] = $fcst_date;
        #pr($model_choosed);
        if($model_choosed == 1){
            $fcst_data_type = "imd";
        } else if($model_choosed == 2){
            $fcst_data_type = "ecmwf";
        } else if($model_choosed == 3){
            $fcst_data_type = "ensemble";
        }
        #pr($fcst_data_type);
        $param_name = $this->WFM->get_parameter_name($param_choosed);
        $data['paramName'] = trim($param_name['nick_name']);
        $data['parameter_name'] = trim($param_name['parameter_name']);
        $info = $this->WFM->getForecastInfo($fcst_data_type,$fcst_date,$param_name);
        $data['info'] = $info;
        
        $this->load->view("value_addition/weather_forecast",$data);
    }
    
    function getDate(){
        $curr_time = strtotime(date('H:i'));
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
            $model_id = $this->input->post("model_id");
            $info = getOptionParameter("model_id ='".$model_id."'");
            $html = "<option value='' selected='selected'>Select Parameter</option>";
            $html .= $info;
            echo $html; exit;
        } else {
            redirect('Home');
        }
    }
}
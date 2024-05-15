<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rainfall_Validation_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->helper('url');
// In the constructor or a method where you want to use form validation
$this->load->library('form_validation');

        // $this->_check_session();
        $this->load->database();
        $this->load->model('Rainfall_Validation_Model','ofm');
    }

   

    public function index(){
        $data['stations']=$this->ofm->get_stations();
        $this->load->view('Menu/Rainfall_Validation',$data);
    }

    public function get_station_data(){
        $xss_error = false;
        $ecmwf = $wrf =  $imd = $ensemble = $staion =  $date = $value_added = array();
        if(!empty($_POST)){
            $this->form_validation->set_rules('id', 'id', 'required|trim|is_natural');
            $this->form_validation->set_rules('start_date', 'start_date', 'required|trim|callback_validateDate');
            $this->form_validation->set_rules('end_date', 'end_date', 'required|trim|callback_validateDate');
            if ($this->form_validation->run() == FALSE) {
                $xss_error = true;
            } else {
                $id = $this->input->post('id',true);
                $start_date = $this->input->post('start_date',true);
                $end_date = $this->input->post('end_date',true);
                $param='rainfall';
                //$records = $this->ofm->get_station_comp_data($id,$start_date,$end_date);
                //$records = $this->ofm->get_forecast_data_union($id,$start_date,$end_date);
                $records = $this->ofm->get_forecast_data($id,$start_date,$end_date);
                //pr($records,1);
                // foreach ($records as $item) {
                //     $key='ecmwf_'.$param;
                //     array_push($ecmwf,$item->$key);
                //     $key='wrf_'.$param;
                //     array_push($wrf,$item->$key);
                //     $key='imd_gfs_'.$param;
                //     array_push($imd,$item->$key);
                //     $key='value_added_'.$param;
                //     array_push($value_added,$item->$key);
                //     array_push($staion,$item->$param);
                //     array_push($date,$item->date);
                // } 
                // pr($ecmwf);
                // pr($wrf);
                // pr($imd);
                // pr($value_added);
                // pr($staion);
                // pr($date);
                $date = $this->date_loop($start_date,$end_date);
                //pr($date);
                $data=array(
                    'ecmwf' => $records['ecm_data'], 
                    'wrf' =>  $records['wrf_data'],  
                    'imd' =>  $records['imd_data'], 
                    'value_added' =>  $records['va_data'], 
                    'observed' =>  $records['ob_data'], 
                    'date' => $date, 
                    'xss_error',$xss_error
                );
                echo json_encode($data,JSON_NUMERIC_CHECK);
            }
            if($xss_error){
                echo json_encode(array('xss_error'=>true));
            } 
        } else {
            redirect('Home');
        }
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
    public function validateDate($str){
        if (!DateTime::createFromFormat('Y-m-d', $str)) { //yes it's YYYY-MM-DD
            $this->form_validation->set_message('validateDate', 'The {field} has not a valid date format');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}

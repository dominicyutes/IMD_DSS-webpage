<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rainfall_Validation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Rainfall_Validation_Model', 'ofm');
    }




    public function index()
    {

        
        $data['stations'] = $this->ofm->get_stations();
       
        $data['stationNames'] = $this->ofm->get_station_name();
         $data['stationIds'] = $this->ofm->get_station_id();

        $this->load->view('Menu/Rainfall_Validation', $data);
  
    // var_dump($data['stationIds']);
    }

    public function get_station_data()
    {
        $xss_error = false;
        $ecmwf = $wrf = $imd = $ensemble = $staion = $date = $value_added = array();
        if (!empty($_POST)) {
            $this->form_validation->set_rules('id', 'id', 'required|trim|is_natural');
            $this->form_validation->set_rules('start_date', 'start_date', 'required|trim|callback_validateDate');
            $this->form_validation->set_rules('end_date', 'end_date', 'required|trim|callback_validateDate');
            if ($this->form_validation->run() == FALSE) {
                $xss_error = true;
            } else {
                $id = $this->input->post('id', true);
                $start_date = $this->input->post('start_date', true);
                $end_date = $this->input->post('end_date', true);
                $param = 'rainfall';
                $records = $this->ofm->get_forecast_data($id, $start_date, $end_date);

                $date = $this->date_loop($start_date, $end_date);
                $data = array(
                    'ecmwf' => $records['ecm_data'],
                    'wrf' => $records['wrf_data'],
                    'imd' => $records['imd_data'],
                    'value_added' => $records['va_data'],
                    'observed' => $records['ob_data'],
                    'date' => $date,
                    'xss_error',
                    $xss_error
                );
                echo json_encode($data, JSON_NUMERIC_CHECK);
            }
            if ($xss_error) {
                echo json_encode(array('xss_error' => true));
            }
        } else {
            redirect('Home');
        }
    }

    public function date_loop($start, $end)
    {
        $start = strtotime($start);
        $end = strtotime($end);
        $currentdate = $start;
        $res = array();
        while ($currentdate <= $end) {
            $cur_date = date('Y-m-d', $currentdate);
            array_push($res, $cur_date);
            $currentdate = strtotime('+1 days', $currentdate);

        }
        return $res;
    }
    public function validateDate($str)
    {
        if (!DateTime::createFromFormat('Y-m-d', $str)) {
            $this->form_validation->set_message('validateDate', 'The {field} has not a valid date format');
            return FALSE;
        } else {
            return TRUE;
        }
    }
   
   

    public function getStationCoordinates_name()
    {
        $station_name = $this->input->post('station_name');
        $coordinates = $this->ofm->get_station_coordinates_name($station_name);
        echo json_encode($coordinates);
    }

    
    public function getStationId($stationName) {
        
        $stationId = $this->ofm->getStationIdByName($stationName);
        
        echo $stationId;
    }
    public function getStationCoordinates_id()
    {
        $station_id = $this->input->post('station_id');
        $coordinates = $this->ofm->get_station_coordinates_id($station_id);
        echo json_encode($coordinates);
    }

}

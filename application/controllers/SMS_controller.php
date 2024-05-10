<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Twilio\Rest\Client;

class SMS_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
         $name = '';
       if ($this->session->has_userdata('name')) {
           $name = $this->session->userdata('name');
       }
       $data['name'] = $name;
       $this->load->view('Social_media/SMS_view',$data);
    }

    public function SMS_post() {
       $SMS_var = $this->input->post('SMS_var');
       echo "Received SMS: " . $SMS_var;
       
       $this->load->config('twilio');
       $sid = $this->config->item('sid');
       $token = $this->config->item('token');
       $twilio_client = new Client($sid,$token);
       $phone = $this->config->item('phone');

    //    $phoneNumbers = array('+916369086095','+918939535307');
    
        $phoneNumbers = '+918939535307';
       try {
           foreach ($phoneNumbers as $phoneNumber) {
               $twilio_client->messages->create($phoneNumber, [
                   'from' => $phone,
                   'body' => $SMS_var
               ]);
               echo "SMS has been sent to " . $phoneNumber . "<br>";
           }
       } catch (Exception $ex) {
           echo "SMS FAILED: " . $ex->getMessage();
       }

        
    }
}
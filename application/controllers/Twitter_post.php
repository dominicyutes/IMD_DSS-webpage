<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter_post extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TwitterDB');
        $this->_check_session();
    }

    private function _check_session() {
        if (!$this->session->has_userdata('name')) {
            redirect('login');
        }
    }

    public function index() {
        $data = array();
        $name = $this->session->userdata('name');
        $data['name'] = $name;
        
        // $name = '';
        //   if ($this->session->has_userdata('name')) {
        //    $name = $this->session->userdata('name');
        //   }
        //   $data['name'] = $name;

       
        $todays_date = '2023-05-04';
        
        $info = $this->TwitterDB->fetch_nowcast_district_wise($todays_date);
        $dinfo = $this->TwitterDB->fetch_nowcast_district_($todays_date);
        //
        $data['info'] = $info;
        $data['dinfo'] = $dinfo;


       $this->load->view('Social_media/twitter_view',$data);
    }

    public function post_info() {
     if(!empty($_POST)) {
        $baseFromJavascript = $_POST['base64'];
        $random_name = $_POST['r_file_name']; 

        $base_to_php = explode(',', $baseFromJavascript);
        $img_data = base64_decode($base_to_php[1]);

        $folder_path = "assets/Twit_img";
        $filename = "map_img_".$random_name.".jpeg";

        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }

        $img_path = $folder_path.'/'.$filename;

        if(file_put_contents($img_path, $img_data) !== false) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error"]);
        }
        exit;
     }
    }

    


}
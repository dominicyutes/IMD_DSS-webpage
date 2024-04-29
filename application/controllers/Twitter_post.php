<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter_post extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
       $this->load->view('Social_media/twitter_view');
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";
// require_once APPPATH . 'vendor/autoload.php';

use Facebook\Facebook;

class Facebook_post extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('Social_media/facebook_view');
    }

    function getDate(){
        $curr_time = strtotime(date('H:i'));
        if($curr_time < strtotime(date('07:31')) ){
            $date = date("Y-m-d", strtotime("-1 days"));
        }
        else{
            $date = date("Y-m-d");
        }
        return $date;
    }

    public function getPic() {
        if(!empty($_POST)) {
        $baseFromJavascript = $_POST['base64'];
        $random_name = $_POST['r_file_name']; 

        $base_to_php = explode(',', $baseFromJavascript);
        $img_data = base64_decode($base_to_php[1]);

        $folder_path = "assets/Fb_img";
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
    }
    }

    public function post_info() {
    $fb = new Facebook([
            'app_id' => '1830324530768258',
            'app_secret' => 'c2114ccbb50dd2ed5a2b31dc509ce878',
            'default_graph_version' => 'v2.10',
        ]);

        $linkData = [
            // 'link' => 'http://www.example.com',
            'message' => 'FACEBOOK 1234 Post It ',
            'source' => $fb->fileToUpload("https://buffer.com/library/content/images/2023/10/free-images.jpg")
            // $source = base_url() . 'assets/images/Facebook-logo.png';
            // 'source' => $fb->fileToUpload(APPPATH . 'controllers/Facebook-logo.png')
        ];

        try {
            $response = $fb->post('/me/feed', $linkData, 'EAAaAq6N66YIBO6Ju3CwMV1zHsURFI97ZC0JJRaDibgWJTfHvUOPEf2YVZBjNRVPFRNGxk8lB3TmZBpUeZBcPO6bYcS2UOHooDC3WfnqxL4dvNH68lrcPDawZAZA1awCpjjT3wmMzHPL22YbhztpzxH3IAE8AhOaUlZAsVJj6HysgjCY1dMkkoo0hD9ZARlbJUP7Dxusve5u6KGdrrpnjZAlIG9GZAT3gne6voZD');
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $graphNode = $response->getGraphNode();

        echo 'Posted with id: ' . $graphNode['id'];
    }



}
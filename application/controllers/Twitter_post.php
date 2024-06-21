<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

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

    public function sendTweet(){
    // OAuth settings
    $consumerKey = 'Sbkc3SYPBJRc3uD434mWGpA5H';
    $consumerSecret = 'vpfuCU370E8oslxbwwqWhlgIoUgr3CgK1Veer68c1onXjsW442';
    $accessToken = '1779579699749949440-w7RTWQt1uBj9a44aKBfO1xKbFpbL5m';
    $accessTokenSecret = 'fdyuCdwwWbZ8DqJ08cWJ14zhW81L93MdpzByafnMqqFLK';
    
    // Create TwitterOAuth object for media upload (v1.1)
    $twitterV1 = new Abraham\TwitterOAuth\TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
    
    // Path to the image you want to upload
    $imagePath = "assets/Fb_img/map_img_2024_05_29_11_11_02.jpeg";
    
    // Check if the file exists
    if (!file_exists($imagePath)) {
        die("Error: File does not exist.\n");
    }
    
    $media = $twitterV1->upload('media/upload', ['media' => $imagePath]);
    
    if (isset($media->media_id_string)) {
        // Create TwitterOAuth object for tweeting (v2)
        $twitterV2 = new Abraham\TwitterOAuth\TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
        
        // Media uploaded successfully, create a tweet with the image using v2 endpoint
        $tweetParams = [
            'text' => 'This is a test tweet with an image.',
            'media' => [
                'media_ids' => [$media->media_id_string],
            ],
        ];
        
        // Note: The v2 endpoint for posting tweets might be different based on the API you're using.
        $status = $twitterV2->post('statuses/update', $tweetParams);
        
        if ($twitterV2->getLastHttpCode() == 201) {
            echo "Successfully posted a test tweet with an image.\n";
            echo "Tweet ID: " . $status->id . "\n";
            echo "Tweet Text: " . $status->text . "\n";
        } else {
            echo "Error posting a test tweet with an image.\n";
            echo "HTTP Code: " . $twitterV2->getLastHttpCode() . "\n";
            echo "API Response:\n";
            var_dump($status);
        }
    } else {
        echo "Error uploading media.\n";
        echo "HTTP Code: " . $twitterV1->getLastHttpCode() . "\n";
        echo "API Response:\n";
        var_dump($media);
    }
}

    


}
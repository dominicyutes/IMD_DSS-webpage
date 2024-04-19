<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";

use Facebook\Facebook;

class Facebook_post extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('Social_media/facebook_view');
    }

    public function post_info(){
      $fb = new Facebook([
              'app_id' => '1830324530768258',
              'app_secret' => 'c2114ccbb50dd2ed5a2b31dc509ce878',
              'default_graph_version' => 'v2.10',
            ]);

        // $img = isset($_POST['img']) ? $_POST['img'] : '';

        // $source = 'assets/images/Facebook-logo.png';

        // $source = base_url('assets/images/Facebook-logo.png');

        // $source = $img;


        $linkData = [
            'link' => 'http://weather-imd-test.rimes.int/',
            'message' => 'FACEBOOK POST checking 10th time',
            // 'source' => $fb->fileToUpload($source),
        ];

        // var_dump($linkData);
        // echo $linkData;
        // exit;

        try {
            $response = $fb->post('/me/feed', $linkData, 'EAAaAq6N66YIBO1uIZCR4KCfkqRTUXnR9xekVZA49bepGo2mHC2u3ZAVHCmlDsyy0MmaR0c11CACPzSFWmhEoZAYkYUZBFsUDO8V0CZB8SWDhBml7zoCXRZAZAPKcx2u9BDLypIjNGIvcPjwZCwiA7MWyJljbv1eeWVkJDjQrS43An2ZAUgsUxILSjffFkje4LJjoLNiGkamZChPYgeiclB0x5Q2UxcFhuIzGdkc');

            $this->load->view('Social_media/facebook_view');
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            $error_code = $e->getCode();
            if ($error_code == 190) { 
               echo 'Your Facebook access token has expired. Please obtain a new one.';
            } else {
                echo 'Graph returned an error: ' . $e->getMessage();
            }
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }


        $graphNode = $response->getGraphNode();

        echo 'Posted with id: ' . $graphNode['id'];

    }



}
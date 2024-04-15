<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";


use Facebook\Facebook;

class Facebook_post extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('facebook_view');
    }

    public function post_info(){
      $fb = new Facebook([
            'app_id' => '2697107290448658',
            'app_secret' => 'ea20deb4dd5bacc6aa98500a5873b4e0',
            'default_graph_version' => 'v2.10',
        ]);

        // $source = uploadImage('assets/images/Facebook-logo.png');
        // $source = 'assets\images\Facebook-logo.png';
        $source = base_url('assets/images/loginPage.jpg');


        $linkData = [
            'link' => 'http://weather-imd-test.rimes.int/',
            'message' => 'FACEBOOK POST Trying 6th time',
            'source' => $source 
        ];

        var_dump($linkData);
        // echo $linkData;
        // exit;

        try {
            $response = $fb->post('/me/feed', $linkData, 'EAAmVATn34xIBOZCh7bzD2WtXVzbhXtF2Q1ZAnYybLRSmwS8qKyvZASIOqrXgmKZCZACTZBDiDEtrkUcZBvbvSy1HrNdG35VqIseMZBZAMAfKCVBHcerpI3rgbrvWI0cQ2j4xSgb9CZCfA88ZAK1qXgcEimZBP2mlSv3Uhn4h61jkR7ZC8Wow9yZBQI1xp46TZBObGq854rDORHa2pZBq17wAWC7ZAbF16meQjSibmgswZD');

            $this->load->view('facebook_view');
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
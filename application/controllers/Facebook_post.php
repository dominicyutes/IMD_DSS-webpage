<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";


use Facebook\Facebook;

class Facebook_post extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $fb = new Facebook([
            'app_id' => '2697107290448658',
            'app_secret' => 'ea20deb4dd5bacc6aa98500a5873b4e0',
            'default_graph_version' => 'v2.10',
        ]);

        $linkData = [
            'link' => 'http://weather-imd-test.rimes.int/',
            'message' => 'FACEBOOK RIMES URL Post It Trying 3nd time',
            // 'source' => $fb->fileToUpload(APPPATH . 'controllers/Facebook-logo.png')
        ];

        try {
            $response = $fb->post('/me/feed', $linkData, 'EAAmVATn34xIBOZCEFq6ZAS9xkKGqAI7jhbZCwd8G65kdBtBMXrmDtsZCRNTELht0WDvpPt9knGt9a8LcZA9XwZBQ6RTr6xaH899Pl4GZA1zxl4vsvZA2LZBvMBfMMCUndVqoKCsYFLqJMZAn3ZBTJu4NTbFFIn028V6Un7TrZCz7BEudLba9I3vyyBpQZCboIy2NFgA6cT0G8dEAxa60RqO6a4kLcIgWqE3yTFzkZD');
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
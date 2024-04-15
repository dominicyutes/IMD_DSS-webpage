<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";
// require_once APPPATH . 'vendor/autoload.php';


use Facebook\Facebook;

class Facebook_post extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load Facebook SDK
        // require_once(APPPATH . 'vendor/Facebook/autoload.php');
    }

    public function index() {
        $fb = new Facebook([
            'app_id' => '2697107290448658',
            'app_secret' => 'ea20deb4dd5bacc6aa98500a5873b4e0',
            'default_graph_version' => 'v2.10',
        ]);

        $linkData = [
            // 'link' => 'http://www.example.com',
            'message' => 'FACEBOOK 1234 Post It ',
            'source' => $fb->fileToUpload(APPPATH . 'controllers/Facebook-logo.png')
        ];

        try {
            $response = $fb->post('/me/feed', $linkData, 'EAAmVATn34xIBO82K0rdF7wZCMdJFPq69rzo0U5FUCFssMUx0aZAAzIHjSqoeUnpjtcqQkD8uijAllDNv8ZCcm8Jtwh1xhEwI7u3uWCbxu8jdbAwhIZATpFqcjcAwa47qECkwCHICxd3JmXBukZBUZBQE89AhVVt3N4wKj9JnVbc72XNYGRqJDQCmqwvzh8ld1czsMGCwnbZAhyrDMCXbNuNwHZBU1KvnS5JV');
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
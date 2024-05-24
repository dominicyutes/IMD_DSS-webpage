<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";
// require_once APPPATH . 'vendor/autoload.php';

use Facebook\Facebook;

class Facebook_post extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Facebook_m');
        // $this->load->library('curl');
        $this->_check_session();
        // 
        if ($this->session->has_userdata('name')) {
            $this->name = $this->session->userdata('name');
        }
    }

    function _check_session() {
        if ($this->session->userdata('name')) {
            // 
        } else {
           redirect('login');
        }
    }

    public function index() {
        $data = array();
        
        $name = '';
          if ($this->session->has_userdata('name')) {
           $name = $this->session->userdata('name');
          }
          $data['name'] = $name;

       
        $todays_date = '2023-05-04';
        
        $info = $this->Facebook_m->fetch_nowcast_district_wise($todays_date);
        $dinfo = $this->Facebook_m->fetch_nowcast_district_($todays_date);
        //
        $data['info'] = $info;
        $data['dinfo'] = $dinfo;

        $this->load->view('Social_media/facebook_view',$data);
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
        $filename = $_POST['filename']; 
        echo $filename;
        // $getImage = base_url('assets/Fb_img/' . $filename);
        $getImage = base_url('assets/Fb_img/map.png');
        echo $getImage;

        $groupname = "Delhi";
        $username =  $this->name = $this->session->userdata('name');
        $sent = "Success";
        
           $fb = new Facebook([
                  'app_id' => '1830324530768258',
                  'app_secret' => 'c2114ccbb50dd2ed5a2b31dc509ce878',
                  'default_graph_version' => 'v2.10',
              ]);
              
      
              $linkData = [
                  'message' => 'IMD-RIMES Testing fb post with rainfall-data;',
                  'link' => 'http://weather-imd-test.rimes.int/',
                  'source' => $fb->fileToUpload($getImage)
              ];

              try {
                  $response = $fb->post('/me/photos', $linkData,'EAAaAq6N66YIBOyAujaMT9dINv8OnLbalkMy4ZCQH3wXjDgQOMoyYdQRsCX3ISsxrusWjJrQ0jAKB6i9Wc4HCsW6FSGZBIxaZCK0ofrZB1idGbtckhISW3zL7ZBfodtONZBBRa7UEj4Cn0NZCou1xEhM9vYAAjUJY1tPkZA9Mr37IqVZAVzh5oAQLxOSQBAkFH3ueL8jajp8SPkLGhTLXkKrTqgOyyqZCDCxwsZD');

                //   $this->Facebook_m->insert_log($groupname, $username, $sent);
              } catch(Facebook\Exceptions\FacebookResponseException $e) {
                  echo 'Graph returned an error: ' . $e->getMessage();
                  exit;
              } catch(Facebook\Exceptions\FacebookSDKException $e) {
                  echo 'Facebook SDK returned an error: ' . $e->getMessage();
                  exit;
              }
      
              $graphNode = $response->getGraphNode();
      
              echo 'Posted with id: ' . $graphNode['id'];
              
              // Prepare the response data
              $responseData = ['id' => $graphNode['id']];

              // Send the response as JSON
              echo json_encode($responseData);
    }

    public function log_information() {
        $data['name'] = $this->name;
        $this->load->view('Social_media/showLogFB', $data);
    }

}
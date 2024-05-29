<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// use Twilio\Rest\Client;
require_once('vendor/autoload.php');

class Whatsapp_controller extends CI_Controller {

    // Declare class properties
    private $folder_path;
    private $filename;
    private $img_path;
    private $ultramsg_token = "qkh9kb131s9vjho4";
    private $instance_id = "instance86674";
    private $client;
    

    public function __construct() {
        parent::__construct();
        $this->load->model('Whatsapp_m');
        $this->_check_session();
     
        // Initialize the UltraMsg client
        $this->client = new UltraMsg\WhatsAppApi($this->ultramsg_token, $this->instance_id);
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
        
        $info = $this->Whatsapp_m->fetch_nowcast_district_wise($todays_date);
        $dinfo = $this->Whatsapp_m->fetch_nowcast_district_($todays_date);
        //
        $data['info'] = $info;
        $data['dinfo'] = $dinfo;
        
       $this->load->view('Social_media/Whatsapp_view',$data);
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

        $folder_path = "assets/Whatsapp_img";
        $filename = "map_img_".$random_name.".png";

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

    public function sendMessage() {
      $ultramsg_token = "qkh9kb131s9vjho4";
      $instance_id = "instance86674";
      $client = new UltraMsg\WhatsAppApi($ultramsg_token, $instance_id);

       $to = "8939535307";  // individual number
    //    $to = "120363288038792978@g.us"; //group ID

      //send TEXT
      $body = "Wlecome Display the Nowcast Odisha Data Testing - II;";
      $api = $client->sendChatMessage($to,$body);
      print_r($api);


      // send image

      $filename = $_POST['filename']; 
      echo $filename;
      $image_path = base_url('assets/Whatsapp_img/' . $filename);
        
      $image_path = base_url('assets/Fb_img/map.png');  
    
      $data = file_get_contents($image_path);
      $image_base64 = base64_encode($data);

      $api = $client->sendImageMessage($to,$image_base64); // $caption,
      print_r($api);
      
    }

    // public function Whatsapp_post() {
    //     $this->load->config('twilio_whatsapp');
    //     $sid = $this->config->item('sid');
    //     $token = $this->config->item('token');

    //     // $imagePath = base_url('assets/Whatsapp_img/map_img_2024_04_29_08_35_08.jpeg');
    //     // echo $imagePath;

    //      // Read image file into a string
    //     //  $imageData = file_get_contents($imagePath);

    //      // Convert image data to base64
    //     //  $base64Image = base64_encode($imageData);
    //     //  echo $base64Image;
        
    //     $twilio = new Client($sid, $token);
    //     // echo $this->folder_path;
    //     // echo $this->img_path;
    //     // echo "Message SID: " . $message->sid . "<br>";

    //     try {
    //         $message = $twilio->messages->create('whatsapp:+918939535307', [
    //             // "mediaUrl" => [$this->img_path], 
    //             "mediaUrl" => ["https://i.pinimg.com/564x/af/20/d1/af20d15ea56036468b74f83aaf157b03.jpg"],
    //             // "mediaUrl" => [$base64Image], 
    //             // "mediaUrl" => ["http://iru-data.rimes.int/DSS/facebookAPI/src/map_img.jpeg"],
    //             // "mediaUrl" => [base_url('assets/Whatsapp_img/map_img_2024_04_29_08_35_08.jpeg')],
    //             'from' => "whatsapp:+14155238886",
    //             "body" => "IMD Weather Updates for May 10, 2024. Details: http://weather-imd-test.rimes.int/"
    //         ]);

    //         echo "Message SID: " . $message->sid . "<br>";
    //     } catch (Exception $ex) {
    //         echo "Error: " . $ex->getMessage();
    //     }
    // }

}
?>
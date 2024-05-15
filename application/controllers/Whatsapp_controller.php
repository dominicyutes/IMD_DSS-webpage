<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Twilio\Rest\Client;

class Whatsapp_controller extends CI_Controller {

    // Declare class properties
    private $folder_path;
    private $filename;
    private $img_path;
    

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->_check_session();
    }

    function _check_session() {
        if ($this->session->userdata('name')) {
            // 
        } else {
           redirect('login');
        }
    }

    public function index() {
        $name = '';
       if ($this->session->has_userdata('name')) {
           $name = $this->session->userdata('name');
       }
       $data['name'] = $name;
       $this->load->view('Social_media/Whatsapp_view',$data);
    }

    public function Whatsapp_map() {
        if(!empty($_POST)) {
            $baseFromJavascript = $_POST['base64'];
            $random_name = $_POST['r_file_name']; 

            $base_to_php = explode(',', $baseFromJavascript);
            $img_data = base64_decode($base_to_php[1]);

            $this->filename = "map_img_".$random_name.".jpeg"; // Set filename

            if (!file_exists($this->folder_path)) {
                mkdir($this->folder_path, 0777, true);
            }

            $this->img_path = $this->folder_path.'/'.$this->filename; // Set img_path

            if(file_put_contents($this->img_path, $img_data) !== false) {
               $response = [
                    "status" => "success",
                    "img_path" => $this->img_path  
                ];
            } else {
                $response = [
                    "status" => "error"
                ];
            }
            echo json_encode($response);
        }
    }

    public function Whatsapp_post() {
        $this->load->config('twilio_whatsapp');
        $sid = $this->config->item('sid');
        $token = $this->config->item('token');

        // $imagePath = base_url('assets/Whatsapp_img/map_img_2024_04_29_08_35_08.jpeg');
        // echo $imagePath;

         // Read image file into a string
        //  $imageData = file_get_contents($imagePath);

         // Convert image data to base64
        //  $base64Image = base64_encode($imageData);
        //  echo $base64Image;
        
        $twilio = new Client($sid, $token);
        // echo $this->folder_path;
        // echo $this->img_path;
        // echo "Message SID: " . $message->sid . "<br>";

        try {
            $message = $twilio->messages->create('whatsapp:+918939535307', [
                // "mediaUrl" => [$this->img_path], 
                "mediaUrl" => ["https://i.pinimg.com/564x/af/20/d1/af20d15ea56036468b74f83aaf157b03.jpg"],
                // "mediaUrl" => [$base64Image], 
                // "mediaUrl" => ["http://iru-data.rimes.int/DSS/facebookAPI/src/map_img.jpeg"],
                // "mediaUrl" => [base_url('assets/Whatsapp_img/map_img_2024_04_29_08_35_08.jpeg')],
                'from' => "whatsapp:+14155238886",
                "body" => "IMD Weather Updates for May 10, 2024. Details: http://weather-imd-test.rimes.int/"
            ]);

            echo "Message SID: " . $message->sid . "<br>";
        } catch (Exception $ex) {
            echo "Error: " . $ex->getMessage();
        }
    }


    // public function test(){
    //     $x = base_url('assets/Whatsapp_img/map_img_2024_04_29_08_35_08.jpeg');
    //     echo $x;
    // }

}
?>
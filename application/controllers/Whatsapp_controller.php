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

        // Initialize class properties
        $this->folder_path = "assets/Whatsapp_img"; 
        $this->filename = ""; 
        $this->img_path = ""; 
    }

    public function index() {
       $this->load->view('Social_media/Whatsapp_view');
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
        // $sid    = "AC8f6475ae067278db527777cab784cac0";
        // $token  = "77df6b842dad209aa3fc5b0f373cdfc3";
        
        $twilio = new Client($sid, $token);
        echo $this->folder_path;
        // echo $this->img_path;
        // echo "Message SID: " . $message->sid . "<br>";

        try {
            $message = $twilio->messages->create('whatsapp:+918939535307', [
                // "mediaUrl" => [$this->img_path], 
                "mediaUrl" => ["https://buffer.com/library/content/images/2023/10/free-images.jpg"],
                'from' => "whatsapp:+14155238886",
                "body" => "IMD Weather Updates for May 10, 2024. Details: http://weather-imd-test.rimes.int/"
            ]);

            echo "Message SID: " . $message->sid . "<br>";
        } catch (Exception $ex) {
            echo "Error: " . $ex->getMessage();
        }
    }

    public function test(){
        $x = base_url(assests/Whatsapp_img/map_img_2024_04_27_17_54_43.jpeg);
        echo $x;
    }

}
?>
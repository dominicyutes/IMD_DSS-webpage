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
        $ultramsg_token = "jlxev2jzcottb2ia";
        $instance_id = "instance87133";
        $client = new UltraMsg\WhatsAppApi($ultramsg_token, $instance_id);

        $to = "8939535307";  // individual number
        $to = "120363288038792978@g.us"; //group ID

        // Send text message
        $body = "welcome to whatsapp";
        $api = $client->sendChatMessage($to, $body);
        print_r($api);

        // Send document message
        // $filename = "File name"; 
        // $caption = "Document Caption"; 
        // $document = "https://file-example.s3-accelerate.amazonaws.com/documents/cv.pdf"; 
        // $api = $client->sendDocumentMessage($to,$body); // $filename, $document, $caption
        // print_r($api);  

        // Send image
        if (isset($_POST['filename'])) {
            $filename = $_POST['filename']; 
            $image_path = base_url('assets/Whatsapp_img/' . $filename);

            $data = file_get_contents($image_path);
            $image_base64 = base64_encode($data);

            $api = $client->sendImageMessage($to, $image_base64); // $caption,
            print_r($api);
        }
    }


    public function manualPosting() {
         header('Content-Type: application/json');
         $data = json_decode(file_get_contents('php://input'), true);

         // Extract content and base64 strings
         $content = isset($data['content']) ? $data['content'] : null;
         $base64Image = isset($data['base64Image']) ? $data['base64Image'] : null;
    

         $base64Document = isset($data['base64Document']) ? $data['base64Document'] : null;
         $documentName = isset($data['documentName']) ? $data['documentName'] : 'document.pdf';

         // WhatsApp API configuration
         $ultramsg_token = "jlxev2jzcottb2ia";
         $instance_id = "instance87133";
         $client = new UltraMsg\WhatsAppApi($ultramsg_token, $instance_id);

         // Individual number
         $to = "8939535307";  

         // Group ID
         // $to = "120363288038792978@g.us"; 

         // Send text content if present
         if ($content) {
             $api = $client->sendChatMessage($to, $content);
             print_r($api);
         }

         // Send an image if base64Image is present
         if ($base64Image) {
             $api = $client->sendImageMessage($to, $base64Image);
             print_r($api);
         }
     
         // Send a document if base64Document is present
         if ($base64Document) {
             $api = $client->sendDocumentMessage($to, $documentName, $base64Document);
             print_r($api);
         }

         // Return a response
         echo json_encode(['status' => 'success', 'message' => 'File processed successfully', 'base64Image' => $base64Image, 'base64Document' => $base64Document, 'content'      => $content]);
         // echo json_encode(['status' => 'success', 'message' => 'File processed successfully', 'base64Image' => 'base64Image', 'base64Document' => 'base64Document',      'content' => 'content']);
    }


}
?>
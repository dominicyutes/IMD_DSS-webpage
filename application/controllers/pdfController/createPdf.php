<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class createPdf extends CI_Controller {
public function saveReportImg(){
        if(!empty($_POST)){
            $baseFromJavascript = $_POST['base64'];
            $random_name = $_POST['r_file_name']; 
            $base_to_php = explode(',', $baseFromJavascript);
            $img_data = base64_decode($base_to_php[1]);
            $folder_path = "D:\\pdf";
            $filename = "map_img_".$random_name.".jpeg"; // or image.jpg
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $img_path = $folder_path.'/'.$filename;
            file_put_contents($img_path, $img_data);
            echo $img_path;
        }
    }
}
?>
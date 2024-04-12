<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;

class Email extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('email_form');
    }

    public function send_email(){ 
        // $name = $this->input->post('name');
        // $subject = $this->input->post('subject');
        $subject = "Rainfall Urgent Weather Alert - Unprecedented Rainfall in New Delhi";

        // $message = $this->input->post('message');

        $from_address = "dominic@rimes.int";
        $to_address = "dominicyutes@gmail.com";
        $body = "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title>IMD DSS</title>
</head>

<body>
    <div>
        <div>
        <span>
         <h3>Respected Authority,</h3>
         <p>I trust this message finds you well. We bring to your immediate attention a matter of utmost significance concerning the current weather conditions in New Delhi.</p>
         
         <p>The Indian Meteorological Department (IMD) has detected an unprecedented amount of rainfall in New Delhi, totaling 655mm. This is a matter of great concern as such high levels of precipitation can lead to severe consequences, including potential flooding, traffic disruptions, and other associated hazards.</p>
         
         <p>In light of this, we kindly request your prompt action and coordination with relevant authorities to ensure the safety and well-being of the residents in the affected areas. Timely communication and precautionary measures will be crucial in mitigating any potential risks and minimizing the impact of this exceptional weather event.</p>
         
         <p>Your cooperation and swift response are highly appreciated in this critical situation</p>
         
         <div style='height: 10px;'></div>
         
         <div>
         <h3><With regards,</h3>
         <h3>Indian Meteorological Department (IMD)</h3>
         </div>

        </span>
        </div>
    </div>

    <script src='" . base_url('assets/js/jquery.min.js') . "'></script>
    <script src='" . base_url('assets/js/bootstrap.min.js') . "'></script>
</body>

</html>"; 

$mailer = new PHPMailer(true);
try {
    $mailer->isSMTP();
    $mailer->Host = "smtp-relay.brevo.com";
    $mailer->SMTPAuth = true;
    $mailer->Username = "dominic@rimes.int";
    $mailer->Password = "hHdF6qfWvyDajB87";
    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mailer->Port = 465; 
    $mailer->setFrom($from_address);
    $mailer->addAddress($to_address);
    $mailer->Subject = $subject;
    $mailer->isHTML(true);
    $mailer->Body = $body;
    $mailer->send();
    echo "Your Mail sent successfully";
} catch (Exception $e) {
    echo "Mail Error: " . $mailer->ErrorInfo;
}
    }
}
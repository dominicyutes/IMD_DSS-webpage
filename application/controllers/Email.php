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
        $name = $this->input->post('name');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $from_address = "dominic@rimes.int";
        $to_address = "dominicyutes@gmail.com";
        $body = "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title>IMD DSS</title>
    <link rel='stylesheet' href='" . base_url('assets/css/bootstrap.min.css') . "'>
</head>

<body>
    <div>
        <div>

            <h2>Some one contacted you</h2>
            <br>
            <p>".$name."</p>
            <p>".$subject."</p>
            <p>".$message."</p>

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
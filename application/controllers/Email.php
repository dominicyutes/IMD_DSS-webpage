<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

class Email extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->_check_session();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Email_log_model');
    }

    function _check_session() {
        if (!$this->session->userdata('name')) {
            redirect('login');
        } 
    }

    public function index(){
        $name = '';
       if ($this->session->has_userdata('name')) {
           $name = $this->session->userdata('name');
       }
       $data['name'] = $name;
       
        // $data['result'] = $this->db->select('email_from, email_to, sent, sent_time')->get('email_log')->result_array();
        $this->load->view('Social_media/email_form', $data);
    }

    // email_group table
    public function get_email_groups() {
        $data['email_groups'] = $this->Email_log_model->get_email_groups();
        echo json_encode($data['email_groups']);
    }

    // for ajax dropdown of mc_names
    public function fetch_mc_names() {
        $mc_names = $this->Email_log_model->get_mc_names();
        if (empty($mc_names)) {
            log_message('error', 'No data found in Email_group table.');
        } else {
            log_message('info', 'Data fetched successfully.');
        }
        echo json_encode($mc_names);
    }

    // add new MC-Grp-name to the DD ajax
    public function add_mc_name() {
        $mc_name = $this->input->post('mc_name');
        if (!empty($mc_name)) {
            $result = $this->Email_log_model->insert_mc_name($mc_name);
            if ($result) {
                echo json_encode(array('success' => true));
            } else {
                echo json_encode(array('success' => false, 'message' => 'Failed to add MC name.'));
            }
        } else {
            echo json_encode(array('success' => false, 'message' => 'MC name is empty.'));
        }
    }



    public function get_email_groups_by_mc_name() {
    $mc_name = $this->input->get('mc_name');
    $email_groups = $this->Email_log_model->get_email_groups_by_mc_name($mc_name);
    echo json_encode($email_groups);
    }



    public function send_email() {
      $subject = "Rainfall Urgent Weather Alert - Unprecedented Rainfall in New Delhi";

      $sent = false;
    
      $from_address = "dominic@rimes.int";
      $to_addresses = ["dominicyutes@gmail.com"];
    //   $to_addresses = ["dominicyutes@gmail.com", "dominicyutes05@gmail.com", "tarakesh@rimes.int"];
      $content = "<span>
                      <h3>Respected Authority,</h3>
                      <p>I trust this message finds you well. We bring to your immediate attention a matter of utmost significance concerning the current weather conditions in New Delhi.</p>
  
                      <p>The Indian Meteorological Department (IMD) has detected an unprecedented amount of rainfall in New Delhi, totaling 655mm. This is a matter of great concern as such high levels of precipitation can lead to severe consequences, including potential flooding, traffic disruptions, and other associated hazards.</p>

                      <p>In light of this, we kindly request your prompt action and coordination with relevant authorities to ensure the safety and well-being of the residents in the affected areas. Timely communication and precautionary measures will be crucial in mitigating any potential risks and minimizing the impact of this exceptional weather event.</p>
  
                      <p>Your cooperation and swift response are highly appreciated in this critical situation</p>

                      <div style='height: 10px;'></div>
  
                      <div>
                      <h3>With regards,</h3>
                      <h3>Indian Meteorological Department (IMD)</h3>
                      </div>
                  </span>";
  
      $body = "<!DOCTYPE html>
                <html lang='en'>
  
                <head>
                    <meta charset='utf-8'>
                    <title>IMD DSS</title>
                </head>

                <body>
                    <div>
                      
                        <div>" . $content . "</div>
                      
                    </div>

                    <script src='" . base_url('assets/js/jquery.min.js') . "'></script>
                    <script src='" . base_url('assets/js/bootstrap.min.js') . "'></script>
                </body>

                </html>"; 

      $mailer = new PHPMailer(true);
      try {
          $mailer->isSMTP();
          $mailer->Host = "smtp.gmail.com";
          $mailer->SMTPAuth = true;
          $mailer->Username = "dominic@rimes.int";
          $mailer->Password = "oowdfikelxnchsqx";
          $mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
          $mailer->Port = 465; 
          $mailer->setFrom($from_address);

          foreach ($to_addresses as $to_address) {
              $mailer->addAddress($to_address);
          }

          $mailer->addCC("dominicyutes05@gmail.com");
  
          $mailer->Subject = $subject;
          $mailer->isHTML(true);
          $mailer->Body = $body;

          // Enable debugging
          $mailer->SMTPDebug = 2; 

          $mailer->send();

          $sent = true;
          $this->insert_email_log($from_address, $to_addresses, $sent);
          echo "Your Mail sent successfully";

      } catch (Exception $e) {
          $sent = false;
          $this->insert_email_log($from_address, $to_addresses, $sent);
        
          echo "Mail Error: " . $mailer->ErrorInfo;
      }
    }

     private function insert_email_log($from_address, $to_addresses, $sent) {
         $this->load->database();
         $this->db->insert('email_log', array(
             'email_from' => $from_address,
             'email_to' => implode(", ", $to_addresses),
             'sent' => $sent ? "True" : "False" 
         ));
     }

     public function show_logInfo() {
        $name = '';
         if ($this->session->has_userdata('name')) {
           $name = $this->session->userdata('name');
         }
         $data['name'] = $name; 
         
        $this->load->model('Email_log_model');
        $data['result'] = $this->Email_log_model->get_email_logs();
        $this->load->view('Social_media/email_log_view', $data);
     }

     public function get_emails() {
        $group_name = $this->input->post('group_name');
        $this->load->model('Email_log_model');
        $emails = $this->Email_log_model->get_emails_by_group($group_name);
        echo json_encode($emails);
    }

    
}
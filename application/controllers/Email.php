<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

class Email extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->_check_session();
        $this->load->helper('url');
        $this->load->helper('path');
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


    // ***********************************//

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


    // using for DD2 and DD3
    public function get_email_groups_by_mc_name() {
       $mc_name = $this->input->get('mc_name');
       $email_groups = $this->Email_log_model->get_email_groups_by_mc_name($mc_name);
       echo json_encode($email_groups);
    }

    // based Choose grp selection, email will be listed 
    public function get_email_by_group() {
       $mc_name = $this->input->get('mc_name');
       $group = $this->input->get('group');
       $this->load->model('Email_log_model');
       $emails = $this->Email_log_model->get_email_by_mc_name_and_group($mc_name, $group);
       echo json_encode($emails);
    }

    //deleting email in existing grp
    public function delete_email() {
       $email = $this->input->post('email');
       $mc_name = $this->input->post('mc_name');
       $groups = $this->input->post('groups');

       $this->load->model('Email_log_model');
       $success = $this->Email_log_model->delete_email($mc_name, $groups, $email);

       echo json_encode(['success' => $success]);
    }

    // Existing group add email
    public function add_email() {
        $data = json_decode(file_get_contents('php://input'), true);

        if (isset($data['mc_name']) && isset($data['groups']) && isset($data['email'])) {
            $insert_data = array(
                'mc_name' => $data['mc_name'],
                'groups' => $data['groups'],
                'email' => $data['email']
            );

            $this->Email_log_model->insert_email($insert_data);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['status' => 'success']));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['status' => 'error', 'message' => 'Invalid data']));
        }
    }

    // 
    public function add_new_group_email() {
        $data = json_decode(file_get_contents('php://input'), true);

        $mc_name = $data['mc_name'];
        $groups = $data['groups'];
        $email = $data['email'];
        $auto_email = $data['auto_email'];

        $this->load->model('Email_log_model');
        $response = $this->Email_log_model->add_new_group_email($mc_name, $groups, $email, $auto_email);

        echo json_encode(['success' => $response]);
    }

    //for 2nd DD checkbox, T or F
    public function update_checkbox_status() {
         $mc_name = $this->input->post('mc_name');
         $group_name = $this->input->post('group_name');
         $column_name = $this->input->post('column_name');
         $is_checked = $this->input->post('is_checked');

         // Convert to boolean
         $is_checked = $is_checked == 1 ? true : false;

         $this->load->model('Email_log_model');
         $success = $this->Email_log_model->update_checkbox_status($mc_name, $group_name, $column_name, $is_checked);

         if ($success) {
             echo json_encode(['success' => true]);
         } else {
             echo json_encode(['success' => false]);
         }
     }

     // Controller method to update main_AutoEmail in email_group table
     public function update_main_auto_email() {
    $state = $this->input->post('state'); 
    $mainAutoEmailValue = ($state === 'true') ? true : false;

    $this->load->model('Email_log_model');
    
    $success = $this->Email_log_model->updateMainAutoEmailAll($mainAutoEmailValue);

    if ($success) {
        if ($mainAutoEmailValue) {
            // Fetch emails where auto_email is true
            $emails = $this->Email_log_model->getEmailsWithAutoEmail();
            echo json_encode(['success' => true, 'emails' => $emails]);
        } else {
            echo json_encode(['success' => true]);
        }
    } else {
        echo json_encode(['success' => false]);
    }
}

     
    // ***********************************//



    // **************  EMAIL LOG STARTS HERE *****************//
    public function send_email() {
         $subject = $this->input->post('subject');
         $message = $this->input->post('message');
         $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx|txt';
         $config['upload_path'] = './uploads';
         $this->load->library('upload', $config);
         $config['max_size'] = 35840; // 35MB in kilobytes

         $sent = false;
         $from_address = "dominic@rimes.int";
         $to_addresses_str = json_decode($this->input->post('getEmailFromGrp'), true);

         if (is_array($to_addresses_str)) {
             $to_addresses = implode(', ', $to_addresses_str);
         } else {
             echo "Invalid email addresses";
             return;
         }

         $body = "<!DOCTYPE html>
                 <html lang='en'>
                 <head><meta charset='utf-8'></head>
                 <body>
                     <div>$message</div>
                     <div style='height: 10px;'></div>
                     <div>
                       <h3>With regards,</h3>
                       <h3>Indian Meteorological Department (IMD)</h3>
                     </div>
                 </body>
                 </html>";

         $mailer = new PHPMailer(true);
         $file_names = []; // To store the names of uploaded files

         try {
             $mailer->isSMTP();
             $mailer->Host = "smtp.gmail.com";
             $mailer->SMTPAuth = true;
             $mailer->Username = "dominic@rimes.int";
             $mailer->Password = "oowdfikelxnchsqx";
             $mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
             $mailer->Port = 465;
             $mailer->setFrom($from_address);

             foreach ($to_addresses_str as $to_address) {
                 $mailer->addAddress($to_address);
             }
     
             if (isset($_FILES['files'])) {
                 foreach ($_FILES['files']['name'] as $key => $filename) {
                     if ($_FILES['files']['error'][$key] === UPLOAD_ERR_OK) {
                         $_FILES['userfile']['name'] = $_FILES['files']['name'][$key];
                         $_FILES['userfile']['type'] = $_FILES['files']['type'][$key];
                         $_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$key];
                         $_FILES['userfile']['error'] = $_FILES['files']['error'][$key];
                         $_FILES['userfile']['size'] = $_FILES['files']['size'][$key];

                         // Upload file
                         if ($this->upload->do_upload('userfile')) {
                             $file_data = $this->upload->data();
                             $file_path = $file_data['full_path'];
                             $file_names[] = $file_data['file_name']; // Store the file name
     
                             // Attach file to email
                             $mailer->addAttachment($file_path, $file_data['file_name'], 'base64', $file_data['file_type']);
                         } else {
                             echo $this->upload->display_errors();
                         }
                     }
                 }
             }

             $mailer->Subject = $subject;
             $mailer->isHTML(true);
             $mailer->Body = $body;
             $mailer->SMTPDebug = 2;
     
             $mailer->send();
             $sent = true;

         } catch (Exception $e) {
             echo "Mail Error: " . $mailer->ErrorInfo;
         }

         //
         $this->insert_email_log($from_address, $to_addresses_str, $sent, $file_names);
    }

    private function insert_email_log($from_address, $to_addresses, $sent, $file_names = []) {
         $this->load->database();
         $data = array(
             'email_from' => $from_address,
             'email_to' => implode(", ", $to_addresses),
             'sent' => $sent ? "True" : "False",
             'file_name' => implode(", ", $file_names) // Store the file names
         );
         $this->db->insert('email_log', $data);
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
    // **************  EMAIL LOG ENDS HERE *****************//
    
}
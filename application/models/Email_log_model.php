<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_log_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_email_log($from_address, $to_address, $sent) {
        $this->db->insert('email_log', array(
            'email_from' => $from_address,
            'email_to' => $to_address,
            'sent' => $sent
        ));
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_log_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    // for AJAX DD only mc_names
    public function get_mc_names() {
        $this->db->select('mc_name');
        $query = $this->db->get('email_group');
        return $query->result_array();
    }

    // geting groups and autoemail based on MC_NAME avlue
    public function get_email_groups_by_mc_name($mc_name) {
        $this->db->select('groups, auto_email');
        $this->db->where('mc_name', $mc_name);
        $query = $this->db->get('email_group');
        return $query->result_array();
    }

    // fetching emails, based on Groups column 
    public function get_email_by_group($group) {
        $this->db->select('email');
        $this->db->from('email_group');
        $this->db->where('groups', $group);
        $query = $this->db->get();
        return $query->result_array();  
    }






    // **************  EMAIL LOG STARTS HERE *****************//

    public function get_email_logs() {
      return $this->db->select('email_from, email_to, sent, sent_time')->get('email_log')->result_array();
    }

    public function insert_email_log($from_address, $to_address, $sent) {
       $data = array(
            'email_from' => $from_address,
            'email_to' => implode(", ", $to_addresses),
            'sent' => $sent
        );

        $this->db->insert('email_log', $data);
    }

    public function get_emails_by_group($group_name) {
        $query = $this->db->get_where('groupemail', array('group_name' => $group_name));
        $result = $query->result();
        $emails = array();
        foreach ($result as $row) {
            $emails[] = $row->email;
        }
        return $emails;
    }

    // **************  EMAIL LOG ENDS HERE *****************//
}
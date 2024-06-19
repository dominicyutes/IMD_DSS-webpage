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
        $this->db->select('groups, auto_email, groups_checkbox');
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

    public function get_email_by_mc_name_and_group($mc_name, $group) {
       $this->db->select('email');
       $this->db->from('email_group');
       $this->db->where('mc_name', $mc_name);
       $this->db->where('groups', $group);
       $query = $this->db->get();
       return $query->result_array();
    }

    // X deleting email 
    public function delete_email($mc_name, $groups, $email) {
       $this->db->where('mc_name', $mc_name);
       $this->db->where('groups', $groups);
       $this->db->where('email', $email);
       return $this->db->delete('email_group');
    }
    //
    
    // new group
    public function add_new_group_email($mc_name, $groups, $email, $auto_email) {
        $data = [
            'mc_name' => $mc_name,
            'groups' => $groups,
            'email' => $email,
            'auto_email' => $auto_email
        ];

        return $this->db->insert('email_group', $data);
    }


    // Existing group add email
    public function insert_email($data) {
        $this->db->insert('email_group', $data);
    }

    //mc_name and group_name true or false // DD2
    public function update_checkbox_status($mc_name, $group_name, $column_name, $is_checked) {
       $data = [$column_name => $is_checked];

       $this->db->where('mc_name', $mc_name);
       $this->db->where('groups', $group_name);
       return $this->db->update('email_group', $data);
    }

    // update main_AutoEmail (input checkbox)
    public function updateMainAutoEmailAll($mainAutoEmailValue) {
        $data = ['main_autoemail' => $mainAutoEmailValue];
        $this->db->update('email_group', $data);
        
        return ($this->db->affected_rows() > 0);
    }

    // click main_AutoEmail, pulling email [auto] 
    public function getEmailsWithAutoEmail() {
       $this->db->select('email');
       $this->db->from('email_group');
       $this->db->where('auto_email', true);
       $query = $this->db->get();
    
       return $query->result_array();
    }





    // **************  EMAIL LOG STARTS HERE *****************//

    public function get_email_logs() {
        return $this->db->select('email_from, email_to, sent, sent_time, file_name') // Include file_name
                    ->order_by('email_id', 'DESC')
                    ->get('email_log')
                    ->result_array();
    }

    public function insert_email_log($from_address, $to_addresses, $sent, $file_names = []) {
        if (!empty($to_addresses)) {
            $to_address_string = implode(", ", $to_addresses);
            $data = array(
                'email_from' => $from_address,
                'email_to' => $to_address_string,
                'sent' => $sent,
                'file_name' => implode(", ", $file_names) // Store the file names
            );
            $this->db->insert('email_log', $data);
        } else {
            echo "No valid email addresses to log";
        }
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
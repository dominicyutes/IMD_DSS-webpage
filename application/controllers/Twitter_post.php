<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter_post extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
       $this->load->view('Social_media/twitter_view');
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		header("Access-Control-Allow-Origin: http://weather-imd-test.rimes.int");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
		$this->load->view('HomePage/homePage');
	}
}
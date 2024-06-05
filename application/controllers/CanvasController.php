<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CanvasController extends CI_Controller {

    public function index()
    {
        // Load your HTML view
        $this->load->view('HomePage\homePage');
    }

    public function getImage($imageName)
    {
        // Serve images from the 'images' directory
        $path = APPPATH . 'images/' . $imageName;

        if (file_exists($path)) {
            $this->output->set_content_type(get_mime_by_extension($path));
            $this->output->set_output(file_get_contents($path));
        } else {
            show_404();
        }
    }
}

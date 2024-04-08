<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends CI_Controller {
    
    public function newpage() {
        
        // Initialize base URL for new page
        $newPageUrl = base_url('HomePage/homePage');
        
        // Redirect to the new page
        redirect($newPageUrl);
    }
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct() {
        parent::__construct();
        //Hide error
        //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $this->load->library('TCPdf_pdf');
        
    }
	//testinglisdljvbsahvb
	public function index()
	{
		header("Access-Control-Allow-Origin: http://weather-imd-test.rimes.int");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
		$this->load->view('HomePage/homePage');
	}
	public function saveReportImg(){
        if(!empty($_POST)){
            $baseFromJavascript = $_POST['base64'];
            $random_name = $_POST['r_file_name']; 
            $base_to_php = explode(',', $baseFromJavascript);
            $img_data = base64_decode($base_to_php[1]);
            $folder_path = "pdf";
            $filename = "map_img_".$random_name.".jpeg"; // or image.jpg
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $img_path = $folder_path.'/'.$filename;
            file_put_contents($img_path, $img_data);
            #echo $filename; exit;
           $output = $this->generate_report($filename);
           echo $output; exit;
           
        }
    }

	public function generate_report($image_name){
        //print_r($data);
		//echo $data;
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $pdf = new TCPdf_pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        
        // set default header data
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);
        $pdf->AddPage();
        
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        //print_r($data);
        $data['image'] = $image_name;
        $html = $this->load->view('HomePage/pdfReport',$data,true);
      # print_r($html,1);
         $pdf->writeHTML($html, true, false, true, false, '');
         $_pata = '/pdf/imd'.date('d-m-Y').'_'.date('H-i-s').'.pdf';
         $pdf->Output(FCPATH.$_pata, 'F');
		 return $_pata;
         exit;
    }
	public function test(){
		$this->load->view('HomePage/pdfReport');
	}
}
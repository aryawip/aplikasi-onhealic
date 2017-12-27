<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Infoantrian extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('AntrianModel'); // Load AntrianModel ke controller ini
  }
  
  public function index(){
    $data['antrian'] = $this->AntrianModel->view();
    $this->load->view('frontend/infoantrian', $data);
  }

  public function search(){
  	$dpasien = $this->input->post('search');
  	if (isset($dpasien) and !empty($dpasien)) {
  		$data['antrian'] = $this->AntrianModel->search($dpasien);
  		$this->load->view('frontend/infoantrian', $data);
  	}else{
  		redirect('infoantrian');
  	}
  }

}
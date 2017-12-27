<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Klinikp extends CI_Controller {

	public function __construct(){
    parent::__construct();
    
    $this->load->model('DokterModel'); // Load DokterModel ke controller ini
  }
  
  public function index(){
    $data['dokter'] = $this->DokterModel->view();
    $this->load->view('frontend/klinik', $data);
  }
  
}
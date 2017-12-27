<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Layanan extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('OutpatientModel'); // Load OutpatientModel ke controller ini
  }
  
  public function index(){
    $data['outpatient'] = $this->OutpatientModel->view();
    $this->load->view('frontend/layanan', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->OutpatientModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->OutpatientModel->save(); // Panggil fungsi save() yang ada di OutpatientModel.php
        redirect('layanan');
      }
    }
    
    $this->load->view('layanan');
  }

}
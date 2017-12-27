<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Outpatient extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('OutpatientModel'); // Load OutpatientModel ke controller ini
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }
  }
  
  public function index(){
    $data['outpatient'] = $this->OutpatientModel->view();
    $this->load->view('outpatient/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->OutpatientModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->OutpatientModel->save(); // Panggil fungsi save() yang ada di OutpatientModel.php
        redirect('outpatient');
      }
    }
    
    $this->load->view('outpatient/form_tambah');
  }
  
  public function ubah($no_ktp){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->OutpatientModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->OutpatientModel->edit($no_ktp); // Panggil fungsi edit() yang ada di OutpatientModel.php
        redirect('outpatient');
      }
    }
    
    $data['outpatient'] = $this->OutpatientModel->view_by($no_ktp);
    $this->load->view('outpatient/form_ubah', $data);
  }
  
  public function hapus($no_ktp){
    $this->OutpatientModel->delete($no_ktp); // Panggil fungsi delete() yang ada di OutpatientModel.php
    redirect('outpatient');
  }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dokter extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('DokterModel'); // Load DokterModel ke controller ini
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }
  }
  
  public function index(){
    $data['dokter'] = $this->DokterModel->view();
    $this->load->view('dokter/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->DokterModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->DokterModel->save(); // Panggil fungsi save() yang ada di DokterModel.php
        redirect('dokter');
      }
    }
    
    $this->load->view('dokter/form_tambah');
  }
  
  public function ubah($id_dokter){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->DokterModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->DokterModel->edit($id_dokter); // Panggil fungsi edit() yang ada di DokterModel.php
        redirect('dokter');
      }
    }
    
    $data['dokter'] = $this->DokterModel->view_by($id_dokter);
    $this->load->view('dokter/form_ubah', $data);
  }
  
  public function hapus($id_dokter){
    $this->DokterModel->delete($id_dokter); // Panggil fungsi delete() yang ada di DokterModel.php
    redirect('dokter');
  }
}
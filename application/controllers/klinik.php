<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Klinik extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('KlinikModel'); // Load KlinikModel ke controller ini
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }
  }
  
  public function index(){
    $data['klinik'] = $this->KlinikModel->view();
    $this->load->view('klinik/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->KlinikModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->KlinikModel->save(); // Panggil fungsi save() yang ada di KlinikModel.php
        redirect('klinik');
      }
    }
    
    $this->load->view('klinik/form_tambah');
  }
  
  public function ubah($kode_klinik){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->KlinikModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->KlinikModel->edit($kode_klinik); // Panggil fungsi edit() yang ada di KlinikModel.php
        redirect('klinik');
      }
    }
    
    $data['klinik'] = $this->KlinikModel->view_by($kode_klinik);
    $this->load->view('klinik/form_ubah', $data);
  }
  
  public function hapus($kode_klinik){
    $this->KlinikModel->delete($kode_klinik); // Panggil fungsi delete() yang ada di KlinikModel.php
    redirect('klinik');
  }

}
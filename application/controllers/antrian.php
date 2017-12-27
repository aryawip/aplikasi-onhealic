<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Antrian extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('AntrianModel'); // Load AntrianModel ke controller ini
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }
  }
  
  public function index(){
    $data['antrian'] = $this->AntrianModel->view();
    $this->load->view('antrian/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->AntrianModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AntrianModel->save(); // Panggil fungsi save() yang ada di AntrianModel.php
        redirect('antrian');
      }
    }
    
    $this->load->view('antrian/form_tambah');
  }
  
  public function ubah($no_antrian){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->AntrianModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AntrianModel->edit($no_ktp); // Panggil fungsi edit() yang ada di AntrianModel.php
        redirect('antrian');
      }
    }
    
    $data['antrian'] = $this->AntrianModel->view_by($no_antrian);
    $this->load->view('antrian/form_ubah', $data);
  }
  
  public function hapus($no_antrian){
    $this->AntrianModel->delete($no_antrian); // Panggil fungsi delete() yang ada di AntrianModel.php
    redirect('antrian');
  }
}
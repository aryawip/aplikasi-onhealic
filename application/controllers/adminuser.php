<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminUser extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('AdminModel'); // Load AdminModel ke controller ini
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }
  }
  
  public function index(){
    $data['admin'] = $this->AdminModel->view();
    $this->load->view('admin/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->AdminModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AdminModel->save(); // Panggil fungsi save() yang ada di AdminModel.php
        redirect('adminuser');
      }
    }
    
    $this->load->view('admin/form_tambah');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->AdminModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AdminModel->edit($id); // Panggil fungsi edit() yang ada di AdminModel.php
        redirect('adminuser');
      }
    }
    
    $data['admin'] = $this->AdminModel->view_by($id);
    $this->load->view('admin/form_ubah', $data);
  }
  
  public function hapus($id){
    $this->AdminModel->delete($id); // Panggil fungsi delete() yang ada di AdminModel.php
    redirect('adminuser');
  }
}
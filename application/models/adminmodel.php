<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminModel extends CI_Model {
  // Fungsi untuk menampilkan semua data admin
  public function view(){
    return $this->db->get('admin')->result();
  }
  
  // Fungsi untuk menampilkan data admin berdasarkan kode nya
  public function view_by($id){
    $this->db->where('admin', $id);
    return $this->db->get('admin')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, ID tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data admin saja
    if($mode == "save")
    $this->form_validation->set_rules('input_username', 'Username', 'required|max_length[50]');
    $this->form_validation->set_rules('input_password', 'Password', 'required|max_length[50]');
    
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel admin
  public function save(){
    $data = array(
      "username" => $this->input->post('input_username'),
      "password" => $this->input->post('input_password')
      );
    
    $this->db->insert('admin', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data admin berdasarkan ID admin
  public function edit($id){
    $data = array(
      "username" => $this->input->post('input_username'),
      "password" => $this->input->post('input_password')
      );
    
    $this->db->where('id', $id);
    $this->db->update('admin', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data admin berdasarkan ID admin
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('admin'); // Untuk mengeksekusi perintah delete data
  }
}
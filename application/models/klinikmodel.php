<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class KlinikModel extends CI_Model {
  // Fungsi untuk menampilkan semua data klinik
  public function view(){
    return $this->db->get('klinik')->result();
  }
  
  // Fungsi untuk menampilkan data klinik berdasarkan kode nya
  public function view_by($kode_klinik){
    $this->db->where('kode_klinik', $kode_klinik);
    return $this->db->get('klinik')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, Kode tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data klinik saja
    if($mode == "save")
      $this->form_validation->set_rules('input_kode', 'Kode', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');

      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel klinik
  public function save(){
    $data = array(
      "kode_klinik" => $this->input->post('input_kode'),
      "nama_klinik" => $this->input->post('input_nama')
      );
    
    $this->db->insert('klinik', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data klinik berdasarkan Kode siswa
  public function edit($kode_klinik){
    $data = array(
      "nama_klinik" => $this->input->post('input_nama'),
    );
    
    $this->db->where('kode_klinik', $kode_klinik);
    $this->db->update('klinik', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data klinik berdasarkan KOde klinik
  public function delete($kode_klinik){
    $this->db->where('kode_klinik', $kode_klinik);
    $this->db->delete('klinik'); // Untuk mengeksekusi perintah delete data
  }
}
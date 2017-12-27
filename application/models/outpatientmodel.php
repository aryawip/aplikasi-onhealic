<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class OutpatientModel extends CI_Model {
  // Fungsi untuk menampilkan semua data outpatient
  public function view(){
    return $this->db->get('outpatient')->result();
  }
  
  // Fungsi untuk menampilkan data outpatient berdasarkan kode nya
  public function view_by($no_ktp){
    $this->db->where('no_ktp', $no_ktp);
    return $this->db->get('outpatient')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NO KTP tidak harus divalidasi
    // Jadi NO KTP di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
    $this->form_validation->set_rules('input_ktp', 'NIK', 'required|numeric|max_length[16]');
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_tgl', 'Tanggal Lahir', 'required|date');
    $this->form_validation->set_rules('input_jk', 'Jenis Kelamin', 'required|max_length[50]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required|max_length[150]');
    $this->form_validation->set_rules('input_telp', 'No Telepon', 'required|max_length[12]');
    $this->form_validation->set_rules('input_keluhan', 'Keluhan', 'required|max_length[150]');
    $this->form_validation->set_rules('input_dokter', 'ID Dokter', 'required|numeric|max_length[11]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel outpatient
  public function save(){
    $data = array(
      "no_ktp" => $this->input->post('input_ktp'),
      "nama" => $this->input->post('input_nama'),
      "tanggal_lahir" => $this->input->post('input_tgl'),
      "jenis_kelamin" => $this->input->post('input_jk'),
      "alamat" => $this->input->post('input_alamat'),
      "no_telp" => $this->input->post('input_telp'),
      "keluhan" => $this->input->post('input_keluhan'),
      "ddokter" => $this->input->post('input_dokter')
      );
    
    $this->db->insert('outpatient', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NO KTP siswa
  public function edit($no_ktp){
    $data = array(
      "no_ktp" => $this->input->post('input_ktp'),
      "nama" => $this->input->post('input_nama'),
      "tanggal_lahir" => $this->input->post('input_tgl'),
      "jenis_kelamin" => $this->input->post('input_jk'),
      "alamat" => $this->input->post('input_alamat'),
      "no_telp" => $this->input->post('input_telp'),
      "keluhan" => $this->input->post('input_keluhan'),
      "ddokter" => $this->input->post('input_dokter')
      );
    
    $this->db->where('no_ktp', $no_ktp);
    $this->db->update('outpatient', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data outpatient berdasarkan NO KTP siswa
  public function delete($no_ktp){
    $this->db->where('no_ktp', $no_ktp);
    $this->db->delete('outpatient'); // Untuk mengeksekusi perintah delete data
  }
}
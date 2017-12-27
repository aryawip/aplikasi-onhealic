<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DokterModel extends CI_Model {
  // Fungsi untuk menampilkan semua data dokter
  public function view(){
    return $this->db->get('dokter')->result();
  }
  
  // Fungsi untuk menampilkan data dokter berdasarkan kode nya
  public function view_by($id_dokter){
    $this->db->where('id_dokter', $id_dokter);
    return $this->db->get('dokter')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, ID tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data dokter saja
    if($mode == "save")
    $this->form_validation->set_rules('input_id', 'ID', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_senin', 'Senin', 'required|time');
    $this->form_validation->set_rules('input_selasa', 'Selasa', 'required|time');
    $this->form_validation->set_rules('input_rabu', 'Rabu', 'required|time');
    $this->form_validation->set_rules('input_kamis', 'Kamis', 'required|time');
    $this->form_validation->set_rules('input_jumat', 'Jumat', 'required|time');
    $this->form_validation->set_rules('input_sabtu', 'Sabtu', 'required|time');
    $this->form_validation->set_rules('input_minggu', 'Minggu', 'required|time');
    $this->form_validation->set_rules('input_klinik', 'Klinik', 'required|numeric|max_length[11]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel dokter
  public function save(){
    $data = array(
      "id_dokter" => $this->input->post('input_id'),
      "nama_dokter" => $this->input->post('input_nama'),
      "senin" => $this->input->post('input_senin'),
      "selasa" => $this->input->post('input_selasa'),
      "rabu" => $this->input->post('input_rabu'),
      "kamis" => $this->input->post('input_kamis'),
      "jumat" => $this->input->post('input_jumat'),
      "sabtu" => $this->input->post('input_sabtu'),
      "minggu" => $this->input->post('input_minggu'),
      "dklinik" => $this->input->post('input_klinik')
      );
    
    $this->db->insert('dokter', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data dokter berdasarkan ID dokter
  public function edit($id_dokter){
    $data = array(
      "id_dokter" => $this->input->post('input_id'),
      "nama_dokter" => $this->input->post('input_nama'),
      "senin" => $this->input->post('input_senin'),
      "selasa" => $this->input->post('input_selasa'),
      "rabu" => $this->input->post('input_rabu'),
      "kamis" => $this->input->post('input_kamis'),
      "jumat" => $this->input->post('input_jumat'),
      "sabtu" => $this->input->post('input_sabtu'),
      "minggu" => $this->input->post('input_minggu'),
      "dklinik" => $this->input->post('input_klinik')
    );
    
    $this->db->where('id_dokter', $id_dokter);
    $this->db->update('dokter', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data dokter berdasarkan ID dokter
  public function delete($id_dokter){
    $this->db->where('id_dokter', $id_dokter);
    $this->db->delete('dokter'); // Untuk mengeksekusi perintah delete data
  }
}
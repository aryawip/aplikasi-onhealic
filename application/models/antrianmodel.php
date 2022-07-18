<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AntrianModel extends CI_Model {
  // Fungsi untuk menampilkan semua data antrian
  public function view(){
    return $this->db->get('antrian')->result();
  }
  
  // Fungsi untuk menampilkan data antrian berdasarkan kode nya
  public function view_by($no_antrian){
    $this->db->where('no_antrian', $no_antrian);
    return $this->db->get('antrian')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NO tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data antrian saja
    if($mode == "save")
    $this->form_validation->set_rules('input_no', 'No Antrian', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('input_jam', 'Jam', 'required|time');
    $this->form_validation->set_rules('input_status', 'Status', 'required|max_length[50]');
    $this->form_validation->set_rules('input_dokter', 'ID Dokter', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('input_pasien', 'NIK Pasien', 'required|numeric|max_length[11]');
    
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel antrian
  public function save(){
    $data = array(
      "no_antrian" => $this->input->post('input_no'),
      "jam_antri" => $this->input->post('input_jam'),
      "status" => $this->input->post('input_status'),
      "ddokter" => $this->input->post('input_dokter'),
      "dpasien" => $this->input->post('input_pasien')
      );
    
    $this->db->insert('antrian', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NO antrian
  public function edit($no_antrian){
    $data = array(
      "no_antrian" => $this->input->post('input_no'),
      "jam_antri" => $this->input->post('input_jam'),
      "status" => $this->input->post('input_status'),
      "ddokter" => $this->input->post('input_dokter'),
      "dpasien" => $this->input->post('input_pasien')
      );
    
    $this->db->where('no_antrian', $no_antrian);
    $this->db->update('antrian', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data antrian berdasarkan NO antrian
  public function delete($no_antrian){
    $this->db->where('no_antrian', $no_antrian);
    $this->db->delete('antrian'); // Untuk mengeksekusi perintah delete data
  }

  public function search($dpasien){
    $this->db->select('*');
    $this->db->from('antrian');
    $this->db->like('dpasien',$dpasien);
    $query = $this->db->get('');
    if ($query->num_rows()>0) {
      return $query->result();
    } else{
      return $query->result();
    }
  }
}
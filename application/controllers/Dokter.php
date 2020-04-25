<?php
 // write your name and student id here
class Dokter extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  //load model "Mahasiswa_model"
  $this->load->model('M_dokter');
  //load library form validation
  $this->load->library('form_validation');
  //load library upload photo 
  $this->load->library('upload');
 }

 public function index() {
    $data['judul']            = 'Daftar Dokter';
    $data['tbl_dokter']       = $this->M_dokter->getAllDokter();
    $data['jenis_kelamin']    = ['Laki-Laki', 'Perempuan'];
    if ($this->input->post('keyword')) {
        $data['tbl_dokter'] = $this->M_dokter->cariDataDokter();
    }
    $this->load->view('v_dokter', $data);
 }

 public function search (){
      $keyword            = $this->input->post('keyword');
      $data['tbl_dokter'] =$this->M_dokter->cariDataDokter($keyword);
      $this->load->view('v_dokter',$data);
}

 public function tambah_action() {
    $nama              = $this->input->post('nama');
    $jenis_kelamin     = $this->input->post('jenis_kelamin');
    $umur              = $this->input->post('umur');
    $agama             = $this->input->post('agama');
    $no_hp             = $this->input->post('no_hp');
    $spesialis         = $this->input->post('spesialis');
    $no_izin_praktik   = $this->input->post('no_izin_praktik');
    $hari_praktik      = $this->input->post('hari_praktik');
    $tanggal_praktik   = $this->input->post('tanggal_praktik');
    $jam_praktik       = $this->input->post('jam_praktik');

    $config['upload_path']          = './upload/dokter/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000; // 1MB
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('foto')) {
      // $this->session->set_flashdata('message',  $this->upload->display_errors())
      echo $this->upload->display_errors();
    } else{
      $foto = $this->upload->data('file_name');   
      $data = array(
        "nama"            => $nama,
        "jenis_kelamin"   => $jenis_kelamin,
        "umur"            => $umur,
        "agama"           => $agama,
        "no_hp"           => $no_hp,
        "spesialis"       => $spesialis,
        "no_izin_praktik" => $no_izin_praktik,
        "hari_praktik"    => $hari_praktik,
        "tanggal_praktik" => $tanggal_praktik,
        "jam_praktik"     => $jam_praktik,
        "foto"            => $foto
      );
      $this->M_dokter->tambahDataDokter($data, 'tbl_dokter');
      redirect('dokter/index');
    }

    // $this->M_dokter->tambahDataDokter($data);

    // $this->session->set_flashdata('message', 'data berhasil dimasukkan');
    // redirect('dokter/index');
 }

 public function hapus($kode_dokter)
 {
  //call method hapusDataMahasiswa with parameter id from mahasiswa_model
  $this->M_dokter->hapusDataDokter($kode_dokter);

  //use flashdata to show alert "dihapus"
  $this->session->set_flashdata('flash', 'dihapus');

  //back to controller mahasiswa
  redirect('dokter/index');

 }

 public function ubah($kode_dokter)
 {
  $data = [
    "nama"              => $this->input->post('nama'),
    "jenis_kelamin"     => $this->input->post('jenis_kelamin'),
    "umur"              => $this->input->post('umur'),
    "agama"             => $this->input->post('agama'),
    "no_hp"             => $this->input->post('no_hp'),
    "spesialis"         => $this->input->post('spesialis'),
    "no_izin_praktik"   => $this->input->post('no_izin_praktik'),
    "hari_praktik"      => $this->input->post('hari_praktik'),
    "tanggal_praktik"   => $this->input->post('tanggal_praktik'),
    "jam_praktik"       => $this->input->post('jam_praktik')
  ];
  $this->M_dokter->ubahDataDokter($data, $kode_dokter);
  redirect('dokter/index');

 }
}

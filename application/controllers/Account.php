<?php
 // write your name and student id here
class Account extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  //load model "Mahasiswa_model"
  $this->load->model('M_account');
  //load library form validation
  $this->load->library('form_validation');
  //load library upload photo 
  $this->load->library('upload');
 }

 public function index() {
    $data['judul']            = 'Data Diri';
    $data['tbl_pasien']       = $this->M_account->getAllDataDiri();
    $data['jenis_kelamin']    = ['Laki-Laki', 'Perempuan'];

    $this->load->view('v_account', $data);
 }

 public function tambah_action() {
    $nama_pasien               = $this->input->post('nama_pasien');
    $jenis_kelamin             = $this->input->post('jenis_kelamin');
    $tempat_lahir              = $this->input->post('tempat_lahir');
    $tanggal_lahir             = $this->input->post('tanggal_lahir');
    $umur                      = $this->input->post('umur');
    $agama                     = $this->input->post('agama');
    $no_hp                     = $this->input->post('no_hp');
    $alamat                    = $this->input->post('alamat');

    $config['upload_path']          = './upload/pasien/';
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
        
        "nama_pasien"     => $nama_pasien,
        "jenis_kelamin"   => $jenis_kelamin,
        "tempat_lahir"    => $tempat_lahir,
        "tanggal_lahir"   => $tanggal_lahir,
        "umur"            => $umur,
        "agama"           => $agama,
        "no_hp"           => $no_hp,
        "alamat"          => $alamat,
        "foto"            => $foto, 
      );
      $this->M_account->tambahDataDiri($data, 'tbl_pasien');
      redirect('account/index');
    }

 }

 
 public function ubah($kode_dokter)
 {
  $data = [
    "nama"              => $this->input->post('nama'),
    "jenis_kelamin"     => $this->input->post('jenis_kelamin'),
    "tempat_lahir"     => $this->input->post('tempat_lahir'),
    "tanggal_lahir"     => $this->input->post('tanggal_lahir'),
    "umur"              => $this->input->post('umur'),
    "agama"             => $this->input->post('agama'),
    "no_hp"             => $this->input->post('no_hp'),
    "alamat"            => $this->input->post('alamat'),
    
  ];
  
  $this->M_dokter->ubahDataDokter($kondisi, $data);
  redirect('account/index');
 }
}


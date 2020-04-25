<?php
 // write your name and student id here
class Obat extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //load model "Mahasiswa_model"
    $this->load->model('M_obat');
    //load library form validation
    $this->load->library('form_validation');
    //load library upload photo 
    $this->load->library('upload');
  }


  public function index() {
    $data['judul'] = 'Daftar Obat';
    $data['tbl_obat'] = $this->M_obat->getAllObat();
    if ($this->input->post('keyword')) {
        $data['tbl_obat'] = $this->M_obat->cariDataObat();
    }
    $this->load->view('v_obat', $data);
  }

  public function tambah_action() {
    $namaobat         = $this->input->post('namaobat');
    $kategoriobat     = $this->input->post('kategoriobat');
    $keterangan       = $this->input->post('keterangan');
    $harga            = $this->input->post('harga');
    $stockobat        = $this->input->post('stockobat');

    $config['upload_path']          = './upload/obat/';
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
        "namaobat"       => $namaobat,
        "kategoriobat"   => $kategoriobat,
        "keterangan"     => $keterangan,
        "harga"           => $harga,
        "stockobat"       => $stockobat,
        'foto'            => $foto
      );

      $this->M_obat->tambahDataObat($data, 'tbl_obat');
      redirect('obat/index');
    }
  }
  

  public function hapus($kode_obat)
  {
    //call method hapusDataMahasiswa with parameter id from mahasiswa_model
    $this->M_obat->hapusDataObat($kode_obat);

    //use flashdata to show alert "dihapus"
    $this->session->set_flashdata('flash', 'dihapus');

   //back to controller mahasiswa_model
    redirect('obat/index');

  }

 public function ubah($kode_obat)
 {
    $data = [
        "namaobat"     => $this->input->post('namaobat'),
        "kategoriobat" => $this->input->post('kategoriobat'),
        "keterangan"   => $this->input->post('keterangan'),
        "harga"        => $this->input->post('harga'),
        "stockobat"    => $this->input->post('stockobat'),
    ];

    $this->M_obat->ubahDataObat($data, $kode_obat);
    redirect('obat/index');
 }
}
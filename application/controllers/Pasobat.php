<?php
 // write your name and student id here
class Pasobat extends CI_Controller
{

 public function __construct(){
  parent::__construct();
    //load model "Mahasiswa_model"
    $this->load->model('M_pasobat');
   //load library form validationx
    $this->load->library('form_validation');
  }

 public function index() {
  //  return print_r($this->session->all_userdata());x  
     $data['judul']   = 'Daftar Obat';
     $data['dataPesanObat'] = $this->M_pasobat->getobatpasien();
     $data['dataPesanan'] = $this->M_pasobat->getPesanPasien();

     $this->load->view('v_pasobat', $data);
  }

  public function pesanobat() {
   $data = [
    "kode_obat" => $this->input->post('kode_obat'),
    "kode_pasien" => $this->session->userdata('user_id'),
    "jumlah_pesanan_obat" => $this->input->post('jumlah_pesanan_obat'),
   ];

     $this->M_pasobat->tambahPesanObat($data, 'tbl_pesan');
      redirect('pasobat/index');
  }

  public function hapus($kode_pesan)
  {
    //call method hapusDataMahasiswa with parameter id from mahasiswa_model
    $this->M_pasobat->hapusDataPesanObat($kode_pesan);

    //use flashdata to show alert "dihapus"
    $this->session->set_flashdata('flash', 'dihapus');

   //back to controller mahasiswa_model
    redirect('pasobat/index');

  }

  public function ubah($kode_pesan)
 {
    $data = [
        "jumlah_pesanan_obat" => $this->input->post('jumlah_pesanan_obat'),
    ];

    $this->M_pasobat->ubahDataPesanObat($data, $kode_pesan);
    redirect('pasobat/index');
 }
}
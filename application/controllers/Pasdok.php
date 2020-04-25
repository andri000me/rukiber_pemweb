<?php
 // write your name and student id here
class Pasdok extends CI_Controller
{

 public function __construct(){
  parent::__construct();
    //load model "Mahasiswa_model"
    $this->load->model('M_pasdok');
   //load library form validationx
    $this->load->library('form_validation');
  }

 public function index() {
  //  return print_r($this->session->all_userdata());x  
     $data['judul']   = 'Daftar Dokter';
     $data['dataPesanDokter'] = $this->M_pasdok->getDataDokter();
     $data['dataBooking'] = $this->M_pasdok->getBooking();

     $this->load->view('v_pasdok', $data);
  }

  public function pesanDokter() {
   $data = [
     "kode_dokter" => $this->input->post('kode_dokter'),
     "kode_pasien" => $this->session->userdata('user_id'),
   ];

     $this->M_pasdok->tambahBooking($data, 'tbl_booking');
      redirect('pasdok/index');
  }

  public function hapus($kode_booking)
  {
    //call method hapusDataMahasiswa with parameter id from mahasiswa_model
    $this->M_pasdok->hapusBooking($kode_booking);

    //use flashdata to show alert "dihapus"
    $this->session->set_flashdata('flash', 'dihapus');

   //back to controller mahasiswa_model
    redirect('pasdok/index');

  }

 //  public function ubah($kode_booking)
 //    $data = [
 //        "jumlah_pesanan_obat" => $this->input->post('jumlah_pesanan_obat'),
 //    ];

 //    $this->M_pasobat->ubahDataPesanObat($data, $kode_pesan);
 //    redirect('pasobat/index');
 // }
}

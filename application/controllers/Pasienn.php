<?php
 // write your name and student id here
class Pasienn extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //load model "pasien_model"
    $this->load->model('M_pasien');
    //load library form validation
    $this->load->library('form_validation');
  }


  public function index() {
    $data['judul']      = 'Daftar Pasien';
    $data['tbl_pasien'] = $this->M_pasien->getAllPasien();
    
    if ($this->input->post('keyword')) {
        $data['tbl_pasien'] = $this->M_obat->cariDataPasien();
    }
    $this->load->view('v_pasien', $data);
  }

  public function hapus($kode_pasien)
  {
    //call method hapusDatapasien with parameter id from pasien_model
    $this->M_pasien->hapusDataObat($kode_pasien);

    //use flashdata to show alert "dihapus"
    $this->session->set_flashdata('flash', 'dihapus');

   //back to controller pasien_model
    redirect('Pasienn');

  }
}

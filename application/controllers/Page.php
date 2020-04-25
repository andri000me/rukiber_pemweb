<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function pasien(){
    //Allowing akses to pasien only
      if($this->session->userdata('level')==='1'){
          $this->load->view('homepage');
      }else{
          echo "Akses untuk Anda Tidak Tersedia";
      }
  }

  function dokter(){
    //Allowing akses to doctor only
    if($this->session->userdata('level')==='2'){
      $this->load->view('homepage');
    }else{
        echo "Akses untuk Anda Tidak Tersedia";
    }
  }

  function apoteker(){
    //Allowing akses to apoteker only
    if($this->session->userdata('level')==='3'){
      $this->load->view('homepage');
    }else{
        echo "Akses untuk Anda tidak tersedia";
    }
  }
}


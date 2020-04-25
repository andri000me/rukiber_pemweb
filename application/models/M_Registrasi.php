<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_Registrasi extends CI_Model{

  function __construct() {
    parent::__construct();
  }

  function daftar ($data)
  {
     $this->db->insert('tbl_users', $data);
  }
}

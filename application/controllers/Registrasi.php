
<?php
class Registrasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('M_Registrasi');
    }

    function index() {
        $this->load->view('v_registrasi');
    }

    function action() {
        $data['nama_user']  = $this->input->post('nama_user');
        $data['username']   =  $this->input->post('username');
        $data['email']      = $this->input->post('email');
        $data['password']   =  md5($this->input->post('password'));
        $data['role']       = 'pasien';
        
        $this->M_Registrasi->daftar($data);

        redirect('login/index');
    }
}

?>
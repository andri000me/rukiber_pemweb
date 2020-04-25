<?php
 // write your name and student id here
class M_pasien extends CI_model
{

    public function getAllPasien()
    {
        //use query builder to get data table "mahasiswa"
        return $this->db->get('tbl_pasien')->result_array();
    }

    public function hapusDataPasien($kode_pasien)
    {
        //use query builder to delete data based on kode_pasien
        $this->db->where('kode_pasien', $kode_pasien);
        return $this->db->delete('tbl_pasien');

    }

    public function getPasienById($kode_pasien)
    {
        //get data mahasiswa based on kode_pasien
        $this->db->where('kode_pasien', $kode_pasien);
        return $this->db->get('tbl_pasien')->row_array();

    }

    public function cariDataPasien()
    {
        $keyword = $this->input->post('keyword', true);
        //use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
        $this->db->like('nama_pasien', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('kode_pasien', $keyword);
        $this->db->or_like('tempat_lahir', $keyword);

        //return data mahasiswa that has been searched
        return $this->db->get('tbl_pasien')->result_array();
    }
}
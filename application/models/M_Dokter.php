<?php
 // write your name and student id here
class M_dokter extends CI_model
{

    public function getAllDokter()
    {
        //use query builder to get data table "mahasiswa"
        //$this->db->where('role', 'pasien');
        return $this->db->get('tbl_dokter')->result_array();
    }

    public function tambahDataDokter($data)
    {
        return $this->db->insert('tbl_dokter', $data);
    }

    public function hapusDataDokter($kode_dokter)
    {
        //use query builder to delete data based on kode_dokter
        $this->db->where('kode_dokter', $kode_dokter);
        return $this->db->delete('tbl_dokter');

    }

    public function getDokterById($kode_dokter)
    {
        //get data mahasiswa based on kode_dokter
        $this->db->where('kode_dokter', $kode_dokter);
        return $this->db->get('tbl_dokter')->row_array();

    }

    public function ubahDataDokter($data, $kode_dokter)
    {
        $this->db->where('kode_dokter', $kode_dokter);
        return $this->db->update('tbl_dokter', $data);
    }

    public function cariDataDokter($keyword)
    {
        $keyword = $this->input->post('keyword', true);
        //use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
        $this->db->select('*');
        $this->db->from('tbl_dokter');
        $this->db->like('nama', $keyword);
        $this->db->or_like('spesialis', $keyword);
        $this->db->or_like('no_izin_prakter', $keyword);

        //return data mahasiswa that has been searched
        return $this->db->get('tbl_dokter')->result_array();
    }
}
<?php
 // write your name and student id here
class M_obat extends CI_model
{

    public function getAllObat()
    {
        //use query builder to get data table "mahasiswa"
        return $this->db->get('tbl_obat')->result_array();
    }

    public function tambahDataObat($data)
    {
        return $this->db->insert('tbl_obat', $data);
    }

    public function hapusDataObat($kode_obat)
    {
        //use query builder to delete data based on kode_Obat
        $this->db->where('kode_obat', $kode_obat);
        return $this->db->delete('tbl_obat');

    }
    
    public function getObatById($kode_obat)
    {
        //get data mahasiswa based on kode_obat
        $this->db->where('kode_obat', $kode_obat);
        return $this->db->get('tbl_obat')->row_array();

    }

    public function ubahDataObat($data, $kode_obat)
    {
        $this->db->where('kode_obat', $kode_obat);
        return $this->db->update('tbl_obat', $data);
    }

    public function cariDataObat()
    {
        $keyword = $this->input->post('keyword', true);
        //use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
        $this->db->like('namaobat', $keyword);
        $this->db->or_like('kategoriobat', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('stockobat', $keyword);

        //return data mahasiswa that has been searched
        return $this->db->get('tbl_obat')->result_array();
    }
}
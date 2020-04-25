<?php
 // write your name and student id here
class M_pasobat extends CI_model
{

    public function getobatpasien()
    {
      // $this->db->select('foto, namaobat, kategoriobat, keterangan, harga, stockobat');
      // $query = $this->db->get('tbl_obat')->result_array();
      // return $query; 
      $query = $this->db->get('tbl_obat');
      return $query->result_array();
    }

    public function tambahPesanObat($data) {
      return $this->db->insert('tbl_pesan', $data);
    }

    public function getPesanPasien() {
      $this->db->join('tbl_obat', 'tbl_obat.kode_obat = tbl_pesan.kode_obat', 'left');
      $this->db->where('kode_pasien', $this->session->userdata('user_id'));
      return $this->db->get('tbl_pesan')->result_array();
    }

    public function hapusDataPesanObat($kode_pesan)
    {
        //use query builder to delete data based on kode_Obat
        $this->db->where('kode_pesan', $kode_pesan);
        return $this->db->delete('tbl_pesan');

    }

    public function ubahDataPesanObat($data, $kode_pesan)
    {
        $this->db->where('kode_pesan', $kode_pesan);
        return $this->db->update('tbl_pesan', $data);
    }
}

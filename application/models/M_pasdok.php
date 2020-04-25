<?php
 // write your name and student id here
class M_pasdok extends CI_model
{

    public function getDataDokter()
    {
      // $this->db->select('foto, namaobat, kategoriobat, keterangan, harga, stockobat');
      // $query = $this->db->get('tbl_obat')->result_array();
      // return $query; 
      $query = $this->db->get('tbl_dokter');
      return $query->result_array();
    }

    public function tambahBooking($data) {
      return $this->db->insert('tbl_booking', $data);
    }

    public function getBooking() {
      $this->db->join('tbl_dokter', 'tbl_dokter.kode_dokter = tbl_booking.kode_dokter', 'left');
      $this->db->where('kode_pasien', $this->session->userdata('user_id'));
      return $this->db->get('tbl_booking')->result_array();
    }

    public function hapusBooking($kode_booking)
    {
        //use query builder to delete data based on kode_Obat
        $this->db->where('kode_booking', $kode_booking);
        return $this->db->delete('tbl_booking');

    }

    // public function ubahBooking($data, $kode_booking)
    // {
    //     $this->db->where('kode_booking', $kode_booking);
    //     return $this->db->update('tbl_booking', $data);
    // }
}


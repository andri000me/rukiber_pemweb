<?php
 // write your name and student id here
class M_account extends CI_model
{

    public function getAllDataDiri()
    {
        // return $this->db->get('tbl_pasien')->result_array();
        $this->db->join('tbl_users', 'tbl_users.id_user = tbl_pasien.id_user', 'left');
        $this->db->where('kode_pasien', $this->session->userdata('user_id'));
        return $this->db->get('tbl_pasien')->result_array();
    }

    public function tambahDataDiri($data)
    {
        return $this->db->insert('tbl_pasien', $data);
    }


    public function ubahDataDiri($data, $kode_pasien)
    {
        $this->db->where('kode_pasien', $kode_pasien);
        return $this->db->update('tbl_pasien', $data);
    }

}

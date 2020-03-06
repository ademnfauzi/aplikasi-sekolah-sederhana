<?php

class User_model extends CI_Model 
{
    public function nilaiSiswa()
    {
        $nis = $this->session->userdata('nomor_induk');
        $this->db->select('nilai_tugas,nilai_sikap,nilai_uts,nilai_uas,nama_mapel,nama_kelas');
        $this->db->from('nilai');
        $this->db->join('mapel', 'mapel.id_mapel =  nilai.id_mapel');
        $this->db->join('kelas', 'kelas.id_kelas =  nilai.id_kelas');
        $this->db->where('nilai.nis',$nis);
        $query = $this->db->get();
        return $query->result();
    }

}

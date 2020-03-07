<?php

class Guru_model extends CI_Model 
{
    public function nilaiSiswa($nis,$nama,$kelas)
    {
        $this->db->select('id,nis,nilai_tugas,nilai_sikap,nilai_uts,nilai_uas,nama_mapel,nama_kelas');
        $this->db->from('nilai');
        $this->db->join('mapel', 'mapel.id_mapel =  nilai.id_mapel');
        $this->db->join('kelas', 'kelas.id_kelas =  nilai.id_kelas');
        $this->db->where('nilai.nis',$nis);
        $query = $this->db->get();
        return $query->result();
    }
    public function editNilai($id)
    {
        return $this->db->get_where('nilai',['id' => $id])->row_array();
    }
    public function update_nilai($id)
    {
        $data = [
            'nilai_sikap' => htmlspecialchars($this->input->post('nilai_sikap',true)),
            'nilai_tugas' => htmlspecialchars($this->input->post('nilai_tugas',true)),
            'nilai_uts' => htmlspecialchars($this->input->post('nilai_uts',true)),
            'nilai_uas' => htmlspecialchars($this->input->post('nilai_uas',true))
        ];
        $this->db->where('id', $this->input->post('id',true));
        $this->db->update('nilai', $data);
    }

    public function joinUserDanGuru()
    {
        $this->db->select('id,nig,nama_guru,walas,nomor_induk');
        $this->db->from('guru');
        $this->db->join('user', 'user.nomor_induk = guru.nig');
        $this->db->where('guru.nig', $this->session->userdata('nomor_induk'));
        $query = $this->db->get();
        return $query->row_array();
        
    }
    public function getSiswaById($nis,$nama,$kelas)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('nis',$nis);
        $query = $this->db->get();
        return $query->row_array();
    }
}

<?php

class Admin_model extends CI_Model 
{
   public function getAllSiswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('role_id', '2');
        $query = $this->db->get();
        return $query->result();
    }
    public function guruPagination($limit,$start)
    {
        return $this->db->get('guru',$limit,$start)->result_array();
    }
   public function getAllSiswaIpa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('kelas', 'ipa');
        $query = $this->db->get();
        return $query->result();
    }
   public function getAllSiswaIps()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('kelas', 'ips');
        $query = $this->db->get();
        return $query->result();
    }
    public function getAllGuru($limit, $start)
    {
        return $this->db->get('guru',$limit, $start)->result_array();
    }
    public function getGuru()
    {
        $this->db->select('*');
        $this->db->from('guru');
        $query = $this->db->get();
        return $query->result();
    }
    public function SearchGuru()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nig', $keyword);
        $this->db->or_like('nama', $keyword);
        return $this->db->get('guru')->result_array();
    }
    public function countAllGuru()
    {
        return $this->db->get('guru')->num_rows();
    }
    public function insertDataSiswa()
    {
    $data = [
        'nis' => htmlspecialchars($this->input->post('nis',true)),
        'nama' => htmlspecialchars($this->input->post('name',true)),
        'kelas' => htmlspecialchars($this->input->post('kelas',true)),
        'role_id' => 2
    ];
    $this->db->insert('siswa', $data);
    }
    
    public function insertDataGuru()
    {
    $data = [
        'nig' => htmlspecialchars($this->input->post('nig',true)),
        'nama' => htmlspecialchars($this->input->post('name',true)),
        'role_id' => 3
    ];
    $this->db->insert('guru', $data);
    }

    public function hapus_sub_menu($id)
    {
        // var_dump($id);
        $this->db->delete('user_sub_menu',['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Delete!</div>');
        redirect('admin/sub_menu');
        return true;  
    }
    public function hapus($nama,$id,$role_id)
    {
        if ($role_id === '2') {
            $this->db->delete('siswa',['id' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Delete!</div>');
            redirect('admin/daftar_siswa');
            return true;   
            // var_dump($nama,$id,$role_id);die;
        } 
        elseif ($role_id === '3') {            
            $this->db->delete('guru',['id' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Delete!</div>');
            redirect('admin/daftar_guru');
            return true;
            // var_dump($nama,$id,$role_id);die;
        } 
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete Failed !</div>');
            redirect('admin');   
            return true;
        }
    }
    
    public function detail($nama,$role_id,$id)
    {
            if ($role_id === '2') {
                return $this->db->get_where('siswa',['id' => $id])->row_array();   
                // var_dump($id,$role_id);die;
            } 
            elseif ($role_id === '3') {            
                return $this->db->get_where('guru',['id' => $id])->row_array();   
                // var_dump($id,$role_id);die;
            } 
            else {
                redirect('admin');   
                return true;
            }
    }

    public function getUserById($nama,$role_id,$id)
    {
        if ($role_id === '2') {
            return $this->db->get_where('siswa',['id' => $id])->row_array();   
            // var_dump($id,$role_id);die;
        } 
        elseif ($role_id === '3') {            
            return $this->db->get_where('guru',['id' => $id])->row_array();   
            // var_dump($id,$role_id);die;
        } 
    }
    public function getSubMenuById($id,$title)
    {
        return $this->db->get_where('user_sub_menu',['id' => $id])->row_array();
    }
    public function ubahDataSiswa($role_id)
    {
        if ($role_id === '2') {
            $data = [
                'nama' => $this->input->post('nama', true),
                'nis' => $this->input->post('nis', true),
                'kelas' => $this->input->post('kelas',true)
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('siswa', $data); 
        } 
        elseif ($role_id === '3') {            
            $data = [
                'nama' => $this->input->post('nama', true),
                'nig' => $this->input->post('nig', true)
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('guru', $data);
        }
        
    }
    public function editSubMenu($id,$title)
    {
        $data = [
            'menu_id' => $this->input->post('menu_id',true),
            'title' => $this->input->post('title',true),
            'url' => $this->input->post('url',true),
            'icon' => $this->input->post('icon',true),
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }

    public function getAllSubMenu()
    {
        $this->db->select('*');
        $this->db->from('user_sub_menu');
        $query = $this->db->get();
        return $query->result();
    }

    public function addNilai()
    {
        $data = [
            'nis' => htmlspecialchars($this->input->post('nis',true)),
            'id_kelas' => htmlspecialchars($this->input->post('id_kelas',true)),
            'id_mapel' => htmlspecialchars($this->input->post('id_mapel',true)),
            'nilai_sikap' => '0',
            'nilai_tugas' => '0',
            'nilai_uts' => '0',
            'nilai_uas' => '0'
        ];
        $this->db->insert('nilai',$data);
    }
    public function getAllMapel()
    {
        return $this->db->get('mapel')->result_array();
    }
    public function addMapel()
    {
        $data = [
            'id_mapel' => htmlspecialchars($this->input->post('id_mapel',true)),
            'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel',true)),
            'ket' => htmlspecialchars($this->input->post('keterangan',true)),
            'id_guru' => htmlspecialchars($this->input->post('id_guru',true))
        ];
        $this->db->insert('mapel',$data);
    }

    public function addSubMenu()
    {
        $data = [
            'menu_id' => htmlspecialchars($this->input->post('menu_id',true)),
            'title' => htmlspecialchars($this->input->post('title',true)),
            'url' => htmlspecialchars($this->input->post('url',true)),
            'icon' => htmlspecialchars($this->input->post('icon',true)),
            'is_active' => 1
        ];
        $this->db->insert('user_sub_menu',$data);
        
    }
    //gagal pas dicoba gakeluar hasilnya
    // public function daftar_mapel()
    // {
    //     $this->db->select('id_mapel,nama_mapel,ket,nama');
    //     $this->db->from('mapel');
    //     $this->db->join('guru', 'guru.id = mapel.id_mapel');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    public function hapus_mapel($id_mapel,$nama_mapel)
    {
        $this->db->delete('mapel',['id_mapel' => $id_mapel]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Delete!</div>');
        redirect('admin/mapel');
        return true;
    }

    public function getMapelById($id_mapel)
    {
        return $this->db->get_where('mapel',['id_mapel' => $id_mapel])->row_array();  
    }
    public function edit_mapel($id_mapel,$nama_mapel)
    {
        $data = [
            'id_mapel' => htmlspecialchars($this->input->post('id_mapel',true)),
            'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel',true)),
            'ket' => htmlspecialchars($this->input->post('keterangan',true)),
            'id_guru' => htmlspecialchars($this->input->post('id_guru',true))
        ];
        $this->db->where('id_mapel',$this->input->post('id_mapel'));
        $this->db->update('mapel', $data);
    }

    public function tambah_berita()
    {
        $data = [
            'title' => htmlentities($this->input->post('title',true)),
            'isi' => htmlentities($this->input->post('isi',true)),
            'date_created' => time()
        ];
        $this->db->insert('berita',$data);
    }
    public function getBerita()
    {
        return $this->db->get('berita')->result_array();
    }
    public function getBeritaByTitle($id)
    {
        return $this->db->get_where('berita',['id' => $id])->row_array();  
    }
    public function maxDaftarSiswa()
    {
        $this->db->select('COUNT(*) as total');
        $this->db->from('siswa');
        $query = $this->db->get();
        return $query->result();
    }
    public function maxDaftarGuru()
    {
        $this->db->select('COUNT(*) as total');
        $this->db->from('guru');
        $query = $this->db->get();
        return $query->result();
    }
    public function maxBerita()
    {
        $this->db->select('COUNT(*) as total');
        $this->db->from('berita');
        $query = $this->db->get();
        return $query->result();
    }

}
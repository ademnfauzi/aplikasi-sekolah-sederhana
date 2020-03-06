<?php

class Home_model extends CI_Model 
{
    public function getBeritaInHome()
    {
        return $this->db->get('berita', 3)->result_array();
    }

    public function getBeritaById($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }
}
<?php

class Login_model extends CI_Model 
{

    public function insertData()
    {
    $data = [
        'nomor_induk' => htmlspecialchars($this->input->post('nomor_induk',true)),
        'nama' => htmlspecialchars($this->input->post('name',true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => htmlspecialchars($this->input->post('role_id',true))
         
    ];
    $this->db->insert('user', $data);
    }
    public function roleId()
    {
        return $this->db->get('user_role')->result_array();
    }

}

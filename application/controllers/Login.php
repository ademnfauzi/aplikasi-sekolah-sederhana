<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();//untuk memanggil method konstraktor yg berada di ci controller ini
    }
    public function index()
    {
        if ($this->session->userdata('role_id')) {
            $role_id = $this->session->userdata('role_id');
            if($role_id == 1){
                redirect('admin');
            } else if ($role_id == 2) {  
                redirect('siswa');
            } else if ($role_id == 3) {  
                redirect('guru');
            }
        }
        $this->form_validation->set_rules('nomor_induk', 'NOMOR_INDUK','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required');

        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('login/index');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $np = $this->input->post('nomor_induk');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['nomor_induk' => $np])->row_array();
        if ($user) {
            # code...
            if (password_verify($password, $user['password'])) {
                # code...
                $data = [
                    'nomor_induk' => $user['nomor_induk'],
                    'nama' => $user['nama'],
                    'password' => $user['password'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                $role_id = $this->session->userdata('role_id');
                if($user['role_id'] == 1){
                    redirect('admin');
                } else if ($user['role_id'] == 2) {  
                    redirect('siswa');
                } else if ($user['role_id'] == 3) {  
                    redirect('guru');
                } 
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password !</div>');
                redirect('login');
            }
        } 
        else {
            # code...
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> This account is not registered !</div>');
            redirect('login');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nomor_induk','NOMOR INDUK','required|trim|is_unique[user.nomor_induk]',[
            'is_unique' => 'this NOMOR_INDUK has already registered!'
        ]);
        $this->form_validation->set_rules('name','Username','required|trim');
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]',[
            'min_length' => 'Password too short !',
            'matches' => 'Password not match'
        ]);
        $this->form_validation->set_rules('password2','Repeat Password','required|trim|min_length[6]|matches[password1]');
        
        if ($this->form_validation->run() == false) {
            # code...
        $this->load->view('login/registrasi');
        } else {
            $this->Login_model->insertData();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulations! your account has been created. SETELAH MELAKUKAN REGISTRASI PASTIKAN DATA SAMA DENGAN YANG ADA PADA DAFTAR
            </ul></div>');
            redirect('admin');
        }
    }

    public function logout()
    {
        // $this->session->unset_userdata('nomor_induk');
        // $this->session->unset_userdata('nama');
        // $this->session->unset_userdata('role_id');
        $array = array('nomor_induk', 'nama', 'role_id');
        $this->session->unset_userdata($array);
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">You have been logged out!</div>');
        redirect('login');
    }
    public function blocked()
    {
        $this->load->view('errors/index.html');
    }

}
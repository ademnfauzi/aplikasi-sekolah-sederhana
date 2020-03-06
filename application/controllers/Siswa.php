<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();//wajib klo bikin konstrak
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Dashboard Siswa';
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer_index');
    }
    public function nilai()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['query'] = $this->User_model->nilaiSiswa();
        $data['title'] = 'Nilai Siswa';
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('siswa/nilai', $data);
        $this->load->view('templates/footer_index');
    }
    public function change_password()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $this->form_validation->set_rules('current','Current Password','required|trim');
        $this->form_validation->set_rules('new_password1','New Password 1','required|trim|min_length[6]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2','New Password 2','required|trim|min_length[6]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            # code...
            $data['title'] = 'Change Password';
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('siswa/change_password', $data);
            $this->load->view('templates/footer_index');
        } 
        else {
            $current = $this->input->post('current');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current, $data['user']['password'])) {
                # code...
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Current Password</div>');
                redirect('siswa/change_password');
            }
             else {
                if ($current === $new_password) {
                    # code...
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> The new Password can not same with current password !</div>');
                    redirect('siswa/change_password');
                }
                    else {
                        $hash = password_hash($new_password, PASSWORD_DEFAULT);

                        $this->db->set('password',$hash);
                        $this->db->where('nomor_induk', $this->session->userdata('nomor_induk'));
                        $this->db->update('user');
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Success change password</div>');
                        redirect('siswa');
                    }
                }
            }
        }
}   
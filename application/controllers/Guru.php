<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();//wajib klo bikin konstrak
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['index'] = $this->Guru_model->joinUserDanGuru();
        $data['title'] = 'Dashboard Guru';
        // var_dump($data['index']);die;
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer_index');
    }
    public function input_nilai()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['siswa'] = $this->Admin_model->getAllSiswaIpa();
        $data['siswaIPS'] = $this->Admin_model->getAllSiswaIps();
        $data['join'] = $this->Guru_model->joinUserDanGuru();
        // var_dump($data['join']);die;
        $data['title'] = 'Input Nilai';
        if ($data['join']['walas'] == '01') {
            # code...
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('guru/tampil_daftar_siswa_ipa', $data);
        $this->load->view('templates/footer_index');
    } elseif ($data['join']['walas'] == '02') {
        # code...
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('guru/tampil_daftar_siswa_ips', $data);
        $this->load->view('templates/footer_index');
    } else {
        # code...
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('guru/bukan_walas', $data);
        $this->load->view('templates/footer_index');
        }
    }
    public function tampil_daftar_siswa_ipa()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Tampil Data Siswa';
        $data['siswa'] = $this->Admin_model->getAllSiswaIpa();
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('guru/tampil_daftar_siswa_ipa', $data);
        $this->load->view('templates/footer_index', $data);
    }
    public function tampil_daftar_siswa_ips()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Tampil Data Siswa';
        $data['siswa'] = $this->Admin_model->getAllSiswaIps();
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('guru/tampil_daftar_siswa_ips', $data);
        $this->load->view('templates/footer_index', $data);
    }
    public function input($nis,$nama,$kelas)
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'INPUT NILAI';
        $data['siswaIpa'] = $this->Admin_model->getAllSiswaIpa();
        $data['query'] = $this->Guru_model->nilaiSiswa($nis,$nama,$kelas);
        $data['siswa'] = $this->Guru_model->getSiswaById($nis,$nama,$kelas);
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('guru/input', $data,$nis,$nama,$kelas);
        $this->load->view('templates/footer_index', $data);
    }
    public function editNilai($id)
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'EDIT NILAI';
        $this->form_validation->set_rules('nilai_sikap', 'NILAI SIKAP', 'required|trim');
        $this->form_validation->set_rules('nilai_tugas', 'NILAI TUGAS', 'required|trim');
        $this->form_validation->set_rules('nilai_uts', 'NILAI UTS', 'required|trim');
        $this->form_validation->set_rules('nilai_uas', 'NILAI UAS', 'required|trim');
        if ($this->form_validation->run() == false ) {
            # code...
            $data['query'] = $this->Guru_model->editNilai($id);
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('guru/editNilai', $data);
            $this->load->view('templates/footer_index', $data);
        } else {
            $this->Guru_model->update_nilai($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Update!</div>');
            redirect('guru/input_nilai');
        }
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
            $this->load->view('guru/change_password', $data);
            $this->load->view('templates/footer_index');
        } 
        else {
            $current = $this->input->post('current');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current, $data['user']['password'])) {
                # code...
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Current Password</div>');
                redirect('guru/change_password');
            }
             else {
                if ($current === $new_password) {
                    # code...
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> The new Password can not same with current password !</div>');
                    redirect('guru/change_password');
                }
                    else {
                        $hash = password_hash($new_password, PASSWORD_DEFAULT);

                        $this->db->set('password',$hash);
                        $this->db->where('nomor_induk', $this->session->userdata('nomor_induk'));
                        $this->db->update('user');
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Success change password</div>');
                        redirect('guru');
                    }
                }
            }
        }
}
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
        $data['title'] = 'Dashboard Guru';
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
}
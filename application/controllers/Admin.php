<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    
    public function index()
    {   
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Dashboard Admin';
        $data['maxSiswa'] = $this->Admin_model->maxDaftarSiswa();
        $data['maxGuru'] = $this->Admin_model->maxDaftarGuru();
        $data['maxBerita'] = $this->Admin_model->maxBerita();
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer_index');
    }
    public function daftar_guru()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        // $data['pagination'] = $this->Admin_model->guruPagination();
        
        //pagination pertama
        //load library
        $this->load->library('pagination');
        //config pagination
        $config['base_url'] = 'http://localhost/kartini/admin/daftar_guru/index';
        $config['total_rows'] = $this->Admin_model->countAllGuru();
        $config['per_page'] = 5;
        $config['num_links'] = 5; //untuk pagination kanan 5 kiri 5
        // var_dump($config['total_rows']);die;
        //style pagination
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] ='<li class="page-item">';
        $config['first_tag_close'] ='</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] ='<li class="page-item">';
        $config['last_tag_close'] ='</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] ='<li class="page-item">';
        $config['next_tag_close'] ='</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] ='<li class="page-item">';
        $config['prev_tag_close'] ='</li>';
        
        $config['cur_tag_open'] ='<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] ='</a></li>';
        
        $config['num_tag_open'] ='<li class="page-item">';
        $config['num_tag_close'] ='</li>';

        $config['attributes'] = array('class' => 'page-link');
        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(4);
        $data['guru'] = $this->Admin_model->getAllGuru($config['per_page'], $data['start']);
        $data['title'] = 'Daftar Guru';
        if ( $this->input->post('keyword') ) {
            # code...
            $data['guru'] = $this->Admin_model->SearchGuru();
        }
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/daftar_guru', $data);
        $this->load->view('templates/footer_index', $data);
    }

    public function daftar_siswa()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Daftar Siswa';
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/daftar_siswa', $data);
        $this->load->view('templates/footer_index', $data);
    }
    public function tampil_daftar_siswa_ipa()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Tampil Data Siswa';
        $data['siswa'] = $this->Admin_model->getAllSiswaIpa();
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/tampil_daftar_siswa_ipa', $data);
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
        $this->load->view('admin/tampil_daftar_siswa_ips', $data);
        $this->load->view('templates/footer_index', $data);
    }
    public function input_mapel_dan_nilai()
    {
        $this->form_validation->set_rules('nis','Username','required|trim');
        $this->form_validation->set_rules('id_kelas','Username','required|trim');
        $this->form_validation->set_rules('id_mapel','Username','required|trim');

        if ($this->form_validation->run() ==  false) {
            # code...
            $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <b>
            DIGUNAKAN UNTUK MENGINPUT NILAI SISWA KE SETIAP MATA PELAJARAN YANG DIDAFTAR KAN, NILAI AWAL BERNILAI 0 BISA DI EDIT NILAINYA MELALUI WALAS KELAS MASING-MASING<b>
            </div>');
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $data['title'] = 'Input Data Maplel dan Nilai';
            $data['siswa'] = $this->Admin_model->getAllSiswa();
            $data['mapel'] = $this->Admin_model->getAllMapel();
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/input_mapel_dan_nilai', $data);
            $this->load->view('templates/footer_index', $data);
        } else {
            # code...
            
            $this->Admin_model->addNilai();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Insert!</div>');
            redirect('admin/daftar_siswa');
        }

    }

    public function tambah_siswa()
    {
        $this->form_validation->set_rules('nis','NIS','required|trim|is_unique[siswa.nis]|min_length[5]|max_length[5]',[
            'is_unique' => 'this NIS has already registered!',
            'min_length' => 'Password too short !',
            'max_length' => 'Password too long' 
        ]);
        $this->form_validation->set_rules('name','Username','required|trim');
        $this->form_validation->set_rules('kelas','Kelas','required|trim');
        // $this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]',[
        //     'min_length' => 'Password too short !',
        //     'matches' => 'Password not match'
        // ]);
        // $this->form_validation->set_rules('password2','Repeat Password','required|trim|min_length[6]|matches[password1]');
        
        if ($this->form_validation->run() == false) {
            # code...
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $data['title'] = 'Tambah Siswa';
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/tambah_siswa');
            $this->load->view('templates/footer_index', $data);
            } else {

                $this->Admin_model->insertDataSiswa();
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Insert!</div>');
                redirect('admin/daftar_siswa');
        }
    }
    public function tambah_guru()
    {
        $this->form_validation->set_rules('nig','NIG','required|trim|is_unique[guru.nig]|min_length[5]|max_length[5]',[
            'is_unique' => 'this NIG has already registered!',
            'min_length' => 'Password too short !',
            'max_length' => 'Password too long'
        ]);
        $this->form_validation->set_rules('name','Username','required|trim');    
        if ($this->form_validation->run() == false) {
            # code...
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $data['title'] = 'Tambah Guru';
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/tambah_guru');
            $this->load->view('templates/footer_index', $data);
        } else {
            $this->Admin_model->insertDataGuru();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Insert!</div>');
            redirect('admin/daftar_guru');
        }
    }
    public function hapus_sub_menu($id,$title)
    {
        $this->Admin_model->hapus_sub_menu($id);
    }

    public function hapus($nama,$id,$role_id)
    {
        $this->Admin_model->hapus($nama,$id,$role_id);
    }
    public function detail($nama,$id,$role_id)
    {
        if ($role_id === '2') {
            # code...
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $data['detail'] = $this->Admin_model->detail($nama,$role_id,$id);
            $data['title'] = 'Detail';
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/detail', $nama,$data,$role_id);
            $this->load->view('templates/footer_index', $data);
        } elseif ($role_id === '3') {
            # code...
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $data['detail'] = $this->Admin_model->detail($nama,$role_id,$id);
            $data['title'] = 'Detail';
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/detail_guru', $nama,$data,$role_id);
            $this->load->view('templates/footer_index', $data);
        }
    }
    public function edit($nama,$id,$role_id)
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['getUser'] = $this->Admin_model->getUserById($nama,$role_id,$id);
        $data['title'] = 'Form Edit';
        $this->form_validation->set_rules('nama','Nama', 'required');
        if ($this->form_validation->run() == false ) {
            # code...
            if ($role_id === '2') {
                # code...
                $this->load->view('templates/header_index', $data);
                $this->load->view('templates/sidebar_index', $data);
                $this->load->view('templates/topbar_index', $data);
                $this->load->view('admin/edit_siswa', $data,$nama,$data,$role_id,$id);
                $this->load->view('templates/footer_index', $data);
            } elseif ($role_id === '3') {
                # code...
                $this->load->view('templates/header_index', $data);
                $this->load->view('templates/sidebar_index', $data);
                $this->load->view('templates/topbar_index', $data);
                $this->load->view('admin/edit_guru', $data,$nama,$data,$role_id,$id);
                $this->load->view('templates/footer_index', $data);
            }

        } else {
            $this->Admin_model->ubahDataSiswa($role_id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Update</div>');
            if ($role_id === '2') {
                # code...
                redirect('admin/daftar_siswa');
            } elseif ($role_id === '3') {
                # code...
                redirect('admin/daftar_guru');
            }
        }
    }
    public function sub_menu()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Sub Menu Baru';
        $data['all'] = $this->Admin_model->getAllSubMenu();
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/sub_menu', $data);
        $this->load->view('templates/footer_index', $data);
        
    }
    public function edit_sub_menu($id,$title)
    {
        $data['title'] = 'Edit Sub Menu';
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['edit'] = $this->Admin_model->getSubMenuById($id,$title);
        $this->form_validation->set_rules('menu_id','Menu ID','required|trim|min_length[1]|max_length[1]',[
            'min_length' => 'Password too short !',
            'max_length' => 'Password too long'
        ]);
        $this->form_validation->set_rules('title','Title','required|trim');    
        $this->form_validation->set_rules('url','URL','required|trim');    
        $this->form_validation->set_rules('icon','ICON','required|trim');    
        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/edit_sub_menu', $data,$id,$title);
            $this->load->view('templates/footer_index', $data);
        } else {
            $this->Admin_model->editSubMenu($id,$title);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Edit!</div>');
            redirect('admin/sub_menu');
        }
    }
    public function tambah_sub_menu()
    {
        $this->form_validation->set_rules('menu_id','Menu ID','required|trim|min_length[1]|max_length[1]',[
            'min_length' => 'Password too short !',
            'max_length' => 'Password too long'
        ]);
        $this->form_validation->set_rules('title','Title','required|trim');    
        $this->form_validation->set_rules('url','URL','required|trim');    
        $this->form_validation->set_rules('icon','ICON','required|trim');    
        if ($this->form_validation->run() == false) {
            # code...
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $data['title'] = 'Tambah Sub Menu';
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/tambah_sub_menu');
            $this->load->view('templates/footer_index', $data);
        } else {
            $this->Admin_model->addSubMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Insert!</div>');
            redirect('admin/sub_menu');
        }
    }

    public function berita()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Berita';
        $data['berita'] = $this->Admin_model->getBerita();
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/berita', $data);   
        $this->load->view('templates/footer_index', $data);
    }
    public function tambah_berita()
    {
        $this->form_validation->set_rules('title','Title','required|trim|is_unique[berita.title]',[
            'is_unique' => 'this TITLE has already!'
        ]);
        $this->form_validation->set_rules('isi','Isi','required|trim');

        if ($this->form_validation->run() == false) {
            # code...
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $data['title'] = 'Input Berita';
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/tambah_berita', $data);
            $this->load->view('templates/footer_index');
        } else {
            $upload_image = $_FILES['image']['name'];
            //name diambil dari nama yg diliat dari vardump
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048'; //2mb
                $config['upload_path'] = './assets/img/profiles/';
                $config['image_width']   = '800';
                $config['image_height']  = '800';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                    $this->Admin_model->tambah_berita();
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Insert!</div>');
                    redirect('admin/berita');
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }
    }

    public function getBeritaByTitle($id)
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'Input Berita';
        $data['detail'] = $this->Admin_model->getBeritaByTitle($id);
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/getBerita', $data);
        $this->load->view('templates/footer_index');
    }
    
    public function mapel()
    {
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $data['title'] = 'MATA PELAJARAN';
        $data['getMapel'] = $this->Admin_model->getAllMapel();
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/mapel', $data);
        $this->load->view('templates/footer_index');
    }
    public function tambah_mapel()
    {
        $this->form_validation->set_rules('id_mapel','ID MAPEL','required|trim|is_unique[mapel.id_mapel]',[
            'is_unique' =>'This Id has already'
        ]);
        $this->form_validation->set_rules('nama_mapel','NAMA MAPEL','required|trim|is_unique[mapel.nama_mapel]',[
            'is_unique' =>'This Nama Mapel has already'
        ]);
        
        if ($this->form_validation->run() == false ) {
            # code...
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $data['title'] = 'Tambah Mata Pelajaran';
            $data['addGuru'] = $this->Admin_model->getGuru();
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/tambah_mapel', $data);
            $this->load->view('templates/footer_index');
        } else {
            $data['addMapel'] = $this->Admin_model->addMapel();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Insert!</div>');
            redirect('admin/mapel');
        }

    }
    public function hapus_mapel($id_mapel,$nama_mapel)
    {
        $this->Admin_model->hapus_mapel($id_mapel,$nama_mapel);
    }
    public function edit_mapel($id_mapel,$nama_mapel)
    {
        $data['title'] = 'Edit Mata Pelajaran';
        $data['edit'] = $this->Admin_model->getMapelById($id_mapel);
        $data['addGuru'] = $this->Admin_model->getGuru();
        $this->form_validation->set_rules('id_mapel','ID MAPEL','required|trim');
        $this->form_validation->set_rules('nama_mapel','NAMA MAPEL','required|trim');
        if ($this->form_validation->run() == false ) {
            # code...
            $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
            $this->load->view('templates/header_index', $data);
            $this->load->view('templates/sidebar_index', $data);
            $this->load->view('templates/topbar_index', $data);
            $this->load->view('admin/edit_mapel', $data,$id_mapel,$nama_mapel);
            $this->load->view('templates/footer_index');
        } else {
            $this->Admin_model->edit_mapel($id_mapel,$nama_mapel);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Success Update!</div>');
            redirect('admin/mapel');
        }
    }
    public function registrasi()
    {
        $data['title'] = 'Registrasi';
        $data['role'] = $this->Login_model->roleId();
        $data['user'] = $this->db->get_where('user', ['nomor_induk' => $this->session->userdata('nomor_induk')])->row_array();
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
        <p class="font-weight-bold">
        1.  SEBELUM MEMBUAT AKUN LOGIN UNTUK PARA SISWA ATAU GURU LEBIH BAIK MEMBUAT DATA MEREKA DI DAFTAR GURU ATAU SISWA</p> 
        <p class="font-weight-bold">
        2.  PASTIKAN NAMA USERNAME SAMA DENGAN NAMA SISWA ATAU GURU YANG ADA PADA DAFTAR</p> 
        <p class="font-weight-bold">
        3.  PASTIKAN NOMOR INDUK UNTUK LOGIN SAMA DENGAN NIS SISWA ATAU NIG GURU YANG ADA PADA DAFTAR</p> 
        </ul></div>');
        $this->load->view('templates/header_index', $data);
        $this->load->view('templates/sidebar_index', $data);
        $this->load->view('templates/topbar_index', $data);
        $this->load->view('admin/registrasi', $data);
        $this->load->view('templates/footer_index');
    }

}   
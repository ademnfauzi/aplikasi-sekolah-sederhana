<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
        $data['judul'] = 'Home Kartini';
        $data['max'] = $this->Home_model->getBeritaInHome();
        $this->load->view('templates/header_home',$data);
        $this->load->view('templates/topbar_home');
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer_home');
    }
    
    public function berita($id)
    {
        $data['judul'] = 'Home Kartini';
        $data['berita'] = $this->Home_model->getBeritaById($id);
        $this->load->view('templates/header_home',$data);
        $this->load->view('home/berita',$data);
    }
}
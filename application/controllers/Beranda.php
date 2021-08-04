<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
//http://index.php/beranda
//tidak perlu pakai imbuhan ctr karena diakses sebagai link pada browser

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->auth->cek_login();
    }

    public function index()
	{
        $this->session->set_userdata('navaktif','beranda');
        $this->load->view('statis/header');
        $this->load->view('beranda');
        $this->load->view('statis/footer');
    }
}
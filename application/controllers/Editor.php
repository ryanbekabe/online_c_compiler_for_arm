<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {
//http://index.php/Editor
//tidak perlu pakai imbuhan ctr karena diakses sebagai link pada browser

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->auth->cek_login();
    }

    public function index()
	{
        $this->session->set_userdata('navaktif','editor');
        //$this->load->view('statis/header');
        $this->load->view('editor');
        $this->load->view('statis/footer');
    }
}
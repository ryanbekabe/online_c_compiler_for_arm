<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarsc extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->load->model('daftarscmdl');
		$this->auth->cek_login();
	}

	function index(){
		$varun_user=$this->session->userdata('username');
		$this->session->set_userdata('navaktif','daftarsc');
		$this->load->view('statis/header');
		$data['tb_sc'] = $this->daftarscmdl->tampilkan($varun_user)->result();
		$this->load->view('daftarsc',$data);
		$this->load->view('statis/footer');
	}
}
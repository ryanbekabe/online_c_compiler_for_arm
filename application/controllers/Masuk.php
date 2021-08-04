<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
//http://index.php/masuk
//tidak perlu pakai imbuhan ctr karena diakses sebagai link pada browser

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('masuk');
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->auth->login_user($username,$password))
		{
			redirect('beranda');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('masuk');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('masuk');
	}

	

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scbaructr extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('beranda');
	}

	public function proses()
	{
		//$this->form_validation->set_rules('idtipelang', 'lang');
		//$this->form_validation->set_rules('idcode', 'code','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('idcode', 'code','trim|required|min_length[1]|max_length[65535]');
		//$this->form_validation->set_rules('editor', 'code','trim|required|min_length[1]|max_length[65535]');
		if ($this->form_validation->run()==true)
	   	{
			$varidlang=$this->input->post('languages');
			//$varidlang=$this->input->post('idtipelang');
			//$varidcode=$this->input->post('ace_text-input');
			$varidcode=$this->input->post('idcode');
			$this->auth->simpanbaru($varidlang,$varidcode);
			$this->session->set_flashdata('success_scdisimpan','Proses Simpan SourceCode Berhasil.');
			redirect('beranda');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('beranda');
		}
	}
}
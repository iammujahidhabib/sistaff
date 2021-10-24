<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		$this->session->set_flashdata('open','md');
	}

	public function index()
	{
		$data=['content'=>'admin/perusahaan',
				'perusahaan'=>$this->M_dashboard->view('perusahaan')->result()];
		$this->load->view('admin/index',$data);
	}

	public function tambah_perusahaan()
	{
		$data=['content'=>'admin/tambah perusahaan'];
		$this->load->view('admin/index',$data);
	}

	public function save_perusahaan()
	{
		$data=[
			'nama_perusahaan'=>$this->input->post('nama'),
			'industri'=>$this->input->post('industri'),
			'email'=>$this->input->post('email'),
			'no_telpon'=>$this->input->post('notelpon'),
			'fax'=>$this->input->post('fax'),
			'alamat'=>$this->input->post('alamat')
		];
		$this->M_dashboard->insert('perusahaan',$data);
		redirect('perusahaan');
	}

}
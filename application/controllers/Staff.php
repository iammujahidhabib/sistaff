<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}
	public function index()
	{
		$data=['content'=>'admin/user',
				'akun'=>$this->M_dashboard->view('akun')->result()];
		$this->load->view('admin/index',$data);
	}

	//role
	public function role()
	{
		$data=['content'=>'admin/role',
				'role'=>$this->M_dashboard->view('role')->result()];
		$this->load->view('admin/index',$data);
	}
	public function ubah_role($id,$role)
	{
		$data=['id_role'=>$role];
		$where=['id_akun'=>$id];
		$this->M_dashboard->update('akun',$where,$data);
		// $this->load->view('admin/index',$data);
		redirect('user');
	}

	//pegawai
	public function pegawai()
	{
		$data=['content'=>'admin/pegawai',
				'pegawai'=>$this->M_dashboard->join('pegawai','departemen.id_departemen = pegawai.id_departemen','departemen')->result()];
		$this->load->view('admin/index',$data);
	}
	public function tambah_pegawai()
	{
		$data=['content'=>'admin/tambah pegawai',
				'departemen'=>$this->M_dashboard->view('departemen')->result()];
				// echo "<pre>";
				// print_r($data);	
				// echo "</pre>";
		$this->load->view('admin/index',$data);
	}
	public function save_pegawai()
	{
		$pegawai=[
			'nama'=>$this->input->post('pegawai'),
			'id_departemen'=>$this->input->post('departemen'),
			'tanggal_lahir'=>$this->input->post('tanggal'),
			'jabatan'=>$this->input->post('jabatan'),
			'nohp'=>$this->input->post('nohp'),
			'email'=>$this->input->post('Email'),
		];
		// $id_pegawai=1;
		$id_pegawai=$this->M_dashboard->insert('pegawai',$pegawai);
		$akun=[
			'id_pegawai'=>$id_pegawai,
			// 'id_r'=>$this->input->post('departemen'),
			// 'tanggal_lahir'=>$this->input->post('tanggal'),
			// 'jabatan'=>$this->input->post('jabatan'),
			// 'nohp'=>$this->input->post('nohp'),
			'username'=>$this->input->post('Email'),
			'email'=>$this->input->post('Email'),
			'password'=>$this->input->post('password'),
		];
		// print_r($pegawai);
		// print_r($akun);
		$this->M_dashboard->insert('akun',$akun);
		redirect('user/pegawai');
	}
}
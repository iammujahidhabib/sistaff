<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		if ($this->session->userdata('isLogin') == FALSE) {
			redirect(base_url().'login');
		}
		$this->session->set_flashdata('open','md');
	}
	public function index()
	{
		$data=[	'content'=>'admin/dasshh',
				'service_log'=>$this->M_dashboard->month_service_log(1)->result(),
				'jumlah_aset'=>$this->M_dashboard->view('aset')->num_rows(),
				'aset_bagus'=>$this->M_dashboard->view_where('aset',array('kondisi'=>'Bagus'))->num_rows(),
				'aset_rusak'=>$this->M_dashboard->view_where('aset',array('kondisi'=>'Rusak'))->num_rows(),
				'get_nilai'=>$this->M_dashboard->get_nilai()->result(),
		];
		$this->session->set_flashdata('open','dash');
		$this->load->view('admin/index',$data);
	}
	
	//kategori
	public function kategori()
	{
		$data=['content'=>'admin/kategori',
				'kategori'=>$this->M_dashboard->view('kategori')->result()];
		$this->load->view('admin/index',$data);
	}
	public function tambah_kategori()
	{
		$data=['content'=>'admin/tambah kategori'];
		$this->load->view('admin/index',$data);
	}
	public function save_kategori()
	{
		$data=['kategori'=>$this->input->post('kategori')];
		print_r($data);
		$this->M_dashboard->insert('kategori',$data);
		redirect('dashboard/kategori');
	}
	public function delete_kategori($id)
	{
		$where=['id_kategori'=>$id];
		// print_r($data);
		$this->M_dashboard->delete('kategori',$where);
		redirect('dashboard/kategori');
	}


	//lokasi
	public function lokasi()
	{
		$data=['content'=>'admin/lokasi',
				'lokasi'=>$this->M_dashboard->view('lokasi')->result()
	];
		$this->load->view('admin/index',$data);
	}
	public function tambah_lokasi()
	{
		$data=['content'=>'admin/tambah lokasi'];
		$this->load->view('admin/index',$data);
	}
	public function save_lokasi()
	{
		$data=['lokasi'=>$this->input->post('lokasi')];
		print_r($data);
		$this->M_dashboard->insert('lokasi',$data);
		redirect('dashboard/lokasi');
	}
	public function delete_lokasi($id)
	{
		$where=['id_lokasi'=>$id];
		// print_r($data);
		$this->M_dashboard->delete('lokasi',$where);
		redirect('dashboard/lokasi');
	}


	//departemen
	public function departemen()
	{
		$data=['content'=>'admin/departemen',
				'departemen'=>$this->M_dashboard->view('departemen')->result()];
		$this->load->view('admin/index',$data);
	}
	public function tambah_departemen()
	{
		$data=['content'=>'admin/tambah departemen'];
		$this->load->view('admin/index',$data);
	}
	public function save_departemen()
	{
		$data=['departemen'=>$this->input->post('departemen')];
		// print_r($data);
		$this->M_dashboard->insert('departemen',$data);
		redirect('dashboard/departemen');
	}
	// public function edit_departemen($id)
	// {
	// 	$where=['id_departemen'=>$id];
	// 	// print_r($data);
	// 	// $this->m_master->view_where($where,'departemen');
	// 	$data=['content'=>'admin/edit_departemen'];
	// 	$this->load->view('admin/departemen',$data);
	// }
	public function delete_departemen($id)
	{
		$where=['id_departemen'=>$id];
		// print_r($data);
		$this->M_dashboard->delete('departemen',$where);
		redirect('dashboard/departemen');
	}


}

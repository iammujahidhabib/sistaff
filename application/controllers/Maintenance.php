<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}
	public function vendor()
	{
		$data=['content'=>'admin/maintenance vendor'];
		$this->load->view('admin/index',$data);
	}
	public function detail($id)
	{
		$data=['content'=>'admin/detail maintenance'];
		$this->load->view('admin/index',$data);
	}
	public function tambah_maintenance()
	{
		$data=['content'=>'admin/tambah maintenance',
			'aset'=>$this->M_dashboard->all_aset()->result()
		];
		$this->load->view('admin/index',$data);
	}
	public function save_maintenance()
	{
		$maintenance=[
				'id_aset'=>$this->input->post('aset'),
				'tanggal_maintenance'=>$this->input->post('tangal'),
				'status'=>1,
				'keterangan_m'=>$this->input->post('barang'),
			];
			$this->M_dashboard->insert('maintenance_log',$maintenance);
		redirect('aset/service_logs/');
	}
	public function orders()
	{
		$data=['content'=>'admin/work orders'];
		$this->load->view('admin/index',$data);
	}
}
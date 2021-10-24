<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}

	public function index()
	{
		$data=['content'=>'admin/sewa',
				'sewa'=>$this->M_dashboard->all_sewa()->result()];
		$this->load->view('admin/index',$data);
	}
	public function tambah_contract()
	{
		$data=[
			'content'=>'admin/tambah contract',
			'perusahaan'=>$this->M_dashboard->view('perusahaan')->result(),
			'aset'=>$this->M_dashboard->view('aset')->result(),
			];
		$this->load->view('admin/index',$data);
	}
	public function save_contract()
	{
		$data=[
			'id_perusahaan'=>$this->input->post('perusahaan'),
			'nilai_kontrak'=>$this->input->post('nilai'),
			'tanggal_pinjam'=>$this->input->post('pinjam'),
			'tanggal_kembali'=>$this->input->post('selesai'),
			'keterangan'=>$this->input->post('keterangan'),
			'status'=>1
		];
		$return_id=$this->M_dashboard->insert('sewa',$data);

		$data_aset = $this->input->post('aset');
		$data_kondisi = $this->input->post('kondisi');
		$pjg_data=count($data_aset);
		$sewa_log=[];
		for ($i=0; $i < $pjg_data ; $i++) { 
			$sewa_log=array(
				'id_sewa'=>$return_id,
				'id_aset'=>$data_aset[$i],
				'tanggal_pinjam'=>$this->input->post('pinjam'),
				'kondisi_sebelum'=>$data_kondisi[$i],
				'status'=>1,
			);
			$this->M_dashboard->insert('sewa_log',$sewa_log);
		}
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// echo "<pre>";
		// print_r($data_aset);
		// echo "</pre>";
		// echo "<pre>";
		// print_r($sewa_log);
		// echo "</pre>";
		redirect('contract');
	}
	public function detail($id)
	{
		$data=['content'=>'admin/sewa',
				'sewa'=>$this->M_dashboard->get_sewa($id)->result(),
				'sewa_log'=>$this->M_dashboard->get_sewa_log($id)->result(),
			];
		// $this->load->view('admin/index',$data);
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	public function approve($id,$status)
	{
		$this->M_dashboard->update('sewa',array('id_sewa'=>$id),array('status'=>$status));
		redirect('contract');
	}
}
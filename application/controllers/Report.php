<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}

	public function index()
	{
		$data = ['content' => 'admin/laporan_new'];
		$this->load->view('admin/index', $data);
	}
}

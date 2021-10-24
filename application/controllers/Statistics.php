<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistics extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('isLogin') == FALSE) {
			redirect('login');
		}
	}
	public function index() // function default untuk kelas login yaitu tampilan login
	{
		$data = [
			'content' => 'admin/statistics'
		];
		$this->load->view('admin/index',$data);
		// $this->load->view('login/index', $data); // menampilkan view dari halaman login
	}
}

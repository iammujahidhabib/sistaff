<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation'); // memanggil library untuk validasi form
		$this->load->model('Users'); // memanggil class Users extend Model
		$this->load->model('Roles'); // memanggil class Roles extend Model
	}
	public function index() // function default untuk kelas login yaitu tampilan login
	{
		$data = [
			'content' => 'login/login'
		];
		$this->load->view('login/index', $data); // menampilkan view dari halaman login
	}
	public function auth() // fun untuk memproses login
	{
		$this->form_validation->set_rules([
			[
				'field' => 'username',
				'label' => lang('ctn_303'),
				'rules' => 'trim|required'
			],
			[
				'field' => 'password',
				'label' => lang('ctn_180'),
				'rules' => 'trim|required'
			]
		]); // memberi validasi inputan login
		if ($this->form_validation->run() == TRUE) { // pengecekan validasi inputan login
			$username   = $this->input->post('username'); // menampung input username
			$password   = $this->input->post('password'); // menampung input password
			$cek_login = $this->Users->login($username, $password); // memanggil function login di dalam kelas Users mengecek apakah password dan username inputan dengan database
			echo count($cek_login);
			if (count($cek_login) == 1) { // pengecekan return yang didapatkan dari fun login kelas Users 
				// Jika $cek_login memberikan return value
				$get_roles = $this->Roles->get_role($cek_login->id_role);  // memanggil function get_role di dalam kelas Roles untuk mendapatkan data roles dengan database
				$data_user = array_merge($cek_login, $get_roles); // menggabungkan 2 array 
				$data_user['isLogin'] = TRUE;
				$this->session->set_userdata($data_user); // menyimpan session user & role tanda sudah berhasil login

				redirect('dashboard'); // mengarahkan untuk menuju ke class dashboard
			} else {
				// jika gagal
				$this->session->set_flashdata('error', '<span style="font-size:9pt;" class="alert alert-danger">Username/Password salah!</span>'); // memberi pemberitahuan kesalahan/kegagalan
				redirect('login'); // mengarahkan untuk menuju ke class login
			}
		} else {
			$this->session->set_flashdata('error', '<span style="font-size:9pt;" class="alert alert-danger">Username/Password salah!</span>');
			redirect('login');
		}
	}
	public function logout() // function for logout
	{
		$this->session->sess_destroy(); // menghapus session
		$this->session->set_flashdata('error', '<span style="font-size:9pt;" class="alert alert-success">Logout Berhasi!</span>'); // memberi informasi logout berhasil
		redirect('login'); // mengarahkan untuk menuju ke class login
	}
}

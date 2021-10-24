<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aset extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}

	public function index($type)
	{
		switch ($type) {
			case 'fixed':
				$data=['content'=>'admin/aset',
					'aset'=>$this->M_dashboard->all_aset_type($type)->result(),
					'title'=>'Fixed Asset',
					'type'=>$type
				];
		$this->load->view('admin/index',$data);
				break;
			case 'license':
				$data=['content'=>'admin/aset',
					'aset'=>$this->M_dashboard->all_aset_type($type)->result(),
					'title'=>'License',
					'type'=>$type
				];
		$this->load->view('admin/index',$data);
				break;
		}
	}

	public function detail($id)
	{
		$data=['content'=>'admin/detail aset',//];
				'aset'=>$this->M_dashboard->get_aset($id)->result(),
				'depresiasi_log'=>$this->M_dashboard->view_where('depresiasi_log',['id_aset'=>$id])->result(),
				'maintenance_log'=>$this->M_dashboard->view_where('maintenance_log',['id_aset'=>$id])->result()
			];
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('admin/index',$data);
	}

	public function tambah_aset()
	{
		$data=['content'=>'admin/tambah aset',
				'departemen'=>$this->M_dashboard->view('departemen')->result(),
				'pegawai'=>$this->M_dashboard->view('pegawai')->result(),
				'lokasi'=>$this->M_dashboard->view('lokasi')->result(),
				'kategori'=>$this->M_dashboard->view('kategori')->result(),
			];
		$this->load->view('admin/index',$data);
	}

	public function save_aset()
	{
		$config=array(
            'upload_path' => './dokumen/',
            'overwrite' => false,
            'encrypt_name' => true,
            'remove_spaces' => true,
            'allowed_types' => 'jpg|png|pdf|docx',
            'max_size' => 5000,
            'xss_clean' => true,
        );
        $this->load->library('upload');
		$this->upload->initialize($config);

		$periode_maintenance=$this->input->post('maintenance');
		$tgl_maintenance='';

		switch ($periode_maintenance) {
			case 7:
				$tgl_maintenance='+7 days';
				break;
			case 14:
				$tgl_maintenance='+14 days';
				break;
			case 30:
				$tgl_maintenance='+1 month';
				break;
			case 90:
				$tgl_maintenance='+3 month';
				break;
			case 180:
				$tgl_maintenance='+6 month';
				break;
			case 365:
				$tgl_maintenance='+1 year';
				break;
		}
		$type=$this->input->post('jenis');
		$tanggal_masuk=$this->input->post('tanggal');
		$tanggal_depresiasi=$tanggal_maintenance=$nilai_depresiasi='';
		if ($type=='fixed') {
			$tanggal_depresiasi = date('Y-m-d', strtotime('+1 year', strtotime($tanggal_masuk)));	
			$tanggal_maintenance = date('Y-m-d', strtotime($tgl_maintenance, strtotime($tanggal_masuk)));	
			$nilai_depresiasi=$this->input->post('nilai')-($this->input->post('nilai')*($this->input->post('depresiasi')/100));
		}elseif ($type=='license') {
			$tanggal_depresiasi = date('Y-m-d', strtotime('+5 year', strtotime($tanggal_masuk)));	
			$tanggal_maintenance = date('Y-m-d', strtotime('+5 year', strtotime($tanggal_masuk)));	
			$nilai_depresiasi=0;
		}		
		// $tanggal_masuk=$this->input->post('tanggal');
		// $tanggal_depresiasi = date('Y-m-d', strtotime('+1 year', strtotime($tanggal_masuk)));	
		// $tanggal_maintenance = date('Y-m-d', strtotime($tgl_maintenance, strtotime($tanggal_masuk)));	
		// $nilai_depresiasi=$this->input->post('nilai')-($this->input->post('nilai')*($this->input->post('depresiasi')/100));
		if ($this->upload->do_upload('dokumen')) {
			$file_data = $this->upload->data();
			$aset=[
				'nama_aset'=>$this->input->post('nama'),
				'serial_number'=>date('Ymdhis'),
				'jenis'=>$type,
				'id_departemen'=>$this->input->post('departemen'),
				'id_lokasi'=>$this->input->post('lokasi'),
				'pj'=>$this->input->post('pj'),
				'tanggal_masuk'=>$this->input->post('tanggal'),
				'keterangan'=>$this->input->post('deskripsi'),
				'kondisi'=>$this->input->post('kondisi'),
				'jumlah'=>$this->input->post('jumlah'),
				'nilai'=>$this->input->post('nilai'),
				'depresiasi'=>$this->input->post('depresiasi'),
				'maintenance'=>$periode_maintenance,
				'dokumen'=>$file_data['file_name'],
				'id_kategori'=>$this->input->post('kategori'),
				// 'jenis'=>$this->input->post('jenis'),
			];
			$id_aset=$this->M_dashboard->insert('aset',$aset);
			
			$depresiasi=[
				'id_aset'=>$id_aset,
				'tanggal_depresiasi'=>$tanggal_depresiasi,
				'nilai_sebelum'=>$this->input->post('nilai'),
				'nilai_sesudah'=>$nilai_depresiasi,
				'keterangan'=>''
			];
			$this->M_dashboard->insert('depresiasi_log',$depresiasi);

			$maintenance=[
				'id_aset'=>$id_aset,
				'tanggal_maintenance'=>$tanggal_maintenance,
				'status'=>1,
				'keterangan_m'=>''
			];
			$this->M_dashboard->insert('maintenance_log',$maintenance);
			
			redirect('aset/index/'.$type);
		}else{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}

	}

	public function search()
	{
		$keyword=$this->input->post('search');
		$data=['content'=>'admin/search',//];
				'aset'=>$this->M_dashboard->search($keyword)->result(),
				'keyword'=>$keyword
			];
			// echo $keyword;
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('admin/index',$data);
	}

	public function service_logs($val='')
	{
		$data=[];
		switch ($val) {
			case 'minggu':
				$data=
				[	'content'=>'admin/service logs',
					'aset'=>$this->M_dashboard->week_service_log(1)->result(),
				'tittle'=>'Maintenance Schedule',
					'jangka'=>date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d')))),
				];
				break;
			case 'bulan':
				$data=
				['content'=>'admin/service logs',
					'aset'=>$this->M_dashboard->month_service_log(1)->result(),
					'jangka'=>date('Y-m-d', strtotime('+1 month', strtotime(date('Y-m-d')))),
				'tittle'=>'Maintenance Schedule',
				];
				break;
			case 'tahun':
				$data=
				[
					'content'=>'admin/service logs',
					'aset'=>$this->M_dashboard->year_service_log(1)->result(),
					'jangka'=>date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d')))),
				'tittle'=>'Maintenance Schedule',
				];
				break;	
			default:
				$data=['content'=>'admin/service logs',
				'aset'=>$this->M_dashboard->all_service_log(1)->result(),
				'tittle'=>'Maintenance Schedule',
				'jangka'=>''];
				break;
		}
		// $data=['content'=>'admin/service logs',
		// 		'aset'=>$this->M_dashboard->all_service_log()->result()];
		$this->load->view('admin/index',$data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	}
	public function maintenance_history()
	{
		
				$data=['content'=>'admin/service logs',
				'aset'=>$this->M_dashboard->all_service_log(2)->result(),
				'tittle'=>'Maintenance History',
				'jangka'=>''];
				
		// $data=['content'=>'admin/service logs',
		// 		'aset'=>$this->M_dashboard->all_service_log()->result()];
		$this->load->view('admin/index',$data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	}
	public function warranty()
	{
		$data=['content'=>'admin/warranty'];
		$this->load->view('admin/index',$data);
	}
	public function insurance()
	{
		$data=['content'=>'admin/insurance'];
		$this->load->view('admin/index',$data);
	}
	public function ubah_maintenance($id,$status)
	{
		$keterangan = $this->input->post('keterangan');
		$data=[
			// 'id_maintenance'=>$id,
			'status'=>$status,
			'keterangan_m'=>$keterangan,
		];
		$this->M_dashboard->update('maintenance_log',array('id_maintenance'=>$id),$data);
		// print_r($data);
		redirect('aset/service_logs/');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
	public function insert($tabel, $data) {
         $this->db->insert($tabel, $data);
         return $this->db->insert_id();
    }
	public function update($tabel, $where, $data) {
        $this->db->where($where);
        return $this->db->update($tabel, $data);
    }
    public function delete($tabel, $where) {
        $this->db->where($where);
        return $this->db->delete($tabel);
    }
    public function view_where($tabel, $where) {
        $this->db->where($where);
        return $this->db->get($tabel);
    }
    public function view($tabel) {
        return $this->db->get($tabel);
    }
    public function join($tabel,$using,$with)
    {
    	$this->db->select('*');
		$this->db->from($tabel);
		$this->db->join($with, $using);
		$query = $this->db->get();
		return $query;
    }
    public function all_aset()
    {   
        $this->db->select('*');
        $this->db->from('aset');
        $this->db->join('departemen','departemen.id_departemen=aset.id_departemen');
        $this->db->join('kategori','kategori.id_kategori=aset.id_kategori');
        $this->db->join('pegawai','pegawai.id_pegawai=aset.pj');
        $this->db->join('lokasi','lokasi.id_lokasi=aset.id_lokasi');
        $query = $this->db->get();
        return $query;
    }
     public function all_aset_type($type)
    {   
        $this->db->select('*');
        $this->db->from('aset');
        $this->db->join('departemen','departemen.id_departemen=aset.id_departemen');
        $this->db->join('kategori','kategori.id_kategori=aset.id_kategori');
        $this->db->join('pegawai','pegawai.id_pegawai=aset.pj');
        $this->db->join('lokasi','lokasi.id_lokasi=aset.id_lokasi');
        $this->db->where('aset.jenis',$type);
        $query = $this->db->get();
        return $query;
    }
    public function get_aset($id)
    {   
        $this->db->select('*');
        $this->db->from('aset');
        $this->db->join('departemen','departemen.id_departemen=aset.id_departemen');
        $this->db->join('kategori','kategori.id_kategori=aset.id_kategori');
        $this->db->join('pegawai','pegawai.id_pegawai=aset.pj');
        $this->db->join('lokasi','lokasi.id_lokasi=aset.id_lokasi');
        $this->db->join('qrcode','qrcode.id_aset=aset.id_aset', 'left');
        $this->db->where('aset.id_aset',$id);
        $query = $this->db->get();
        return $query;
    }
    public function get_qr($id)
    {   
        $this->db->select('*');
        $this->db->from('qrcode');
        $this->db->where('qrcode.id_aset',$id);
        $query = $this->db->get();
        return $query;
    }
    public function all_service_log($status)
    {   
        $this->db->select('*');
        $this->db->from('maintenance_log');
        $this->db->join('aset','aset.id_aset=maintenance_log.id_aset');
        $this->db->join('departemen','departemen.id_departemen=aset.id_departemen');
        $this->db->join('kategori','kategori.id_kategori=aset.id_kategori');
        $this->db->join('pegawai','pegawai.id_pegawai=aset.pj');
        $this->db->join('lokasi','lokasi.id_lokasi=aset.id_lokasi');
        if ($status == 1) {
            $this->db->where('status !=',2);
        }else{
            $this->db->where('status =',2);
        }
        $query = $this->db->get();
        return $query;
    }
    public function month_service_log($status)
    {   
        $this->db->select('*');
        $this->db->from('maintenance_log');
        $this->db->join('aset','aset.id_aset=maintenance_log.id_aset');
        $this->db->join('departemen','departemen.id_departemen=aset.id_departemen');
        $this->db->join('kategori','kategori.id_kategori=aset.id_kategori');
        $this->db->join('pegawai','pegawai.id_pegawai=aset.pj');
        $this->db->join('lokasi','lokasi.id_lokasi=aset.id_lokasi');
        $this->db->where('tanggal_maintenance >=',date('Y-m-d'));
        $this->db->where('tanggal_maintenance <=',date('Y-m-d', strtotime('+1 month', strtotime(date('Y-m-d')))));
        if ($status == 1) {
            $this->db->where('status !=',2);
        }else{
            $this->db->where('status =',2);
        }
        $this->db->order_by("status", "ASC"); 
        $this->db->order_by("tanggal_maintenance", "ASC"); 
        $query = $this->db->get();
        return $query;
    }
    public function week_service_log($status)
    {   
        $this->db->select('*');
        $this->db->from('maintenance_log');
        $this->db->join('aset','aset.id_aset=maintenance_log.id_aset');
        $this->db->join('departemen','departemen.id_departemen=aset.id_departemen');
        $this->db->join('kategori','kategori.id_kategori=aset.id_kategori');
        $this->db->join('pegawai','pegawai.id_pegawai=aset.pj');
        $this->db->join('lokasi','lokasi.id_lokasi=aset.id_lokasi');
        $this->db->where('tanggal_maintenance >=',date('Y-m-d'));
        $this->db->where('tanggal_maintenance <=',date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d')))));
        if ($status == 1) {
            $this->db->where('status !=',2);
        }else{
            $this->db->where('status =',2);
        }
        $this->db->order_by("status", "ASC"); 
        $this->db->order_by("tanggal_maintenance", "ASC"); 
        $query = $this->db->get();
        return $query;
    }
    public function year_service_log($status)
    {   
        $this->db->select('*');
        $this->db->from('maintenance_log');
        $this->db->join('aset','aset.id_aset=maintenance_log.id_aset');
        $this->db->join('departemen','departemen.id_departemen=aset.id_departemen');
        $this->db->join('kategori','kategori.id_kategori=aset.id_kategori');
        $this->db->join('pegawai','pegawai.id_pegawai=aset.pj');
        $this->db->join('lokasi','lokasi.id_lokasi=aset.id_lokasi');
        $this->db->where('tanggal_maintenance >=',date('Y-m-d'));
        $this->db->where('tanggal_maintenance <=',date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d')))));
        if ($status == 1) {
            $this->db->where('status !=',2);
        }else{
            $this->db->where('status =',2);
        }
        $this->db->order_by("status", "ASC"); 
        $this->db->order_by("tanggal_maintenance", "ASC"); 
        $query = $this->db->get();
        return $query;
    }
    public function search($keyword)
    {
        $this->db->from('aset');
        $this->db->join('kategori','kategori.id_kategori=aset.id_kategori');
        $this->db->join('lokasi','lokasi.id_lokasi=aset.id_lokasi');
        $this->db->like('aset.serial_number', $keyword);
        $this->db->or_like('aset.nama_aset', $keyword);
        $this->db->or_like('aset.tanggal_masuk', $keyword);
        $this->db->or_like('lokasi.lokasi', $keyword);
        $this->db->or_like('kategori.kategori', $keyword);
        
        return $this->db->get(); 
    }
    public function get_nilai()
    {
        // $query = $this->db->query("SELECT SUM(nilai) nilai FROM aset");
        return $this->db->query("SELECT SUM(nilai) nilai FROM aset");
    }
    public function all_sewa()
    {   
        $this->db->select('*');
        $this->db->from('sewa');
        $this->db->join('perusahaan','perusahaan.id_perusahaan=sewa.id_perusahaan');
        $query = $this->db->get();
        return $query;
    }
    public function get_sewa($id)
    {   
        $this->db->select('*');
        $this->db->from('sewa');
        $this->db->join('perusahaan','perusahaan.id_perusahaan=sewa.id_perusahaan');
        $this->db->where('sewa.id_sewa',$id);
        $query = $this->db->get();
        return $query;
    }
    public function get_sewa_log($id)
    {   
        $this->db->select('*');
        $this->db->from('sewa_log');
        $this->db->where('id_sewa',$id);
        $query = $this->db->get();
        return $query;
    }
}
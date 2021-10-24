<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Roles extends CI_Model
{
    public function get_role($id)
    {
        $this->db->where(['id_role'=>$id]); // inisiasi where untuk query ke database mendapatkan data role berdasarkan id role di database
        return $this->db->get("role")->row(); // mengeksekusi query dan mengembalikan nilai array jika terdapat data
    }
}

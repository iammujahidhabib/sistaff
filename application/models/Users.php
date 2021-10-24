<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model
{
    public function login($email, $password)
    {
        $this->db->where(['email'=>$email,'password'=>$password]); // inisiasi where untuk query ke database mengecek apakah email dan password datanya tersedia di database
        return $this->db->get("akun")->row(); // mengeksekusi query dan mengembalikan nilai array jika terdapat data
    }
}

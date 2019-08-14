<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Absen extends CI_Model {
    
    public function getAllKecamatan(){
        $hasil = $this->db->query('SELECT * FROM kecamatan');
        return $hasil;
    }

    public function getSubSekolahKecamatan($nama_kecamatan){
        $hasil = $this->db->query('SELECT * FROM sekolah_kecamatan WHERE nama_kecamatan = "'.$nama_kecamatan.'"');
        return $hasil->result();
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Absen_Uptd extends CI_Model {
    
    // public function getAllKecamatan(){
    //     return $this->db->get('kecamatan')->result_array();
    // }
    
    public function getAllTahun(){
        return $this->db->get('tb_tahun')->result_array();
    }

    public function getDataAbsen(){
        $this->db->where('kecamatan',$this->session->userdata('username'));
        return $this->db->get('absen')->result_array();
    }

    public function insert($data){
      return $this->db->insert('absen',$data);
    }

    
    public function delete($where){
        $this->db->where($where);
        $this->db->delete('absen');
        return TRUE;
    }

    public function update($data,$kondisi){
        $this->db->update('absen',$data,$kondisi);
        return TRUE;
    }

    // public function getSubSekolahKecamatan($nama_kecamatan){
    //     $hasil = $this->db->query('SELECT * FROM sekolah_kecamatan WHERE nama_kecamatan = "'.$nama_kecamatan.'"');
    //     return $hasil->result();
    // }
}
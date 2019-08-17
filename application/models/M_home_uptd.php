<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home_Uptd extends CI_Model {
    

    public function getJmlPegawai(){
        $this->db->where('kec',$this->session->userdata('username'));
        $query = $this->db->get('pegawai');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

    public function getJmlKonsultasi(){
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('hapus_admin','no');
        $query = $this->db->get('konsultasi');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }
    
    public function getJmlUser(){
        // $this->db->where('hapus_admin','no');
        $this->db->where('username',$this->session->userdata('username'));
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

}
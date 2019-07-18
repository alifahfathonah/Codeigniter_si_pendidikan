<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {
    
    public function cariDataUsia(){
        $header = $this->input->post('header',true);
        $kecamatan = $this->input->post('kecamatan',true);
        $tahun = $this->input->post('tahun',true);
        
        $this->db->where('kecamatan', $kecamatan);
        $this->db->where('tahun', $tahun);
        return $this->db->get('pbu')->result_array();
    }
    public function cariDataSTK(){
        $header = $this->input->post('header',true);
        $kecamatan = $this->input->post('kecamatan',true);
        $tahun = $this->input->post('tahun',true);
        
        $this->db->where('kecamatan', $kecamatan);
        $this->db->where('tahun', $tahun);
        return $this->db->get('stk')->result_array();
    }
    public function cariDataPSD(){
        $header = $this->input->post('header',true);
        $kecamatan = $this->input->post('kecamatan',true);
        $tahun = $this->input->post('tahun',true);
        
        $this->db->where('kecamatan', $kecamatan);
        $this->db->where('tahun', $tahun);
        return $this->db->get('psd')->result_array();
    }
    public function cariDataPSMP(){
        $header = $this->input->post('header',true);
        $kecamatan = $this->input->post('kecamatan',true);
        $tahun = $this->input->post('tahun',true);
        
        $this->db->where('kecamatan', $kecamatan);
        $this->db->where('tahun', $tahun);
        return $this->db->get('psmp')->result_array();
    }
    public function cariDataPMAK(){
        $header = $this->input->post('header',true);
        $kecamatan = $this->input->post('kecamatan',true);
        $tahun = $this->input->post('tahun',true);
        
        $this->db->where('kecamatan', $kecamatan);
        $this->db->where('tahun', $tahun);
        return $this->db->get('pmak')->result_array();
    }
    public function cariDataPNF(){
        $header = $this->input->post('header',true);
        $kecamatan = $this->input->post('kecamatan',true);
        $tahun = $this->input->post('tahun',true);
        
        $this->db->where('kecamatan', $kecamatan);
        $this->db->where('tahun', $tahun);
        return $this->db->get('pnf')->result_array();
    }
}
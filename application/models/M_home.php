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
}
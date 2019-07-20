<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pendidikan extends CI_Model {
    
    public function getPBU(){
        $tahun = '2017';
        
        $this->db->where('tahun', $tahun);
        return $this->db->get('pbu')->result_array();
    }
    public function usia0_6(){
        $this->db->select('SUM(usia0_6) as total');
        $this->db->from('pbu');
        return $this->db->get()->row()->total;
    }
    public function usia7_12(){
        $this->db->select('SUM(usia7_12) as total');
        $this->db->from('pbu');
        return $this->db->get()->row()->total;
    }
    public function usia13_15(){
        $this->db->select('SUM(usia13_15) as total');
        $this->db->from('pbu');
        return $this->db->get()->row()->total;
    }
    public function usia16_18(){
        $this->db->select('SUM(usia16_18) as total');
        $this->db->from('pbu');
        return $this->db->get()->row()->total;
    }

    public function editDataPBU0_6(){
        $data=[
            'usia0_6' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('kecamatan',$this->input->post('kecamatan'));
        return $this->db->update('pbu',$data);
    }
    
    public function editDataPBU7_12(){
        $data=[
            'usia7_12' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('kecamatan',$this->input->post('kecamatan'));
        return $this->db->update('pbu',$data);
    }
}
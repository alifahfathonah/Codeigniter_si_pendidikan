<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Konsultasi extends CI_Model {
    
    public function getAllKonsultasi(){
        $query="SELECT * FROM konsultasi ORDER BY status ASC";
        return $this->db->query($query)->result_array();;
        // return $this->db->get('konsultasi')->result_array();
        // return $query->result_array();
    }

    public function tanggapKonsultasi($id_konsultasi){
        // $id=$this->input->post('id_konsultasi');
        date_default_timezone_set('Asia/Makassar');
        $tanggap=$this->input->post('tanggap');
        $tanggal = date("Y-m-d H:i:s");
        $data = [
            'isi_balasan' => $tanggap,
            'status' => 'sudah dibaca',
            'tgl_balas' => $tanggal
        ];
        $this->db->where('id_konsultasi',$id_konsultasi);
        return $this->db->update('konsultasi',$data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Konsultasi_Uptd extends CI_Model {
    
    public function getAllKonsultasi(){
        $kec = $this->session->userdata('username');
        $query="SELECT * FROM konsultasi  WHERE kecamatan ='".$kec."' AND hapus_uptd='no' ORDER BY status DESC";
        return $this->db->query($query)->result_array();;
        // return $this->db->get('konsultasi')->result_array();
        // return $query->result_array();
    }

    // public function tanggapKonsultasi($id_konsultasi){
    //     // $id=$this->input->post('id_konsultasi');
    //     date_default_timezone_set('Asia/Makassar');
    //     $tanggap=$this->input->post('tanggap');
    //     $tanggal = date("Y-m-d H:i:s");
    //     $data = [
    //         'isi_balasan' => $tanggap,
    //         'status' => 'sudah dibaca',
    //         'tgl_balas' => $tanggal
    //     ];
    //     $this->db->where('id_konsultasi',$id_konsultasi);
    //     return $this->db->update('konsultasi',$data);
    // }

    public function kirimDataKonsultasi(){
        date_default_timezone_set('Asia/Makassar');
        $tanggal = date("Y-m-d H:i:s");
        $data = [
            'kecamatan' => $this->session->userdata('username'),
            'judul_konsultasi' => $this->input->post('judul_konsultasi', true),
            'isi_konsultasi' => $this->input->post('judul_konsultasi', true),
            'status' => 'belum dibaca',
            'tgl_kirim' => $tanggal,
            'hapus_uptd' => 'no',
            'hapus_admin' => 'no'
        ];
        $this->db->insert('konsultasi',$data);
    }

    public function hapusDataKonsultasi(){
        $id = $this->uri->segment(3);
        $data=[
            'hapus_uptd' => 'yes'
        ];
        $this->db->where('id_konsultasi',$id);
        return $this->db->update('konsultasi',$data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Konsultasi extends CI_Model {
    
    public function getAllKonsultasi(){
        $query="SELECT * FROM konsultasi WHERE hapus_admin = 'no' ORDER BY status ASC";
        return $this->db->query($query)->result_array();;
        // return $this->db->get('konsultasi')->result_array();
        // return $query->result_array();
    }
    public function getAllKecamatan(){
        return $this->db->get('kecamatan')->result_array();
    }

    public function kirimDataKonsultasi(){
        date_default_timezone_set('Asia/Makassar');
        $tanggal = date("Y-m-d H:i:s");
        $data = [
            'kecamatan' => $this->input->post('nama_kecamatan', true),
            'judul_konsultasi' => $this->input->post('judul_konsultasi', true),
            'isi_konsultasi' => $this->input->post('judul_konsultasi', true),
            'status' => 'sudah dibaca',
            'tgl_kirim' => $tanggal,
            'tgl_balas' => $tanggal,
            'hapus_admin' => 'no'
        ];
        $this->db->insert('konsultasi',$data);
    }

    public function tanggapKonsultasi($id_konsultasi){
        // $id=$this->input->post('id_konsultasi');
        date_default_timezone_set('Asia/Makassar');
        $tanggap=$this->input->post('tanggap');
        $tanggal = date("Y-m-d H:i:s");
        $data = [
            'isi_balasan' => $tanggap,
            'status' => 'sudah dibaca',
            'tgl_balas' => $tanggal,
        ];
        $this->db->where('id_konsultasi',$id_konsultasi);
        return $this->db->update('konsultasi',$data);
    }

    public function hapusDataKonsultasi(){
        $id = $this->uri->segment(3);
        $data=[
            'hapus_admin' => 'yes'
        ];
        $this->db->where('id_konsultasi',$id);
        return $this->db->update('konsultasi',$data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tk extends CI_Model {
    
    public function getTk(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_jml_siswa');
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }

    public function tambahDataTkBaru(){
        $nama_kecamatan = $this->input->post('nama_kecamatan', true);
        $tingkatan = 'tk';
        $tahun = $this->input->post('tahun', true);
        $data=[
            'kecamatan' => $nama_kecamatan,
            'tingkatan' => $tingkatan,
            'jumlah' => $this->input->post('jumlah_siswa', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_jml_siswa', $data);
        $data1=[
            'kecamatan' => $nama_kecamatan,
            'tingkatan' => $tingkatan,
            'jumlah' => $this->input->post('jumlah_bangunan_baik', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_bangunan_baik', $data1);
        $data2=[
            'kecamatan' => $nama_kecamatan,
            'tingkatan' => $tingkatan,
            'jumlah' => $this->input->post('jumlah_bangunan_baik', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_bangunan_tdk_baik', $data2);
    }
    
    public function tambahDataTkUmumBaru(){
        
        $tingkatan = 'tk';
        $tahun = $this->input->post('tahun1', true);
        $data=[
            'tingkatan' => $tingkatan,
            'jumlah' => $this->input->post('jumlah_pengelola_sekolah_negeri', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_pengelola_negeri', $data);
        $data1=[
            'tingkatan' => $tingkatan,
            'jumlah' => $this->input->post('jumlah_pengelola_sekolah_swasta', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_pengelola_swasta', $data1);
        
        $data2=[
            'tingkatan' => $tingkatan,
            'jumlah' => $this->input->post('jumlah_ruang_kelas', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_ruang_kelas', $data2);
        
        $data3=[
            'tingkatan' => $tingkatan,
            'jumlah' => $this->input->post('jumlah_pendidik_bersertifikat', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_pendidik_bersertifikat', $data3);
        
        $data4=[
            'tingkatan' => $tingkatan,
            'jumlah' => $this->input->post('jumlah_pendidik_tdk_bersertifikat', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_pendidik_tdk_bersertifikat', $data4);
        
        $data5=[
            'tingkatan' => $tingkatan,
            'nilai' => $this->input->post('jumlah_pendidik_tdk_bersertifikat', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_rasio', $data5);
    }
    
}
  
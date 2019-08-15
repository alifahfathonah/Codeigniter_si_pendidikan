<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pendidikan_Usia extends CI_Model {

    public function tambahDataPendidikanUsia(){
        $nama_kecamatan = $this->input->post('nama_kecamatan', true);
        $usia = $this->input->post('usia', true);
        $jumlah = $this->input->post('jumlah', true);
        $tahun = $this->input->post('tahun', true);
        $this->db->where('nama_kecamatan', $nama_kecamatan);
        $this->db->where('usia', $usia);
        $this->db->where('tahun', $tahun);
        $hasil=$this->db->get('pendidikan_usia');
        $data=[
            'nama_kecamatan' => $nama_kecamatan,
            'usia' => $usia,
            'jumlah' => $jumlah,
            'tahun' => $tahun
        ];
        if($hasil->num_rows()<=0){
            $this->db->insert('pendidikan_usia', $data);
        }else{
            // $this->db->;
            // $this->db->update('pendidikan_usia', $data);
        }

    }

    public function getAllTahun(){
        return $this->db->get('tb_tahun')->result_array();
    }

    public function getAllKecamatan(){
        return $this->db->get('kecamatan')->result_array();
    }

    public function getAllDataPendidikanUsia0_6(){
        $this->db->where('tahun', '2019');
        $this->db->where('usia', '0-6');
        return $this->db->get('pendidikan_usia')->result_array();
    }
    public function getAllDataPendidikanUsia7_12(){
        $this->db->where('tahun', '2019');
        $this->db->where('usia', '7-12');
        return $this->db->get('pendidikan_usia')->result_array();
    }
    public function getAllDataPendidikanUsia13_15(){
        $this->db->where('tahun', '2019');
        $this->db->where('usia', '13-15');
        return $this->db->get('pendidikan_usia')->result_array();
    }
    public function getAllDataPendidikanUsia16_18(){
        $this->db->where('tahun', '2019');
        $this->db->where('usia', '16-18');
        return $this->db->get('pendidikan_usia')->result_array();
    }

    public function usia0_6(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('pendidikan_usia');
        $this->db->where('tahun','2019');
        $this->db->where('usia','0-6');
        return $this->db->get()->row()->total;
    }
    public function usia7_12(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('pendidikan_usia');
        $this->db->where('tahun','2019');
        $this->db->where('usia','7-12');
        return $this->db->get()->row()->total;
    }
    public function usia13_15(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('pendidikan_usia');
        $this->db->where('tahun','2019');
        $this->db->where('usia','13-15');
        return $this->db->get()->row()->total;
    }
    public function usia16_18(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('pendidikan_usia');
        $this->db->where('tahun','2019');
        $this->db->where('usia','16-18');
        return $this->db->get()->row()->total;
    }

    // cari
    public function getAllDataPendidikanUsia0_6cari(){
        $thn = $this->input->post('keyword');
        $this->db->where('tahun', $thn);
        $this->db->where('usia', '0-6');
        return $this->db->get('pendidikan_usia')->result_array();
    }
    public function getAllDataPendidikanUsia7_12cari(){
        $thn = $this->input->post('keyword');
        $this->db->where('tahun', $thn);
        $this->db->where('usia', '7-12');
        return $this->db->get('pendidikan_usia')->result_array();
    }
    public function getAllDataPendidikanUsia13_15cari(){
        $thn = $this->input->post('keyword');
        $this->db->where('tahun', $thn);
        $this->db->where('usia', '13-15');
        return $this->db->get('pendidikan_usia')->result_array();
    }
    public function getAllDataPendidikanUsia16_18cari(){
        $thn = $this->input->post('keyword');
        $this->db->where('tahun', $thn);
        $this->db->where('usia', '16-18');
        return $this->db->get('pendidikan_usia')->result_array();
    }

    public function usia0_6cari(){
        $thn = $this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('pendidikan_usia');
        $this->db->where('tahun',$thn);
        $this->db->where('usia','0-6');
        return $this->db->get()->row()->total;
    }
    public function usia7_12cari(){
        $thn = $this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('pendidikan_usia');
        $this->db->where('tahun',$thn);
        $this->db->where('usia','7-12');
        return $this->db->get()->row()->total;
    }
    public function usia13_15cari(){
        $thn = $this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('pendidikan_usia');
        $this->db->where('tahun',$thn);
        $this->db->where('usia','13-15');
        return $this->db->get()->row()->total;
    }
    public function usia16_18cari(){
        $thn = $this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('pendidikan_usia');
        $this->db->where('tahun',$thn);
        $this->db->where('usia','16-18');
        return $this->db->get()->row()->total;
    }
    // end cari

    public function editDataPBU0_6(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('nama_kecamatan',$this->input->post('nama_kecamatan'));
        $this->db->where('usia', '0-6');
        return $this->db->update('pendidikan_usia',$data);
    }

    public function editDataPBU7_12(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('nama_kecamatan',$this->input->post('nama_kecamatan'));
        $this->db->where('usia', '7-12');
        return $this->db->update('pendidikan_usia',$data);
    }

    public function editDataPBU13_15(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('nama_kecamatan',$this->input->post('nama_kecamatan'));
        $this->db->where('usia', '13-15');
        return $this->db->update('pendidikan_usia',$data);
    }
    
    public function editDataPBU16_18(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('nama_kecamatan',$this->input->post('nama_kecamatan'));
        $this->db->where('usia', '16-18');
        return $this->db->update('pendidikan_usia',$data);
    }

    public function hapusDataPBU(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("DELETE FROM pendidikan_usia WHERE id_pendidikan_usia = '".$id_pbu."'");
    }

    
}
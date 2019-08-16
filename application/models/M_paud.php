<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Paud extends CI_Model {
    
    public function tambahDataPaudBaru(){
        $data=[
            'nama_kecamatan' => $this->input->post('nama_kecamatan', true),
            'berdasarkan' => $this->input->post('berdasarkan', true),
            'jumlah' => $this->input->post('jumlah', true),
            'tahun' => $this->input->post('tahun', true)
        ];
        $this->db->insert('paud', $data);
    }
    
    
    public function getAllTahun(){
        return $this->db->get('tb_tahun')->result_array();
    }
    
    public function getAllKecamatan(){
        return $this->db->get('kecamatan')->result_array();
    }
    
    public function peserta(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('paud');
        $this->db->where('tahun','2019');
        $this->db->where('berdasarkan','peserta');
        return $this->db->get()->row()->total;
    }
    
    public function bangunan(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('paud');
        $this->db->where('tahun','2019');
        $this->db->where('berdasarkan','bangunan');
        return $this->db->get()->row()->total;
    }

    public function pengajar(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('paud');
        $this->db->where('tahun','2019');
        $this->db->where('berdasarkan','pengajar');
        return $this->db->get()->row()->total;
    }

    public function peserta_paud(){
        $this->db->where('tahun', '2019');
        $this->db->where('berdasarkan', 'peserta');
        return $this->db->get('paud')->result_array();
    }
    
    public function bangunan_paud(){
        $this->db->where('tahun', '2019');
        $this->db->where('berdasarkan', 'bangunan');
        return $this->db->get('paud')->result_array();
    }
    
    public function pengajar_paud(){
        $this->db->where('tahun', '2019');
        $this->db->where('berdasarkan', 'pengajar');
        return $this->db->get('paud')->result_array();
    }
    
    // cari
    public function pesertacari(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('paud');
        $this->db->where('tahun', $this->input->post('keyword'));
        $this->db->where('berdasarkan','peserta');
        return $this->db->get()->row()->total;
    }
    
    public function bangunancari(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('paud');
        $this->db->where('tahun', $this->input->post('keyword'));
        $this->db->where('berdasarkan','bangunan');
        return $this->db->get()->row()->total;
    }

    public function pengajarcari(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('paud');
        $this->db->where('tahun', $this->input->post('keyword'));
        $this->db->where('berdasarkan','pengajar');
        return $this->db->get()->row()->total;
    }

    public function peserta_paudcari(){
        $this->db->where('tahun', $this->input->post('keyword'));
        $this->db->where('berdasarkan', 'peserta');
        return $this->db->get('paud')->result_array();
    }
    
    public function bangunan_paudcari(){
        $this->db->where('tahun', $this->input->post('keyword'));
        $this->db->where('berdasarkan', 'bangunan');
        return $this->db->get('paud')->result_array();
    }
    
    public function pengajar_paudcari(){
        $this->db->where('tahun', $this->input->post('keyword'));
        $this->db->where('berdasarkan', 'pengajar');
        return $this->db->get('paud')->result_array();
    }
    // end cari

    // edit
    public function editDataPesertaPaud(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('nama_kecamatan',$this->input->post('nama_kecamatan'));
        $this->db->where('berdasarkan', 'peserta');
        return $this->db->update('paud',$data);
    }
    
    public function editDataBangunanPaud(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('nama_kecamatan',$this->input->post('nama_kecamatan'));
        $this->db->where('berdasarkan', 'bangunan');
        return $this->db->update('paud',$data);
    }
    
    public function editDataPengajarPaud(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true)
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('nama_kecamatan',$this->input->post('nama_kecamatan'));
        $this->db->where('berdasarkan', 'pengajar');
        return $this->db->update('paud',$data);
    }
    // end edit

    public function hapusDataPaud(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("DELETE FROM paud WHERE id_paud = '".$id_pbu."'");
    }

}

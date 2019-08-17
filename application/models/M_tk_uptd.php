<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tk_Uptd extends CI_Model {
    
    // tamplikan
    public function getTk(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_jml_siswa');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }

    public function getBgBaik(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_bangunan_baik');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getBgTdkBaik(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_bangunan_tdk_baik');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPglNegeri(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_pengelola_negeri');
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPglSwasta(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_pengelola_swasta');
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getRgKelas(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_ruang_kelas');
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPdBersertifikat(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_pendidik_bersertifikat');
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPdTdkBersertifikat(){
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_pendidik_tdk_bersertifikat');
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getJmlRasio(){
        $this->db->select('SUM(nilai) as total');
        $this->db->from('tb_rasio');
        $this->db->where('tahun','2019');
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPesertaSiswa(){
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_jml_siswa')->result_array();
    }
    
    public function getDataBgBaik(){
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_bangunan_baik')->result_array();
    }
    
    public function getDataBgTdkBaik(){
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_bangunan_tdk_baik')->result_array();
    }
    
    public function getDataPglNegeri(){
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_pengelola_negeri')->result_array();
    }
    
    public function getDataPglSwasta(){
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_pengelola_swasta')->result_array();
    }
    
    public function getDataRgKelas(){
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_ruang_kelas')->result_array();
    }
    
    public function getDataPdBersertifikat(){
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_pendidik_bersertifikat')->result_array();
    }
    
    public function getDataPdTdkBersertifikat(){
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_pendidik_tdk_bersertifikat')->result_array();
    }
    
    public function getDataRasio(){
        $this->db->where('tahun', '2019');
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_rasio')->result_array();
    }
    // end tampilkan
    
    // tamplikan cari
    public function getTkCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_jml_siswa');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }

    public function getBgBaikCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_bangunan_baik');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getBgTdkBaikCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_bangunan_tdk_baik');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPglNegeriCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_pengelola_negeri');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPglSwastaCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_pengelola_swasta');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getRgKelasCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_ruang_kelas');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPdBersertifikatCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_pendidik_bersertifikat');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPdTdkBersertifikatCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('tb_pendidik_tdk_bersertifikat');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getJmlRasioCari(){
        $keyword=$this->input->post('keyword');
        $this->db->select('SUM(nilai) as total');
        $this->db->from('tb_rasio');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan','tk');
        return $this->db->get()->row()->total;
    }
    
    public function getPesertaSiswaCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_jml_siswa')->result_array();
    }
    
    public function getDataBgBaikCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_bangunan_baik')->result_array();
    }
    
    public function getDataBgTdkBaikCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('kecamatan',$this->session->userdata('username'));
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_bangunan_tdk_baik')->result_array();
    }
    
    public function getDataPglNegeriCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_pengelola_negeri')->result_array();
    }
    
    public function getDataPglSwastaCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_pengelola_swasta')->result_array();
    }
    
    public function getDataRgKelasCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_ruang_kelas')->result_array();
    }
    
    public function getDataPdBersertifikatCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_pendidik_bersertifikat')->result_array();
    }
    
    public function getDataPdTdkBersertifikatCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_pendidik_tdk_bersertifikat')->result_array();
    }
    
    public function getDataRasioCari(){
        $keyword=$this->input->post('keyword');
        $this->db->where('tahun', $keyword);
        $this->db->where('tingkatan', 'tk');
        return $this->db->get('tb_rasio')->result_array();
    }

    
    // end tampilkan

    // edit
    public function editDataPesertaSiswa(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('kecamatan',$this->input->post('kecamatan'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_jml_siswa',$data);
    }
    
    public function editDataBgBaik(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('kecamatan',$this->input->post('kecamatan'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_bangunan_baik',$data);
    }
    
    public function editDataBgTdkBaik(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('kecamatan',$this->input->post('kecamatan'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_bangunan_tdk_baik',$data);
    }
    
    public function editDataPglNegeri(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_pengelola_negeri',$data);
    }
    
    public function editDataPglSwasta(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_pengelola_swasta',$data);
    }
    
    public function editDataRgKelas(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_ruang_kelas',$data);
    }
    
    public function editDataPdBersertifikat(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_pendidik_bersertifikat',$data);
    }
    
    public function editDataPdTdkBersertifikat(){
        $data=[
            'jumlah' => $this->input->post('jumlah',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_pendidik_tdk_bersertifikat',$data);
    }
    
    public function editDataRasio(){
        $data=[
            'nilai' => $this->input->post('nilai',true),
        ];
        $this->db->where('tahun',$this->input->post('tahun'));
        $this->db->where('tingkatan', 'tk');
        return $this->db->update('tb_rasio',$data);
    }
    // end edit

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
            'jumlah' => $this->input->post('jumlah_bangunan_tdk_baik', true),
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
            'nilai' => $this->input->post('rasio', true),
            'tahun' => $tahun
        ];
        $this->db->insert('tb_rasio', $data5);
    }

    public function hapusDataSiswa(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_jml_siswa SET jumlah = 0 WHERE id_tb_jml_siswa = '".$id_pbu."'");
    }
    
    public function hapusBgBaik(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_bangunan_baik SET jumlah = 0 WHERE id_tb_bangunan_baik = '".$id_pbu."'");
    }
    
    public function hapusBgTdkBaik(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_bangunan_tdk_baik SET jumlah = 0 WHERE id_tb_bangunan_tdk_baik = '".$id_pbu."'");
    }
    
    public function hapusPglNegeri(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_pengelola_negeri SET jumlah = 0 WHERE id_tb_pengelola_negeri = '".$id_pbu."'");
    }
    
    public function hapusPglSwasta(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_pengelola_swasta SET jumlah = 0 WHERE id_tb_pengelola_swasta = '".$id_pbu."'");
    }
    
    public function hapusRgKelas(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_ruang_kelas SET jumlah = 0 WHERE id_tb_ruang_kelas = '".$id_pbu."'");
    }
    
    public function hapusPdBersertifikat(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_pendidik_bersertifikat SET jumlah = 0 WHERE id_tb_pendidik_bersertifikat = '".$id_pbu."'");
    }
    
    public function hapusPdTdkBersertifikat(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_pendidik_tdk_bersertifikat SET jumlah = 0 WHERE id_tb_pendidik_tdk_bersertifikat = '".$id_pbu."'");
    }
    
    public function hapusRasio(){
        $id_pbu = $this->uri->segment(3);
        return $this->db->query("UPDATE tb_rasio SET nilai = 0 WHERE id_tb_rasio = '".$id_pbu."'");
    }
    
}
  
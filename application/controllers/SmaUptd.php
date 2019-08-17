<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SmaUptd extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin_uptd') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_sma_uptd');
        $this->load->model('M_paud_uptd');
    }

    public function index(){
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-6';
        $data['sort'] = '2019';
        $data['tingkatan'] = ['tk','sd','sma'];
        $data['tahun'] = $this->M_paud_uptd->getAllTahun();
        $data['kecamatan'] = $this->session->userdata('username');
        
        // jumlah
        $data['jml_siswa'] = $this->M_sma_uptd->getSma();
        $data['jml_bg_baik'] = $this->M_sma_uptd->getBgBaik();
        $data['jml_bg_tdk_baik'] = $this->M_sma_uptd->getBgTdkBaik();
        $data['jml_pgl_negeri'] = $this->M_sma_uptd->getPglNegeri();
        $data['jml_pgl_swasta'] = $this->M_sma_uptd->getPglSwasta();
        $data['jml_rg_kelas'] = $this->M_sma_uptd->getRgKelas();
        $data['jml_pd_bersertifikat'] = $this->M_sma_uptd->getPdBersertifikat();
        $data['jml_pd_tdk_bersertifikat'] = $this->M_sma_uptd->getPdTdkBersertifikat();
        $data['jml_rasio'] = $this->M_sma_uptd->getJmlRasio();
        
        // load data
        $data['peserta_siswa'] = $this->M_sma_uptd->getPesertaSiswa();
        $data['bg_baik'] = $this->M_sma_uptd->getDataBgBaik();
        $data['bg_tdk_baik'] = $this->M_sma_uptd->getDataBgTdkBaik();
        $data['pgl_negeri'] = $this->M_sma_uptd->getDataPglNegeri();
        $data['pgl_swasta'] = $this->M_sma_uptd->getDataPglSwasta();
        $data['rg_kelas'] = $this->M_sma_uptd->getDataRgKelas();
        $data['pd_bersertifikat'] = $this->M_sma_uptd->getDataPdBersertifikat();
        $data['pd_tdk_bersertifikat'] = $this->M_sma_uptd->getDataPdTdkBersertifikat();
        $data['rasio'] = $this->M_sma_uptd->getDataRasio();

        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
             // jumlah
            $data['jml_siswa'] = $this->M_sma_uptd->getSmaCari();
            $data['jml_bg_baik'] = $this->M_sma_uptd->getBgBaikCari();
            $data['jml_bg_tdk_baik'] = $this->M_sma_uptd->getBgTdkBaikCari();
            $data['jml_pgl_negeri'] = $this->M_sma_uptd->getPglNegeriCari();
            $data['jml_pgl_swasta'] = $this->M_sma_uptd->getPglSwastaCari();
            $data['jml_rg_kelas'] = $this->M_sma_uptd->getRgKelasCari();
            $data['jml_pd_bersertifikat'] = $this->M_sma_uptd->getPdBersertifikatCari();
            $data['jml_pd_tdk_bersertifikat'] = $this->M_sma_uptd->getPdTdkBersertifikatCari();
            $data['jml_rasio'] = $this->M_sma_uptd->getJmlRasioCari();
            
            // load data
            $data['peserta_siswa'] = $this->M_sma_uptd->getPesertaSiswaCari();
            $data['bg_baik'] = $this->M_sma_uptd->getDataBgBaikCari();
            $data['bg_tdk_baik'] = $this->M_sma_uptd->getDataBgTdkBaikCari();
            $data['pgl_negeri'] = $this->M_sma_uptd->getDataPglNegeriCari();
            $data['pgl_swasta'] = $this->M_sma_uptd->getDataPglSwastaCari();
            $data['rg_kelas'] = $this->M_sma_uptd->getDataRgKelasCari();
            $data['pd_bersertifikat'] = $this->M_sma_uptd->getDataPdBersertifikatCari();
            $data['pd_tdk_bersertifikat'] = $this->M_sma_uptd->getDataPdTdkBersertifikatCari();
            $data['rasio'] = $this->M_sma_uptd->getDataRasioCari();
        }

        $this->load->view('template/headeruptd',$data);
        $this->load->view('pages/sma_uptd',$data); 
        $this->load->view('template/footeruptd');
    }

    public function edit_peserta_siswa(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_jml_siswa', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataPesertaSiswa();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }
    
    public function edit_bg_baik(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_bangunan_baik', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataBgBaik();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }
    
    public function edit_bg_tdk_baik(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_bangunan_tdk_baik', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataBgTdkBaik();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }
    
    public function edit_pgl_negeri(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_pengelola_negeri', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataPglNegeri();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }
    
    public function edit_pgl_swasta(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_pengelola_swasta', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataPglSwasta();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }
    
    public function edit_rg_kelas(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_ruang_kelas', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataRgKelas();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }
    
    public function edit_pd_bersertifikat(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_pendidik_bersertifikat', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataPdBersertifikat();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }
    
    public function edit_pd_tdk_bersertifikat(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_pendidik_tdk_bersertifikat', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataPdTdkBersertifikat();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }
    
    public function edit_rasio(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_tb_rasio', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nilai', 'Jumlah', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_sma_uptd->editDataRasio();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('smauptd');
        }
    }

    public function tambahDataSma(){
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|trim|xss_clean');
        $this->form_validation->set_rules('jumlah_siswa', 'Jumlah Siswa', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('jumlah_bangunan_baik', 'Jumlah Bangunan Baik', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('jumlah_bangunan_tdk_baik', 'Jumlah Bangunan Tidak Baik', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|xss_clean');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $nama_kecamatan = $this->input->post('nama_kecamatan', true);
            $tingkatan = 'sma';
            $jumlah = $this->input->post('jumlah', true);
            $tahun = $this->input->post('tahun', true);

            $this->db->where('kecamatan', $nama_kecamatan);
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil=$this->db->get('tb_jml_siswa');
            $this->db->where('kecamatan', $nama_kecamatan);
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil1=$this->db->get('tb_bangunan_baik');
            $this->db->where('kecamatan', $nama_kecamatan);
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil2=$this->db->get('tb_bangunan_tdk_baik');
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            
            if($hasil->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data siswa pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else if($hasil1->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data bangunan baik pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else if($hasil2->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data bangunan tidak baik pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else{
                $this->M_sma_uptd->tambahDataSmaBaru();
                $this->session->set_flashdata('pbu', 'Ditambahkan');
                redirect('smauptd');
                // echo 'ok';
            }
        }
    }

    public function tambahDataSmaUmum(){
        $this->form_validation->set_rules('jumlah_pengelola_sekolah_negeri', 'Jumlah Pengelola Sekolah Negeri', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('jumlah_pengelola_sekolah_swasta', 'Jumlah Pengelola Sekolah Swasta', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('jumlah_ruang_kelas', 'Jumlah Ruang Kelas', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('jumlah_pendidik_bersertifikat', 'Jumlah Pendidik Bersertifikat', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('jumlah_pendidik_tdk_bersertifikat', 'Jumlah Pendidik Tidak Bersertifikat', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('rasio', 'Rasio', 'required|trim|xss_clean');
        $this->form_validation->set_rules('tahun1', 'Tahun', 'required|trim|xss_clean');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $nama_kecamatan = $this->input->post('nama_kecamatan', true);
            $tingkatan = 'sma';
            $jumlah = $this->input->post('jumlah', true);
            $tahun = $this->input->post('tahun1', true);

            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil3=$this->db->get('tb_pengelola_negeri');
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil4=$this->db->get('tb_pengelola_swasta');
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil5=$this->db->get('tb_ruang_kelas');
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil6=$this->db->get('tb_pendidik_bersertifikat');
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil7=$this->db->get('tb_pendidik_tdk_bersertifikat');
            $this->db->where('tingkatan', $tingkatan);
            $this->db->where('tahun', $tahun);
            $hasil8=$this->db->get('tb_rasio');
            
            
            if($hasil3->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data pengelola sekolah negeri pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else if($hasil4->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data pengelola sekolah swasta pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else if($hasil5->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data ruang kelas pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else if($hasil6->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data tenaga pendidik bersertifikat pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else if($hasil7->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data tenaga pendidik tidak bersertifikat pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else if($hasil8->num_rows()!=0){
                $this->session->set_flashdata('pbu1', 'Data rasio pada tahun tersebut sudah ada');
                redirect('smauptd');
            }else{
                $this->M_sma_uptd->tambahDataSmaUmumBaru();
                $this->session->set_flashdata('pbu', 'Ditambahkan');
                redirect('smauptd');
            }
        }
    }

    public function hapus_siswa(){
        $this->M_sma_uptd->hapusDataSiswa();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
    
    public function hapus_bg_baik(){
        $this->M_sma_uptd->hapusBgBaik();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
    
    public function hapus_bg_tdk_baik(){
        $this->M_sma_uptd->hapusBgTdkBaik();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
    
    public function hapus_pgl_negeri(){
        $this->M_sma_uptd->hapusPglNegeri();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
    
    public function hapus_pgl_swasta(){
        $this->M_sma_uptd->hapusPglSwasta();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
    
    public function hapus_rg_kelas(){
        $this->M_sma_uptd->hapusRgKelas();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
    
    public function hapus_pd_bersertifikat(){
        $this->M_sma_uptd->hapusPdBersertifikat();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
    
    public function hapus_pd_tdk_bersertifikat(){
        $this->M_sma_uptd->hapusPdTdkBersertifikat();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
    
    public function hapus_rasio(){
        $this->M_sma_uptd->hapusRasio();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('smauptd');
        // echo $this->uri->segment(4);
    }
}
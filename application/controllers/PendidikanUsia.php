<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendidikanUsia extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_pendidikan_usia');
    }

    public function index(){
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-1';
        $data['kecamatan'] = $this->M_pendidikan_usia->getAllKecamatan();
        $data['tahun'] = $this->M_pendidikan_usia->getAllTahun();
       
        $data['sort'] = '2019';
        $data['usia'] = ['0-6', '7-12', '13-15', '16-18'];
        $data['pendidikan0_6']= $this->M_pendidikan_usia->getAllDataPendidikanUsia0_6();
        $data['pendidikan7_12']= $this->M_pendidikan_usia->getAllDataPendidikanUsia7_12();
        $data['pendidikan13_15']= $this->M_pendidikan_usia->getAllDataPendidikanUsia13_15();
        $data['pendidikan16_18']= $this->M_pendidikan_usia->getAllDataPendidikanUsia16_18();
        $data['usia0_6']=$this->M_pendidikan_usia->usia0_6();
        $data['usia7_12']=$this->M_pendidikan_usia->usia7_12();
        $data['usia13_15']=$this->M_pendidikan_usia->usia13_15();
        $data['usia16_18']=$this->M_pendidikan_usia->usia16_18();
        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
            $data['pendidikan0_6']= $this->M_pendidikan_usia->getAllDataPendidikanUsia0_6cari();
            $data['pendidikan7_12']= $this->M_pendidikan_usia->getAllDataPendidikanUsia7_12cari();
            $data['pendidikan13_15']= $this->M_pendidikan_usia->getAllDataPendidikanUsia13_15cari();
            $data['pendidikan16_18']= $this->M_pendidikan_usia->getAllDataPendidikanUsia16_18cari();
            $data['usia0_6']=$this->M_pendidikan_usia->usia0_6cari();
            $data['usia7_12']=$this->M_pendidikan_usia->usia7_12cari();
            $data['usia13_15']=$this->M_pendidikan_usia->usia13_15cari();
            $data['usia16_18']=$this->M_pendidikan_usia->usia16_18cari();
        }
        $this->load->view('template/header',$data);
        $this->load->view('pages/pendidikan_usia',$data); 
        $this->load->view('template/footer');
    }

    public function tambahDataPendidikan(){
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|trim|xss_clean');
        $this->form_validation->set_rules('usia', 'Usia', 'required|trim|xss_clean');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|xss_clean');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_pendidikan_usia->tambahDataPendidikanUsia();
            $this->session->set_flashdata('pbu', 'ditambahkan');
			redirect('pendidikanusia');
        }
    }

    public function edit_pendidikan0_6(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_pendidikan_usia', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_pendidikan_usia->editDataPBU0_6();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikanusia');
        }
    }

    public function edit_pendidikan7_12(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_pendidikan_usia', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_pendidikan_usia->editDataPBU7_12();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikanusia');
        }
    }
    
    public function edit_pendidikan13_15(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_pendidikan_usia', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_pendidikan_usia->editDataPBU13_15();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikanusia');
        }
    }
    
    public function edit_pendidikan16_18(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_pendidikan_usia', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_pendidikan_usia->editDataPBU16_18();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikanusia');
        }
    }

    public function hapus_pendidikan_usia(){
        $this->M_pendidikan_usia->hapusDataPBU();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('pendidikanusia');
        // echo $this->uri->segment(4);
    }
}
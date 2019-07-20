<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_pendidikan');
    }

    public function index(){
        $data=[
            'dashboard' => '',
            'pegawai1' => '',
            'pendidikan' => 'active',
            'pendidikan_pbu' =>'active',
            'pendidikan_pbud' =>'',
            'pendidikan_stk' =>'',
            'pendidikan_psd' =>'',
            'pendidikan_psmp' =>'',
            'pendidikan_pmak' =>'',
            'pendidikan_pnf' =>'',
            'admin' => ''
        ];
        $data['tahun']=['2017'];
        $data['usia0_6']=$this->M_pendidikan->usia0_6();
        $data['usia7_12']=$this->M_pendidikan->usia7_12();
        $data['usia13_15']=$this->M_pendidikan->usia13_15();
        $data['usia16_18']=$this->M_pendidikan->usia16_18();
        $data['pbu']=$this->M_pendidikan->getPBU();
        $this->load->view('template/header',$data);
        $this->load->view('data_pendidikan/p',$data);
        $this->load->view('data_pendidikan/hal_pbu',$data);
        $this->load->view('template/footer');
    }

    public function edit_pbu(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_pbu', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_pendidikan->editDataPBU0_6();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikan');
        }
    }

    public function edit_pbuusia7_12(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_pbu', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_pendidikan->editDataPBU7_12();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikan');
        }
    }
}
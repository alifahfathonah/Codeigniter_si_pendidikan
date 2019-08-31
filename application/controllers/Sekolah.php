<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_sekolah');
    }

    public function index(){
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-7';
        $data['sekolah']=$this->M_sekolah->getAllSekolah();
        $this->form_validation->set_rules('nama_sekolah', 'Sekolah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('no_izin', 'No Izin', 'required|xss_clean|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kepsek', 'Nama Kepala Sekolah', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('sekolah', $data);
            $this->load->view('template/footer');
        }else{
            $this->M_sekolah->tambahSekolah();
            $this->session->set_flashdata('sekolah', 'Ditambahkan');
            redirect('sekolah');
        }
    }

    public function edit_sekolah(){
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-7';
        $this->form_validation->set_rules('nama_sekolah1', 'Sekolah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('no_izin1', 'No Izin', 'required|xss_clean|trim');
        $this->form_validation->set_rules('alamat1', 'Alamat', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kepsek1', 'Nama Kepala Sekolah', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $data['sekolah']=$this->M_sekolah->getAllSekolah();
			$this->load->view('template/header', $data);
            $this->load->view('sekolah', $data);
            $this->load->view('template/footer');
		}else{
			$this->M_sekolah->editSekolah();
			$this->session->set_flashdata('sekolah', 'Ditambahkan');
			redirect('sekolah');
        } 
    }

    public function hapus_sekolah($id_sekolah){
        $this->M_sekolah->hapusSekolah($id_sekolah);
		$this->session->set_flashdata('sekolah', 'Dihapus');
		redirect('sekolah');
    }
}
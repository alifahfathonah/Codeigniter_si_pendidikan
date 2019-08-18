<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
		}
        $this->load->model('M_konsultasi');
        $this->load->helper(array('string','text'));
    }
    
    public function index(){
        $data['sidebar']='#menu4';
        $data['sidebar1']='';
        $data['pesan'] = $this->M_konsultasi->getAllKonsultasi();
        $data['kec'] = $this->M_konsultasi->getAllKecamatan();
        $this->load->view('template/header',$data);
        $this->load->view('konsultasi',$data);
        $this->load->view('template/footer');
    }

    public function kirim(){
        $this->form_validation->set_rules('nama_kecamatan', '"Kecamatan"', 'required|xss_clean');
        $this->form_validation->set_rules('judul_konsultasi', '"Perihal"', 'required|xss_clean');
        $this->form_validation->set_rules('isi_konsultasi', 'Isi Konsultasi', 'required|xss_clean|trim'); 
        if($this->form_validation->run()==FALSE){
            $this->index();
		}else{
            $this->M_konsultasi->kirimDataKonsultasi();
            $this->session->set_flashdata('konsultasi', 'Ditanggapi');
            redirect('konsultasi');
		}
    }

    public function tanggap($id_konsultasi){
        $this->M_konsultasi->tanggapKonsultasi($id_konsultasi);
        $this->session->set_flashdata('konsultasi', 'Ditanggapi');
        redirect('konsultasi');
    }

    public function hapus(){
        $this->M_konsultasi->hapusDataKonsultasi();
        $this->session->set_flashdata('konsultasi', 'Ditanggapi');
        redirect('konsultasi');
    }
}
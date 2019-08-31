<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonsultasiUptd extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin_uptd') !== TRUE){
            redirect('login');
		}
        $this->load->model('M_konsultasi_uptd');
        $this->load->helper(array('string','text'));
    }
    
    public function index(){
        $data['sidebar']='#menu4';
        $data['sidebar1']='';
        $data['pesan'] = $this->M_konsultasi_uptd->getAllKonsultasi();
        $this->load->view('template/headeruptd',$data);
        $this->load->view('konsultasi_uptd',$data);
        $this->load->view('template/footeruptd');
    }

    public function kirim(){
        $this->form_validation->set_rules('judul_konsultasi', '"Perihal"', 'required|xss_clean');
        $this->form_validation->set_rules('isi_konsultasi', 'Isi Konsultasi', 'required|xss_clean|trim'); 
        if($this->form_validation->run()==FALSE){
            $this->index();
		}else{
            $this->M_konsultasi_uptd->kirimDataKonsultasi();
            $this->session->set_flashdata('konsultasi', 'Ditanggapi');
            redirect('konsultasiUptd');
		}
    }
    
    public function hapus(){
        $this->M_konsultasi_uptd->hapusDataKonsultasi();
        $this->session->set_flashdata('konsultasi', 'Ditanggapi');
        redirect('konsultasiUptd');
    }
}
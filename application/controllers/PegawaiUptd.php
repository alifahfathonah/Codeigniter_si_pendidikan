<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiUptd extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin_uptd') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_pegawai_uptd');
    }
   
	public function index(){
        $data['sidebar']='#menu3';
		$data['sidebar1']='';
		$data['pangkat']=[
            'Pembina Utama','Pembina Utama Madya','Pembina Utama Muda','Pembina Tingkat I','Pembina',
            'Penata Tingkat I','Penata','Penata Muda Tingkat I', 'Penata Muda',
            'Pengatur Tingkat I','Pengatur','Pengatur Muda Tingkat I','Pengatur Muda',
            'Juru Tingkat I','Juru','Juru Muda Tingkat I','Juru Muda'
        ];
        $data['gol']=[
            'IV/a','IV/b','IV/c','IV/d','IV/e',
            'III/a','III/b','III/c','III/d',
            'II/a','II/b','II/c','II/d',
            'I/a','I/b','I/c','I/d'
        ];
        $data['kec']= $this->session->userdata('username');
		$data['status'] = ['ASN', 'NON-ASN'];
        $this->form_validation->set_rules('nip', 'NIP', 'xss_clean|numeric|max_length[18]|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|xss_clean|trim');
        $this->form_validation->set_rules('pangkat', 'Pangkat', 'required|xss_clean|trim');
        $this->form_validation->set_rules('gol', 'Golongan', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|xss_clean|trim');
        $this->form_validation->set_rules('tmpt_ajar', 'Tempat Mengajar', 'required|xss_clean|trim');
        $this->form_validation->set_rules('kec', 'Kecamatan', 'required|xss_clean|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|xss_clean|trim'); 
        if($this->form_validation->run()==FALSE){
            $data['pegawai']=$this->M_pegawai_uptd->getAllPegawai();
			$this->load->view('template/headeruptd', $data);
            $this->load->view('pegawai_uptd', $data);
            $this->load->view('template/footeruptd');
		}else{
			$this->M_pegawai_uptd->tambahDataPegawai();
			$this->session->set_flashdata('pegawai', 'Ditambahkan');
			redirect('pegawaiuptd');
		}
    }
    
    public function edit_pegawai(){
        
        $data['sidebar']='#menu3';
		$data['sidebar1']='';
        $data['pangkat']=[
            'Pembina Utama','Pembina Utama Madya','Pembina Utama Muda','Pembina Tingkat I','Pembina',
            'Penata Tingkat I','Penata','Penata Muda Tingkat I', 'Penata Muda',
            'Pengatur Tingkat I','Pengatur','Pengatur Muda Tingkat I','Pengatur Muda',
            'Juru Tingkat I','Juru','Juru Muda Tingkat I','Juru Muda'
        ];
        $data['gol']=[
            'IV/a','IV/b','IV/c','IV/d','IV/e',
            'III/a','III/b','III/c','III/d',
            'II/a','II/b','II/c','II/d',
            'I/a','I/b','I/c','I/d'
        ];
        $data['kec']= $this->session->userdata('username');
        $data['status'] = ['ASN', 'NON-ASN'];
        $this->form_validation->set_rules('nip1', 'NIP', 'required|xss_clean|numeric|max_length[18]|trim');
        $this->form_validation->set_rules('nama1', 'Nama', 'required|xss_clean|trim');
        $this->form_validation->set_rules('pangkat1', 'Pangkat', 'required');
        $this->form_validation->set_rules('gol1', 'Golongan', 'required|xss_clean');
        $this->form_validation->set_rules('jabatan1', 'Jabatan', 'required|xss_clean|trim');
        $this->form_validation->set_rules('tmpt_ajar1', 'Tempat Mengajar', 'required|xss_clean|trim');
        $this->form_validation->set_rules('kec1', 'Kecamatan', 'required|xss_clean');
        $this->form_validation->set_rules('status1', 'Status', 'required|xss_clean|trim'); 
        if($this->form_validation->run()==FALSE){
            $data['pegawai']=$this->M_pegawai_uptd->getAllPegawai();
			$this->load->view('template/header', $data);
            $this->load->view('pegawai', $data);
            $this->load->view('template/footer');
            // echo $this->input->post('id_pegawai1');
		}else{
			$this->M_pegawai_uptd->editDataPegawai();
			$this->session->set_flashdata('pegawai', 'Diupdate');
			redirect('pegawaiuptd');
		}

    }

    public function hapus_pegawai($id_pegawai){
        $this->M_pegawai_uptd->hapusDataPegawai($id_pegawai);
		$this->session->set_flashdata('pegawai', 'Dihapus');
		redirect('pegawaiuptd');
    }
}

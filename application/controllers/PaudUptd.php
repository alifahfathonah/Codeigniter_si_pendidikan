<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaudUptd extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin_uptd') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_paud_uptd');
    }

    public function index(){
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-2';
        $data['kecamatan'] = $this->session->userdata('username');
        $data['tahun'] = $this->M_paud_uptd->getAllTahun();
        $data['berdasarkan']=['peserta','bangunan','pengajar'];
        $data['sort'] = '2019';
        $data['peserta']=$this->M_paud_uptd->peserta();
        $data['bangunan']=$this->M_paud_uptd->bangunan();
        $data['pengajar']=$this->M_paud_uptd->pengajar();
        $data['peserta_paud']=$this->M_paud_uptd->peserta_paud();
        $data['bangunan_paud']=$this->M_paud_uptd->bangunan_paud();
        $data['pengajar_paud']=$this->M_paud_uptd->pengajar_paud();
        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
            $data['peserta']=$this->M_paud_uptd->pesertacari();
            $data['bangunan']=$this->M_paud_uptd->bangunancari();
            $data['pengajar']=$this->M_paud_uptd->pengajarcari();
            $data['peserta_paud']=$this->M_paud_uptd->peserta_paudcari();
            $data['bangunan_paud']=$this->M_paud_uptd->bangunan_paudcari();
            $data['pengajar_paud']=$this->M_paud_uptd->pengajar_paudcari();
        }
        $this->load->view('template/headeruptd',$data);
        $this->load->view('pages/paud_uptd',$data); 
        $this->load->view('template/footeruptd');
    }

    public function tambahDataPaud(){
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|trim|xss_clean');
        $this->form_validation->set_rules('berdasarkan', 'Berdasarkan', 'required|trim|xss_clean');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|xss_clean');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $nama_kecamatan = $this->input->post('nama_kecamatan', true);
            $berdasarkan = $this->input->post('berdasarkan', true);
            $jumlah = $this->input->post('jumlah', true);
            $tahun = $this->input->post('tahun', true);
            $this->db->where('nama_kecamatan', $nama_kecamatan);
            $this->db->where('berdasarkan', $berdasarkan);
            $this->db->where('tahun', $tahun);
            $hasil=$this->db->get('paud');
            // $data=[
            //     'nama_kecamatan' => $nama_kecamatan,
            //     'berdasarkan' => $berdasarkan,
            //     'jumlah' => $jumlah,
            //     'tahun' => $tahun
            // ];
            if($hasil->num_rows()<=0){
                $this->M_paud_uptd->tambahDataPaudBaru();
                $this->session->set_flashdata('pbu', 'Ditambahkan');
                redirect('pauduptd');
            }else{
                $this->session->set_flashdata('pbu1', 'Data pada tahun tersebut sudah ada');
                redirect('pauduptd');
            }
        }
    }

    public function edit_peserta_paud(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_paud', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_paud_uptd->editDataPesertaPaud();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pauduptd');
        }
    }
    
    public function edit_bangunan_paud(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_paud', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_paud_uptd->editDataBangunanPaud();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pauduptd');
        }
    }
    
    public function edit_pengajar_paud(){
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|xss_clean|trim');
        $this->form_validation->set_rules('id_paud', 'Id', 'required|xss_clean|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $this->M_paud_uptd->editDataPengajarPaud();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pauduptd');
        }
    }

    public function hapus_paud(){
        $this->M_paud_uptd->hapusDataPaud();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('pauduptd');
        // echo $this->uri->segment(4);
    }
}
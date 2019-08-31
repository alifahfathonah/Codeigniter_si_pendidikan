<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendidikanUsiaUptd extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin_uptd') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_pendidikan_usia_uptd');
    }

    public function index(){
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-1';
        $data['kecamatan'] = $this->session->userdata('username');
        $data['tahun'] = $this->M_pendidikan_usia_uptd->getAllTahun();
       
        $data['sort'] = '2019';
        $data['usia'] = ['0-6', '7-12', '13-15', '16-18'];
        $data['pendidikan0_6']= $this->M_pendidikan_usia_uptd->getAllDataPendidikanUsia0_6();
        $data['pendidikan7_12']= $this->M_pendidikan_usia_uptd->getAllDataPendidikanUsia7_12();
        $data['pendidikan13_15']= $this->M_pendidikan_usia_uptd->getAllDataPendidikanUsia13_15();
        $data['pendidikan16_18']= $this->M_pendidikan_usia_uptd->getAllDataPendidikanUsia16_18();
        $data['usia0_6']=$this->M_pendidikan_usia_uptd->usia0_6();
        $data['usia7_12']=$this->M_pendidikan_usia_uptd->usia7_12();
        $data['usia13_15']=$this->M_pendidikan_usia_uptd->usia13_15();
        $data['usia16_18']=$this->M_pendidikan_usia_uptd->usia16_18();
        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
            $data['pendidikan0_6']= $this->M_pendidikan_usia_uptd->getAllDataPendidikanUsia0_6cari();
            $data['pendidikan7_12']= $this->M_pendidikan_usia_uptd->getAllDataPendidikanUsia7_12cari();
            $data['pendidikan13_15']= $this->M_pendidikan_usia_uptd->getAllDataPendidikanUsia13_15cari();
            $data['pendidikan16_18']= $this->M_pendidikan_usia_uptd->getAllDataPendidikanUsia16_18cari();
            $data['usia0_6']=$this->M_pendidikan_usia_uptd->usia0_6cari();
            $data['usia7_12']=$this->M_pendidikan_usia_uptd->usia7_12cari();
            $data['usia13_15']=$this->M_pendidikan_usia_uptd->usia13_15cari();
            $data['usia16_18']=$this->M_pendidikan_usia_uptd->usia16_18cari();
        }
        $this->load->view('template/headeruptd',$data);
        $this->load->view('pages/pendidikan_usia_uptd',$data); 
        $this->load->view('template/footeruptd');
    }

    public function tambahDataPendidikan(){
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|trim|xss_clean');
        $this->form_validation->set_rules('usia', 'Usia', 'required|trim|xss_clean');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|xss_clean');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $nama_kecamatan = $this->input->post('nama_kecamatan', true);
            $usia = $this->input->post('usia', true);
            $jumlah = $this->input->post('jumlah', true);
            $tahun = $this->input->post('tahun', true);
            $this->db->where('nama_kecamatan', $nama_kecamatan);
            $this->db->where('usia', $usia);
            $this->db->where('tahun', $tahun);
            $hasil=$this->db->get('pendidikan_usia');
            $data=[
                'nama_kecamatan' => $nama_kecamatan,
                'usia' => $usia,
                'jumlah' => $jumlah,
                'tahun' => $tahun
            ];
            if($hasil->num_rows()<=0){
                $this->M_pendidikan_usia_uptd->tambahDataPendidikanUsia();
                $this->session->set_flashdata('pbu', 'Ditambahkan');
                redirect('pendidikanUsiaUptd');
            }else{
                $this->session->set_flashdata('pbu1', 'Data pada tahun dan usia tersebut sudah ada');
                redirect('pendidikanUsiaUptd');
            }
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
            $this->M_pendidikan_usia_uptd->editDataPBU0_6();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikanUsiaUptd');
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
            $this->M_pendidikan_usia_uptd->editDataPBU7_12();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikanUsiaUptd');
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
            $this->M_pendidikan_usia_uptd->editDataPBU13_15();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikanUsiaUptd');
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
            $this->M_pendidikan_usia_uptd->editDataPBU16_18();
            $this->session->set_flashdata('pbu', 'Diupdate');
			redirect('pendidikanUsiaUptd');
        }
    }

    public function hapus_pendidikan_usia(){
        $this->M_pendidikan_usia_uptd->hapusDataPBU();
		$this->session->set_flashdata('pbu', 'Dihapus');
        redirect('pendidikanUsiaUptd');
        // echo $this->uri->segment(4);
    }
}
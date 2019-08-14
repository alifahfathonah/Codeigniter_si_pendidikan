<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_absen');
    }

    public function index(){
        $data['sidebar']='#menu6';
        $data['sidebar1']='';
        $data['kec']=$this->M_absen->getAllKecamatan();

        $this->load->view('template/header', $data);
        $this->load->view('absen', $data);
        $this->load->view('template/footer');
    }

    public function getSekolahKecamatan(){
        $nama_kecamatan = $this->input->post('kecamatan');
        // $nama_kecamatan = $this->uri->segment(3);
        $data = $this->M_absen->getSubSekolahKecamatan($nama_kecamatan);
        echo json_encode($data);
    }
}
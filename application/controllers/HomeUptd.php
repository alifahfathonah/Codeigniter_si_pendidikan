<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUptd extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin_uptd') !== TRUE){
            redirect('login');
		}
		$this->load->model('M_home_uptd');
	}
    
	public function index(){
		$data['sidebar']='#menu1';
		$data['sidebar1']='';
		$data['pegawai'] = $this->M_home_uptd->getJmlPegawai();
		$data['konsultasi'] = $this->M_home_uptd->getJmlKonsultasi();
		$data['user'] = $this->M_home_uptd->getJmlUser();
		$data['absen'] = $this->M_home_uptd->getJmlAbsen();

		$this->load->view('template/headeruptd',$data);
		$this->load->view('homeuptd',$data);
		$this->load->view('template/footeruptd');
	}
}

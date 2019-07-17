<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
	}
    
	public function index(){
        $data=[
			'dashboard' => '',
			'pegawai' => 'active'
		];
		
		$this->load->view('template/header', $data);
		$this->load->view('pegawai');
		$this->load->view('template/footer');
	}
}

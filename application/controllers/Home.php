<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
	}
    
	public function index(){
		$data=[
			'dashboard' => 'active',
			'pegawai' => ''
		];
		
		$this->load->view('template/header',$data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}

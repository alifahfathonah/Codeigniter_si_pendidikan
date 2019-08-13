<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
        
        // $this->load->model('M_administrator');
    }

    public function index(){
        $data['sidebar']='#menu6';
        $data['sidebar1']='';

        $this->load->view('template/header', $data);
        $this->load->view('absen', $data);
        $this->load->view('template/footer');
    }
}
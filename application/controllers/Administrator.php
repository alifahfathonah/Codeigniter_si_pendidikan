<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
        }
        
        $this->load->model('M_administrator');
    }

    public function index(){
        $data['sidebar']='#menu5';
		$data['sidebar1']='';   
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $data['admin']=$this->M_administrator->getAllAdmin();
			$this->load->view('template/header', $data);
            $this->load->view('admin', $data);
            $this->load->view('template/footer');
		}else{
			$this->M_administrator->tambahAdmin();
			$this->session->set_flashdata('admin', 'Ditambahkan');
			redirect('administrator');
		}
    }

    public function edit_admin(){
        $data['sidebar']='#menu4';
		$data['sidebar1']='';
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean|trim');
        if($this->form_validation->run()==FALSE){
            $data['admin']=$this->M_administrator->getAllAdmin();
			$this->load->view('template/header', $data);
            $this->load->view('admin', $data);
            $this->load->view('template/footer');
		}else{
			$this->M_administrator->editAdmin();
			$this->session->set_flashdata('admin', 'Ditambahkan');
			redirect('administrator');
        } 
    }

    public function hapus_admin($id_admin){
        $this->M_administrator->hapusAdmin($id_admin);
		$this->session->set_flashdata('admin', 'Dihapus');
		redirect('administrator');
    }
}
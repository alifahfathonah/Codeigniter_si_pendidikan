<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin') !== TRUE){
            redirect('login');
		}
		$this->load->model('M_home');
	}
    
	public function index(){
		$data=[
			'dashboard' => 'active',
			'pegawai1' => ''
		];

		$data['kec']=[
            'Bungku Tengah','Bungku Selatan','Menui Kepulauan','Bungku Barat',
            'Bumi Raya','Bahodopi','Wita Ponda','Bungku Pesisir','Bungku Timur'
		];
		$data['header']=[
			'I. Penduduk Berdasarkan Usia Sekolah*', 'II. Pendidikan Anak Usia Dini*',
			'III. Sekolah Taman Kanak-Kanak*', 'IV. Pendidikan Dasar*',
			'V. Pendidikan Menengah Pertama*', 'VI. Pendidikan Menengah Atas dan Kejuruan*',
			'VII. Pendidikan Non-Formal*'
		];
		$data['tahun']=[
			'2017', '2018', '2019'
		];
		if(!isset($_POST['submit'])){
			$this->load->view('template/header',$data);
			$this->load->view('home',$data);
			$this->load->view('template/footer');
		}else{
			// $data['cari']=
			$this->form_validation->set_rules('header','Header','required|xss_clean');
			$this->form_validation->set_rules('kecamatan','kecamatan','required|xss_clean');
			$this->form_validation->set_rules('tahun','Tahun','required|xss_clean');
			if($this->form_validation->run()==FALSE){
				$this->load->view('template/header',$data);
				$this->load->view('home',$data);
				$this->load->view('template/footer');
			}else{
				$header = $this->input->post('header', true);
				if($header == 'I. Penduduk Berdasarkan Usia Sekolah*'){
					$data['usia']=$this->M_home->cariDataUsia();
					$this->load->view('template/header',$data);
					$this->load->view('home',$data);
					$this->load->view('filter/pbu',$data);
					$this->load->view('template/footer');
				}elseif($header == 'II. Pendidikan Anak Usia Dini*'){
					$data['usia']=$this->M_home->cariDataUsia();
					$this->load->view('template/header',$data);
					$this->load->view('home',$data);
					$this->load->view('filter/pbud',$data);
					$this->load->view('template/footer');
				}elseif($header == 'III. Sekolah Taman Kanak-Kanak*'){
					$data['usia']=$this->M_home->cariDataSTK();
					$this->load->view('template/header',$data);
					$this->load->view('home',$data);
					$this->load->view('filter/stk',$data);
					$this->load->view('template/footer');
				}else{
					$this->load->view('template/header',$data);
					$this->load->view('home',$data);
					$this->load->view('template/footer');
				}
			}
		}
	}
}

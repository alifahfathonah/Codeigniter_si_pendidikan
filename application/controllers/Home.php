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
		
		$this->load->view('template/header',$data);
		$this->load->view('home',$data);
		$this->load->view('template/footer');
	}
}

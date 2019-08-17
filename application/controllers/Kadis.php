<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kadis extends CI_Controller {

	public function __construct(){

        parent::__construct();
        if($this->session->userdata('logged_in_admin_kadis') !== TRUE){
            redirect('login');
		}
	}
    
	public function index(){
        $this->load->model('M_pendidikan_usia');
		$data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-1';
        $data['kecamatan'] = $this->M_pendidikan_usia->getAllKecamatan();
        $data['tahun'] = $this->M_pendidikan_usia->getAllTahun();
		$data['sort'] = '2019';
        $data['usia'] = ['0-6', '7-12', '13-15', '16-18'];
        $data['pendidikan0_6']= $this->M_pendidikan_usia->getAllDataPendidikanUsia0_6();
        $data['pendidikan7_12']= $this->M_pendidikan_usia->getAllDataPendidikanUsia7_12();
        $data['pendidikan13_15']= $this->M_pendidikan_usia->getAllDataPendidikanUsia13_15();
        $data['pendidikan16_18']= $this->M_pendidikan_usia->getAllDataPendidikanUsia16_18();
        $data['usia0_6']=$this->M_pendidikan_usia->usia0_6();
        $data['usia7_12']=$this->M_pendidikan_usia->usia7_12();
        $data['usia13_15']=$this->M_pendidikan_usia->usia13_15();
        $data['usia16_18']=$this->M_pendidikan_usia->usia16_18();
        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
            $data['pendidikan0_6']= $this->M_pendidikan_usia->getAllDataPendidikanUsia0_6cari();
            $data['pendidikan7_12']= $this->M_pendidikan_usia->getAllDataPendidikanUsia7_12cari();
            $data['pendidikan13_15']= $this->M_pendidikan_usia->getAllDataPendidikanUsia13_15cari();
            $data['pendidikan16_18']= $this->M_pendidikan_usia->getAllDataPendidikanUsia16_18cari();
            $data['usia0_6']=$this->M_pendidikan_usia->usia0_6cari();
            $data['usia7_12']=$this->M_pendidikan_usia->usia7_12cari();
            $data['usia13_15']=$this->M_pendidikan_usia->usia13_15cari();
            $data['usia16_18']=$this->M_pendidikan_usia->usia16_18cari();
        }
		$this->load->view('template/headerkadis',$data);
		$this->load->view('kadis_pbu',$data);
		$this->load->view('template/footerkadis');
    }

    public function paud(){
        $this->load->model('M_paud');
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-2';
        $data['kecamatan'] = $this->M_paud->getAllKecamatan();
        $data['tahun'] = $this->M_paud->getAllTahun();
        $data['berdasarkan']=['peserta','bangunan','pengajar'];
        $data['sort'] = '2019';
        $data['peserta']=$this->M_paud->peserta();
        $data['bangunan']=$this->M_paud->bangunan();
        $data['pengajar']=$this->M_paud->pengajar();
        $data['peserta_paud']=$this->M_paud->peserta_paud();
        $data['bangunan_paud']=$this->M_paud->bangunan_paud();
        $data['pengajar_paud']=$this->M_paud->pengajar_paud();
        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
            $data['peserta']=$this->M_paud->pesertacari();
            $data['bangunan']=$this->M_paud->bangunancari();
            $data['pengajar']=$this->M_paud->pengajarcari();
            $data['peserta_paud']=$this->M_paud->peserta_paudcari();
            $data['bangunan_paud']=$this->M_paud->bangunan_paudcari();
            $data['pengajar_paud']=$this->M_paud->pengajar_paudcari();
        }
        $this->load->view('template/headerkadis',$data);
		$this->load->view('kadis_paud',$data);
		$this->load->view('template/footerkadis');
    }

    public function tk(){
        $this->load->model('M_paud');
        $this->load->model('M_tk');
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-3';
        $data['sort'] = '2019';
        $data['tingkatan'] = ['tk','sd','sma'];
        $data['tahun'] = $this->M_paud->getAllTahun();
        $data['kecamatan'] = $this->M_paud->getAllKecamatan();
        
        // jumlah
        $data['jml_siswa'] = $this->M_tk->getTk();
        $data['jml_bg_baik'] = $this->M_tk->getBgBaik();
        $data['jml_bg_tdk_baik'] = $this->M_tk->getBgTdkBaik();
        $data['jml_pgl_negeri'] = $this->M_tk->getPglNegeri();
        $data['jml_pgl_swasta'] = $this->M_tk->getPglSwasta();
        $data['jml_rg_kelas'] = $this->M_tk->getRgKelas();
        $data['jml_pd_bersertifikat'] = $this->M_tk->getPdBersertifikat();
        $data['jml_pd_tdk_bersertifikat'] = $this->M_tk->getPdTdkBersertifikat();
        $data['jml_rasio'] = $this->M_tk->getJmlRasio();
        
        // load data
        $data['peserta_siswa'] = $this->M_tk->getPesertaSiswa();
        $data['bg_baik'] = $this->M_tk->getDataBgBaik();
        $data['bg_tdk_baik'] = $this->M_tk->getDataBgTdkBaik();
        $data['pgl_negeri'] = $this->M_tk->getDataPglNegeri();
        $data['pgl_swasta'] = $this->M_tk->getDataPglSwasta();
        $data['rg_kelas'] = $this->M_tk->getDataRgKelas();
        $data['pd_bersertifikat'] = $this->M_tk->getDataPdBersertifikat();
        $data['pd_tdk_bersertifikat'] = $this->M_tk->getDataPdTdkBersertifikat();
        $data['rasio'] = $this->M_tk->getDataRasio();

        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
             // jumlah
            $data['jml_siswa'] = $this->M_tk->getTkCari();
            $data['jml_bg_baik'] = $this->M_tk->getBgBaikCari();
            $data['jml_bg_tdk_baik'] = $this->M_tk->getBgTdkBaikCari();
            $data['jml_pgl_negeri'] = $this->M_tk->getPglNegeriCari();
            $data['jml_pgl_swasta'] = $this->M_tk->getPglSwastaCari();
            $data['jml_rg_kelas'] = $this->M_tk->getRgKelasCari();
            $data['jml_pd_bersertifikat'] = $this->M_tk->getPdBersertifikatCari();
            $data['jml_pd_tdk_bersertifikat'] = $this->M_tk->getPdTdkBersertifikatCari();
            $data['jml_rasio'] = $this->M_tk->getJmlRasioCari();
            
            // load data
            $data['peserta_siswa'] = $this->M_tk->getPesertaSiswaCari();
            $data['bg_baik'] = $this->M_tk->getDataBgBaikCari();
            $data['bg_tdk_baik'] = $this->M_tk->getDataBgTdkBaikCari();
            $data['pgl_negeri'] = $this->M_tk->getDataPglNegeriCari();
            $data['pgl_swasta'] = $this->M_tk->getDataPglSwastaCari();
            $data['rg_kelas'] = $this->M_tk->getDataRgKelasCari();
            $data['pd_bersertifikat'] = $this->M_tk->getDataPdBersertifikatCari();
            $data['pd_tdk_bersertifikat'] = $this->M_tk->getDataPdTdkBersertifikatCari();
            $data['rasio'] = $this->M_tk->getDataRasioCari();
        }
        $this->load->view('template/headerkadis',$data);
		$this->load->view('kadis_tk',$data);
		$this->load->view('template/footerkadis');
    }

    public function sd(){
        $this->load->model('M_paud');
        $this->load->model('M_sd');
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-4';
        $data['sort'] = '2019';
        $data['tingkatan'] = ['tk','sd','sma'];
        $data['tahun'] = $this->M_paud->getAllTahun();
        $data['kecamatan'] = $this->M_paud->getAllKecamatan();
        
        // jumlah
        $data['jml_siswa'] = $this->M_sd->getSd();
        $data['jml_bg_baik'] = $this->M_sd->getBgBaik();
        $data['jml_bg_tdk_baik'] = $this->M_sd->getBgTdkBaik();
        $data['jml_pgl_negeri'] = $this->M_sd->getPglNegeri();
        $data['jml_pgl_swasta'] = $this->M_sd->getPglSwasta();
        $data['jml_rg_kelas'] = $this->M_sd->getRgKelas();
        $data['jml_pd_bersertifikat'] = $this->M_sd->getPdBersertifikat();
        $data['jml_pd_tdk_bersertifikat'] = $this->M_sd->getPdTdkBersertifikat();
        $data['jml_rasio'] = $this->M_sd->getJmlRasio();
        
        // load data
        $data['peserta_siswa'] = $this->M_sd->getPesertaSiswa();
        $data['bg_baik'] = $this->M_sd->getDataBgBaik();
        $data['bg_tdk_baik'] = $this->M_sd->getDataBgTdkBaik();
        $data['pgl_negeri'] = $this->M_sd->getDataPglNegeri();
        $data['pgl_swasta'] = $this->M_sd->getDataPglSwasta();
        $data['rg_kelas'] = $this->M_sd->getDataRgKelas();
        $data['pd_bersertifikat'] = $this->M_sd->getDataPdBersertifikat();
        $data['pd_tdk_bersertifikat'] = $this->M_sd->getDataPdTdkBersertifikat();
        $data['rasio'] = $this->M_sd->getDataRasio();

        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
             // jumlah
            $data['jml_siswa'] = $this->M_sd->getSdCari();
            $data['jml_bg_baik'] = $this->M_sd->getBgBaikCari();
            $data['jml_bg_tdk_baik'] = $this->M_sd->getBgTdkBaikCari();
            $data['jml_pgl_negeri'] = $this->M_sd->getPglNegeriCari();
            $data['jml_pgl_swasta'] = $this->M_sd->getPglSwastaCari();
            $data['jml_rg_kelas'] = $this->M_sd->getRgKelasCari();
            $data['jml_pd_bersertifikat'] = $this->M_sd->getPdBersertifikatCari();
            $data['jml_pd_tdk_bersertifikat'] = $this->M_sd->getPdTdkBersertifikatCari();
            $data['jml_rasio'] = $this->M_sd->getJmlRasioCari();
            
            // load data
            $data['peserta_siswa'] = $this->M_sd->getPesertaSiswaCari();
            $data['bg_baik'] = $this->M_sd->getDataBgBaikCari();
            $data['bg_tdk_baik'] = $this->M_sd->getDataBgTdkBaikCari();
            $data['pgl_negeri'] = $this->M_sd->getDataPglNegeriCari();
            $data['pgl_swasta'] = $this->M_sd->getDataPglSwastaCari();
            $data['rg_kelas'] = $this->M_sd->getDataRgKelasCari();
            $data['pd_bersertifikat'] = $this->M_sd->getDataPdBersertifikatCari();
            $data['pd_tdk_bersertifikat'] = $this->M_sd->getDataPdTdkBersertifikatCari();
            $data['rasio'] = $this->M_sd->getDataRasioCari();
        }
        $this->load->view('template/headerkadis',$data);
		$this->load->view('kadis_sd',$data);
		$this->load->view('template/footerkadis');
    }

    public function smp(){
        $this->load->model('M_paud');
        $this->load->model('M_smp');
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-5';
        $data['sort'] = '2019';
        $data['tingkatan'] = ['tk','sd','sma'];
        $data['tahun'] = $this->M_paud->getAllTahun();
        $data['kecamatan'] = $this->M_paud->getAllKecamatan();
        
        // jumlah
        $data['jml_siswa'] = $this->M_smp->getSmp();
        $data['jml_bg_baik'] = $this->M_smp->getBgBaik();
        $data['jml_bg_tdk_baik'] = $this->M_smp->getBgTdkBaik();
        $data['jml_pgl_negeri'] = $this->M_smp->getPglNegeri();
        $data['jml_pgl_swasta'] = $this->M_smp->getPglSwasta();
        $data['jml_rg_kelas'] = $this->M_smp->getRgKelas();
        $data['jml_pd_bersertifikat'] = $this->M_smp->getPdBersertifikat();
        $data['jml_pd_tdk_bersertifikat'] = $this->M_smp->getPdTdkBersertifikat();
        $data['jml_rasio'] = $this->M_smp->getJmlRasio();
        
        // load data
        $data['peserta_siswa'] = $this->M_smp->getPesertaSiswa();
        $data['bg_baik'] = $this->M_smp->getDataBgBaik();
        $data['bg_tdk_baik'] = $this->M_smp->getDataBgTdkBaik();
        $data['pgl_negeri'] = $this->M_smp->getDataPglNegeri();
        $data['pgl_swasta'] = $this->M_smp->getDataPglSwasta();
        $data['rg_kelas'] = $this->M_smp->getDataRgKelas();
        $data['pd_bersertifikat'] = $this->M_smp->getDataPdBersertifikat();
        $data['pd_tdk_bersertifikat'] = $this->M_smp->getDataPdTdkBersertifikat();
        $data['rasio'] = $this->M_smp->getDataRasio();

        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
             // jumlah
            $data['jml_siswa'] = $this->M_smp->getSmpCari();
            $data['jml_bg_baik'] = $this->M_smp->getBgBaikCari();
            $data['jml_bg_tdk_baik'] = $this->M_smp->getBgTdkBaikCari();
            $data['jml_pgl_negeri'] = $this->M_smp->getPglNegeriCari();
            $data['jml_pgl_swasta'] = $this->M_smp->getPglSwastaCari();
            $data['jml_rg_kelas'] = $this->M_smp->getRgKelasCari();
            $data['jml_pd_bersertifikat'] = $this->M_smp->getPdBersertifikatCari();
            $data['jml_pd_tdk_bersertifikat'] = $this->M_smp->getPdTdkBersertifikatCari();
            $data['jml_rasio'] = $this->M_smp->getJmlRasioCari();
            
            // load data
            $data['peserta_siswa'] = $this->M_smp->getPesertaSiswaCari();
            $data['bg_baik'] = $this->M_smp->getDataBgBaikCari();
            $data['bg_tdk_baik'] = $this->M_smp->getDataBgTdkBaikCari();
            $data['pgl_negeri'] = $this->M_smp->getDataPglNegeriCari();
            $data['pgl_swasta'] = $this->M_smp->getDataPglSwastaCari();
            $data['rg_kelas'] = $this->M_smp->getDataRgKelasCari();
            $data['pd_bersertifikat'] = $this->M_smp->getDataPdBersertifikatCari();
            $data['pd_tdk_bersertifikat'] = $this->M_smp->getDataPdTdkBersertifikatCari();
            $data['rasio'] = $this->M_smp->getDataRasioCari();
        }
        $this->load->view('template/headerkadis',$data);
		$this->load->view('kadis_smp',$data);
		$this->load->view('template/footerkadis');
    }

    public function sma(){
        $this->load->model('M_sma');
        $this->load->model('M_paud');
        $data['sidebar']='#menu2';
        $data['sidebar1']='#menu2-6';
        $data['sort'] = '2019';
        $data['tingkatan'] = ['tk','sd','sma'];
        $data['tahun'] = $this->M_paud->getAllTahun();
        $data['kecamatan'] = $this->M_paud->getAllKecamatan();
        
        // jumlah
        $data['jml_siswa'] = $this->M_sma->getSma();
        $data['jml_bg_baik'] = $this->M_sma->getBgBaik();
        $data['jml_bg_tdk_baik'] = $this->M_sma->getBgTdkBaik();
        $data['jml_pgl_negeri'] = $this->M_sma->getPglNegeri();
        $data['jml_pgl_swasta'] = $this->M_sma->getPglSwasta();
        $data['jml_rg_kelas'] = $this->M_sma->getRgKelas();
        $data['jml_pd_bersertifikat'] = $this->M_sma->getPdBersertifikat();
        $data['jml_pd_tdk_bersertifikat'] = $this->M_sma->getPdTdkBersertifikat();
        $data['jml_rasio'] = $this->M_sma->getJmlRasio();
        
        // load data
        $data['peserta_siswa'] = $this->M_sma->getPesertaSiswa();
        $data['bg_baik'] = $this->M_sma->getDataBgBaik();
        $data['bg_tdk_baik'] = $this->M_sma->getDataBgTdkBaik();
        $data['pgl_negeri'] = $this->M_sma->getDataPglNegeri();
        $data['pgl_swasta'] = $this->M_sma->getDataPglSwasta();
        $data['rg_kelas'] = $this->M_sma->getDataRgKelas();
        $data['pd_bersertifikat'] = $this->M_sma->getDataPdBersertifikat();
        $data['pd_tdk_bersertifikat'] = $this->M_sma->getDataPdTdkBersertifikat();
        $data['rasio'] = $this->M_sma->getDataRasio();

        if($this->input->post('keyword')){
            $data['sort'] = $this->input->post('keyword');
             // jumlah
            $data['jml_siswa'] = $this->M_sma->getSmaCari();
            $data['jml_bg_baik'] = $this->M_sma->getBgBaikCari();
            $data['jml_bg_tdk_baik'] = $this->M_sma->getBgTdkBaikCari();
            $data['jml_pgl_negeri'] = $this->M_sma->getPglNegeriCari();
            $data['jml_pgl_swasta'] = $this->M_sma->getPglSwastaCari();
            $data['jml_rg_kelas'] = $this->M_sma->getRgKelasCari();
            $data['jml_pd_bersertifikat'] = $this->M_sma->getPdBersertifikatCari();
            $data['jml_pd_tdk_bersertifikat'] = $this->M_sma->getPdTdkBersertifikatCari();
            $data['jml_rasio'] = $this->M_sma->getJmlRasioCari();
            
            // load data
            $data['peserta_siswa'] = $this->M_sma->getPesertaSiswaCari();
            $data['bg_baik'] = $this->M_sma->getDataBgBaikCari();
            $data['bg_tdk_baik'] = $this->M_sma->getDataBgTdkBaikCari();
            $data['pgl_negeri'] = $this->M_sma->getDataPglNegeriCari();
            $data['pgl_swasta'] = $this->M_sma->getDataPglSwastaCari();
            $data['rg_kelas'] = $this->M_sma->getDataRgKelasCari();
            $data['pd_bersertifikat'] = $this->M_sma->getDataPdBersertifikatCari();
            $data['pd_tdk_bersertifikat'] = $this->M_sma->getDataPdTdkBersertifikatCari();
            $data['rasio'] = $this->M_sma->getDataRasioCari();
        }
        $this->load->view('template/headerkadis',$data);
		$this->load->view('kadis_sma',$data);
		$this->load->view('template/footerkadis');
    }
}
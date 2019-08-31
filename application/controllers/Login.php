<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index(){

        $this->form_validation->set_rules('username','Username','required|trim|xss_clean');
        $this->form_validation->set_rules('pass','Password','required|trim|xss_clean');
        if($this->form_validation->run()==FALSE){
            $this->load->view('login/login');
		}else{
            $valid = $this->M_login->usercheck();
            if($valid->num_rows() > 0){
                $data = $valid->row_array();
                $id = $data['id_user'];
                $user = $data['username'];
                if($data['level']=='admin'){
                    $sesdata = [
                        'id' => $id,
                        'username' => $user,
                        'logged_in_admin' => true
                    ];
                    $this->session->set_userdata($sesdata);
                    redirect('home');
                }else if($data['level']=='kadis'){
                    $sesdata = [
                        'id' => $id,
                        'username' => $user,
                        'logged_in_admin_kadis' => true
                    ];
                    $this->session->set_userdata($sesdata);
                    redirect('kadis');
                }else if($data['level']=='uptd'){
                    $sesdata = [
                        'id' => $id,
                        'username' => $user,
                        'logged_in_admin_uptd' => true
                    ];
                    $this->session->set_userdata($sesdata);
                    redirect('homeUptd');
                }
            }else{
                // $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('login');
            }
		}
    }
    
    public function logout(){
        $this->session->unset_userdata('username');
		session_destroy();
		redirect('login');
    }
}

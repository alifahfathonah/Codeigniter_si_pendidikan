<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Administrator extends CI_Model {
    
    public function getAllAdmin(){
        return $this->db->get('user')->result_array();
    }

    public function tambahAdmin(){
        $dataAdmin = [
            'username' => $this->input->post('username', true),
            'password' => md5($this->input->post('password', true)),
        ];
        $this->db->insert('user',$dataAdmin);
        
    }
    public function editAdmin(){
        $id = $this->uri->segment(3);
        
        $dataAdmin = [
            'username' => $this->input->post('username', true),
            'password' => md5($this->input->post('password', true)),
        ];
        $this->db->where('id_user',$id);
        $this->db->update('user',$dataAdmin);
        
    }

    public function hapusAdmin($id){
        $this->db->where('id_user',$id);
        $this->db->delete('user');
    }
    
}
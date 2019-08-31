<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sekolah extends CI_Model {
    
    public function getAllSekolah(){
        return $this->db->get('sekolah')->result_array();
    }

    public function tambahSekolah(){
        $data=[
            'nama_sekolah' => $this->input->post('nama_sekolah', true),
            'no_izin' => $this->input->post('no_izin', true),
            'alamat' => $this->input->post('alamat', true),
            'nama_kepsek' => $this->input->post('nama_kepsek', true)
        ];
        $this->db->insert('sekolah',$data);
    }

    public function editSekolah(){
        $id = $this->uri->segment(3);
        
        $data = [
            'nama_sekolah' => $this->input->post('nama_sekolah1', true),
            'no_izin' => $this->input->post('no_izin1', true),
            'alamat' => $this->input->post('alamat1', true),
            'nama_kepsek' => $this->input->post('nama_kepsek1', true)
        ];
        $this->db->where('id_sekolah',$id);
        $this->db->update('sekolah',$data);
        
    }

    public function hapusSekolah($id){
        $this->db->where('id_sekolah',$id);
        $this->db->delete('sekolah');
    }
}
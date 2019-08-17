<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pegawai extends CI_Model {
    
    public function getAllPegawai(){
        return $this->db->get('pegawai')->result_array();
    }

    public function tambahDataPegawai(){
        $dataPegawai = [
            'nip' => $this->input->post('nip', true),
            'nama' => $this->input->post('nama', true),
            'pangkat' => $this->input->post('pangkat', true),
            'golongan' => $this->input->post('gol', true),
            'jabatan' => $this->input->post('jabatan', true),
            'tmpt_ajar' => $this->input->post('tmpt_ajar', true),
            'kec' => $this->input->post('kec', true),
            'status' => $this->input->post('status', true),
        ];
        $this->db->insert('pegawai',$dataPegawai);
        
    }

    public function editDataPegawai(){
        $id = $this->uri->segment(3);
        $dataPegawai = [
            'nip' => $this->input->post('nip1', true),
            'nama' => $this->input->post('nama1', true),
            'pangkat' => $this->input->post('pangkat1', true),
            'golongan' => $this->input->post('gol1', true),
            'jabatan' => $this->input->post('jabatan1', true),
            'tmpt_ajar' => $this->input->post('tmpt_ajar1', true),
            'kec' => $this->input->post('kec1', true),
            'status' => $this->input->post('status1', true),
        ];
        $this->db->where('id_pegawai',$id);
        $this->db->update('pegawai',$dataPegawai);
        
    }

    public function hapusDataPegawai($id){
        $this->db->where('id_pegawai',$id);
        $this->db->delete('pegawai');
    }
}
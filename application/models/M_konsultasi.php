<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Konsultasi extends CI_Model {
    
    public function getAllKonsultasi(){
        $query="SELECT * FROM konsultasi ORDER BY status ASC";
        return $this->db->query($query)->result_array();;
        // return $this->db->get('konsultasi')->result_array();
        // return $query->result_array();
    }
}
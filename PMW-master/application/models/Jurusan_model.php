<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

    function get_jurusan(){
        $hsl=$this->db->get('jurusan');
        return $hsl;
    }

    function get_jurusan_result(){
        $hasil = $this->db->query("SELECT jurusan_id,jurusan_nama FROM `jurusan`");
        return $hasil->result();
    }

    public function ajax_prodi($id)
    {
        $hasil = $this->db->query("SELECT p.prodi_id, p.prodi_nama FROM `prodi` as p inner join jurusan as j on j.jurusan_id = p.prodi_jurusan_id where j.jurusan_id = '$id'");
        return $hasil->result();
    }

}

/* End of file Jurusan_model.php */

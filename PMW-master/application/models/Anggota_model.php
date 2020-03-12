<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

    public function get_anggota_proposal($id)
    {
        $this->db->select('anggota_nama,anggota_nim,anggota_no_hp,anggota_jurusan_id,jurusan_nama,anggota_prodi_id,prodi_nama');
        $this->db->from('anggota');
        $this->db->join('jurusan', 'anggota_jurusan_id=jurusan_id');
        $this->db->join('prodi', 'anggota_prodi_id=prodi_id');
        $this->db->where('anggota_proposal_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return false;
        }                        
    }

    public function cek_anggota($username){
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->where('anggota_nim', $username);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return "Sudah Ada";
        }else{
            return "Belum Ada";
        }   
    }

}

/* End of file Jurusan_model.php */

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal_model extends CI_Model {

    public function get_all_proposal()
    {
        $this->db->select('proposal_id,proposal_judul,proposal_skema_id,skema_nama,proposal_peserta_id,peserta_nama,proposal_pembimbing_id, pembimbing_nama,proposal_file_name,proposal_tanggal_upload,proposal_status');
        $this->db->from('proposal');
        $this->db->join('skema', 'proposal_skema_id=skema_id');
        $this->db->join('peserta', 'peserta_id=proposal_peserta_id');
        $this->db->join('pembimbing', 'pembimbing_id=proposal_pembimbing_id');
        // $this->db->where('login_tipe', 'peserta');
        // $this->db->where('proposal_peserta_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return false;
        }                        
    }

    public function get_proposal_for_review($id){
        $this->db->select('proposal_id,proposal_judul,proposal_status,proposal_reviewer_1_id,proposal_reviewer_2_id,proposal_reviewer_3_id');
        $this->db->from('proposal');
        $this->db->where('proposal_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function get_proposal($id)
    {
        $this->db->select('proposal_id,proposal_judul,proposal_skema_id,skema_nama,proposal_peserta_id,peserta_nama,proposal_dospem, proposal_dospem_nip,proposal_file_name,proposal_status,proposal_reviewer_id, reviewer_nip,reviewer_nama');
        $this->db->from('proposal');
        $this->db->join('skema', 'proposal_skema_id=skema_id');
        $this->db->join('peserta', 'peserta_id=proposal_peserta_id');
        $this->db->join('reviewer', 'reviewer_id=proposal_reviewer_id');
        // $this->db->where('login_tipe', 'peserta');
        $this->db->where('proposal_peserta_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return "Belum Ada Proposal";
        }                        
    }

    public function get_proposal_for_daftar_proposal($id)
    {
        $this->db->select('proposal_id,proposal_judul,proposal_skema_id,skema_nama,proposal_peserta_id,peserta_nama,proposal_pembimbing_id, pembimbing_nama,proposal_file_name,proposal_status');
        $this->db->from('proposal');
        $this->db->join('skema', 'proposal_skema_id=skema_id');
        $this->db->join('peserta', 'peserta_id=proposal_peserta_id');
        $this->db->join('pembimbing', 'proposal_pembimbing_id=pembimbing_id');
        // $this->db->where('login_tipe', 'peserta');
        $this->db->where('proposal_peserta_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return "Belum Ada Proposal";
        }                        
    }

    public function cek_proposal($id)
    {
        $this->db->select('proposal_id,proposal_judul,proposal_skema_id,skema_nama,proposal_peserta_id,peserta_nama,proposal_pembimbing_id, pembimbing_nama,proposal_file_name,proposal_status');
        $this->db->from('proposal');
        $this->db->join('skema', 'proposal_skema_id=skema_id');
        $this->db->join('peserta', 'peserta_id=proposal_peserta_id');
        $this->db->join('pembimbing', 'proposal_pembimbing_id=pembimbing_id');
        // $this->db->where('login_tipe', 'peserta');
        $this->db->where('proposal_peserta_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return true;
        }else{
            return false;
        }                        
    }
}
?>

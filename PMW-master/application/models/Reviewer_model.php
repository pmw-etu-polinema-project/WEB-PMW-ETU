<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewer_model extends CI_Model {

    function get_reviewer(){
        $hsl=$this->db->get('reviewer');
        return $hsl;
    }

    function get_reviewer_again(){
        $this->db->select('*');
        $this->db->from('reviewer');
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return false;
        }        
    }

    function get_reviewer_byid($id){
        $this->db->select('*');
        $this->db->from('reviewer');
        $this->db->where('reviewer_id',$id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return false;
        }        
    }

    function get_all_reviewer() {
        // SELECT reviewer_id, reviewer_nama, login_id, login_username, login_password FROM reviewer INNER JOIN login on login_user_id=reviewer_id where login_tipe = 'reviewer'
            $this->datatables->select('reviewer_id,reviewer_nama,reviewer_nip,reviewer_jurusan_id,jurusan_nama,login_id,login_username,login_password');
            $this->datatables->from('reviewer');
            $this->datatables->join('login', 'login_user_id=reviewer_id');
            $this->datatables->join('jurusan', 'reviewer_jurusan_id=jurusan_id');
            $this->datatables->where('login_tipe','reviewer');
            $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id="$1" data-nama="$2" data-nip="$3" data-jurusan="$4" data-login="$5" data-password="$6">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1" data-login="$5">Hapus</a>','reviewer_id,reviewer_nama,reviewer_nip,reviewer_jurusan_id, login_id, login_password');
            return $this->datatables->generate();
    }

    function get_proposal_for_review($id){
        $this->db->select('proposal_id,proposal_judul,proposal_skema_id,skema_nama,proposal_peserta_id,peserta_nama,proposal_dospem, proposal_dospem_nip,proposal_file_name,proposal_status,proposal_reviewer_id, reviewer_nip,reviewer_nama');
        $this->db->from('proposal');
        $this->db->join('skema', 'proposal_skema_id=skema_id');
        $this->db->join('peserta', 'peserta_id=proposal_peserta_id');
        $this->db->join('reviewer', 'reviewer_id=proposal_reviewer_id');
        // $this->db->where('login_tipe', 'peserta');
        $this->db->where('proposal_reviewer_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return "Belum Ada Proposal";
        }         
    }

}

/* End of file Reviewer_model.php */

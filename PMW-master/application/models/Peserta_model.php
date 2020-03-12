<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Model {

    function get_all_skema() {
        // SELECT s.skema_id, s.skema_nama,count(p.proposal_skema_id) FROM skema as s left join proposal as p on p.proposal_skema_id=s.skema_id group by s.skema_id
            $this->datatables->select('skema_id, skema_nama,count(proposal_skema_id) as jumlah_skema');
            $this->datatables->from('skema');
            $this->datatables->join('proposal', 'proposal_skema_id=skema_id', 'LEFT');
            $this->datatables->group_by('skema_id');
            $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id="$1" data-nama="$2">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1">Hapus</a>','skema_id,skema_nama');
            return $this->datatables->generate();
    }

    function get_all_peserta_for_admin() {
        // SELECT reviewer_id, reviewer_nama, login_id, login_username, login_password FROM reviewer INNER JOIN login on login_user_id=reviewer_id where login_tipe = 'reviewer'
            $this->datatables->select('peserta_id,peserta_nama,peserta_nim,peserta_no_hp,peserta_jurusan_id,jurusan_nama,peserta_prodi_id, prodi_nama, login_id, login_password');
            $this->datatables->from('peserta');
            $this->datatables->join('prodi', 'peserta_prodi_id=prodi_id');
            $this->datatables->join('jurusan', 'peserta_jurusan_id=jurusan_id');
            $this->datatables->join('login', 'peserta_id=login_user_id');
            $this->datatables->where('login_tipe','peserta');
            $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id="$1" data-nama="$2" data-nim="$3" data-nohp="$4" data-jurusan="$5" data-prodi="$6" data-login="$7" data-password="$8">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1" data-login="$7">Hapus</a>','peserta_id,peserta_nama,peserta_nim,peserta_no_hp,peserta_jurusan_id,peserta_prodi_id, login_id, login_password');
            return $this->datatables->generate();
    }

    public function get_identitas($id)
    {
        $this->db->select('peserta_id,peserta_nama,peserta_nim,peserta_no_hp,peserta_jurusan_id,peserta_prodi_id,jurusan_nama, prodi_nama, login_id,login_password');
        $this->db->from('peserta');
        $this->datatables->join('login', 'login_user_id=peserta_id');
        $this->datatables->join('jurusan', 'jurusan_id=peserta_jurusan_id');
        $this->datatables->join('prodi', 'prodi_id=peserta_prodi_id');
        $this->db->where('login_tipe', 'peserta');
        $this->db->where('login_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return false;
        }                        
    }

    public function get_identitas_for_uploadproposal($id)
    {
        $this->db->select('peserta_id,peserta_nama,peserta_nim,peserta_no_hp,peserta_jurusan_id,peserta_prodi_id,jurusan_nama, prodi_nama');
        $this->db->from('peserta');
        $this->datatables->join('login', 'login_user_id=peserta_id');
        $this->datatables->join('jurusan', 'jurusan_id=peserta_jurusan_id');
        $this->datatables->join('prodi', 'prodi_id=peserta_prodi_id');
        $this->db->where('login_tipe', 'peserta');
        $this->db->where('login_user_id', $id);
        $query = $this->db->get();
        if($query->num_rows()!=0){
            return $query->result();
        }else{
            return false;
        }                        
    }

}
?>

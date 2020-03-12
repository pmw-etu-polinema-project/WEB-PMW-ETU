<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_model extends CI_Model {

    public function get_pembimbing_by_jurusan($id)
    {
        $this->db->select('*');
        $this->db->from('pembimbing');
        $this->db->where('pembimbing_jurusan_id', $id);
        $query = $this->db->get();
        return $query->result();                       
    }

    function get_all_pembimbing() {
        // SELECT reviewer_id, reviewer_nama, login_id, login_username, login_password FROM reviewer INNER JOIN login on login_user_id=reviewer_id where login_tipe = 'reviewer'
            $this->datatables->select('pembimbing_id,pembimbing_nama,pembimbing_nidn,pembimbing_no_hp,pembimbing_jurusan_id,jurusan_nama');
            $this->datatables->from('pembimbing');
            $this->datatables->join('jurusan', 'pembimbing_jurusan_id=jurusan_id');
            $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id="$1" data-nama="$2" data-nidn="$3" data-nohp="$4" data-jurusan="$5">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1">Hapus</a>','pembimbing_id,pembimbing_nama,pembimbing_nidn,pembimbing_no_hp,pembimbing_jurusan_id');
            return $this->datatables->generate();
    }

}
?>

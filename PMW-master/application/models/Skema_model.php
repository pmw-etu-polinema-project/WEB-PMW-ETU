<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Skema_model extends CI_Model {

    function get_skema(){
            $hsl=$this->db->get('skema');
            return $hsl;
    }

    function get_all_skema() {
        // SELECT s.skema_id, s.skema_nama,count(p.proposal_skema_id) FROM skema as s left join proposal as p on p.proposal_skema_id=s.skema_id group by s.skema_id
            $this->datatables->select('skema_id, skema_nama,count(proposal_skema_id) as jumlah_skema');
            $this->datatables->from('skema');
            $this->datatables->join('proposal', 'proposal_skema_id=skema_id', 'LEFT');
            $this->datatables->group_by('skema_id');
            $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id="$1" data-nama="$2">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1">Hapus</a>','skema_id,skema_nama');
            return $this->datatables->generate();
    }

}

/* End of file Skema.php */

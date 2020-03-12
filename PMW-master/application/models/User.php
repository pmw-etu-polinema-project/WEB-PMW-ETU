<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function login($username,$password)
    {
        $this->db->select('login_id,login_username,login_password,login_tipe,login_user_id');
        $this->db->from('login');
        $this->db->where('login_username', $username);
        $this->db->where('login_password', $password);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }                        
    }

    public function cek_username($username){
        $this->db->select('login_username');
        $this->db->from('login');
        $this->db->where('login_username', $username);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return "Sudah Ada";
        }else{
            return "Belum Ada";
        }   
    }
}

/* End of file .php */

?>
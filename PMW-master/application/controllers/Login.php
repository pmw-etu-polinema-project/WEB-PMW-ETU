<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
    
        public function index()
        {
            $this->load->view('login');
        }

        public function daftar()
        {
            $this->load->model('Jurusan_model');
            $jurusan = $this->Jurusan_model->get_jurusan();
            $data = array(
                'jurusan' => $jurusan
            );
            $this->load->view('daftar', $data);
        }

        public function get_prodi(){
            $this->load->model('Jurusan_model');
            $id=$this->input->post('id');
            $data=$this->Jurusan_model->ajax_prodi($id);
            echo json_encode($data);
        }

        public function get_data_mahasiswa(){
            $this->load->model('Data_mahasiswa_model');
            $nim=$this->input->post('nim');
            $data=$this->Data_mahasiswa_model->ajax_get_mahahsiswa($nim);
            echo json_encode($data);
        }

        public function cek_username(){
            $this->load->model('User');
            $username=$this->input->post('username');
            $data=$this->User->cek_username($username);
            echo json_encode($data);
        }

        public function cek_anggota(){
            $this->load->model('Anggota_model');
            $username=$this->input->post('username');
            $data=$this->Anggota_model->cek_anggota($username);
            echo json_encode($data);
        }

        public function daftar_peserta(){

            $this->form_validation->set_rules('nama','Nama','required',array('required' => "Nama Tidak Boleh Kosong"));
            $this->form_validation->set_rules('nim','NIM','trim|required');
            $this->form_validation->set_rules('jurusan','Jurusan','required',array('required' => "Jurusan Tidak Boleh Kosong"));
            $this->form_validation->set_rules('prodi','Prodi','required',array('required' => "Prodi Tidak Boleh Kosong"));
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',array('required' => "Password Tidak Boleh Kosong", 'min_length' => "Password Minimal 8"));
            $this->form_validation->set_rules('ulangi_password', 'Ulangi Password', 'required|matches[password]',array('required' => "Ulangi Password Tidak Boleh Kosong", 'matches' => "Ulangi Password Tidak Sama Dengan Password Anda"));

            if($this->form_validation->run() == FALSE){
                $this->load->model('Jurusan_model');
                $jurusan = $this->Jurusan_model->get_jurusan();
                $data = array(
                    'jurusan' => $jurusan
                );
                $this->load->view('daftar', $data);
            } else {
                $data=array(
                    'peserta_nama'     => $this->input->post('nama'),
                    'peserta_nim'     => $this->input->post('nim'),
                    'peserta_no_hp'     => $this->input->post('no_hape'),
                    'peserta_jurusan_id'     => $this->input->post('jurusan'),
                    'peserta_prodi_id' => $this->input->post('prodi')
                  );
                  $this->db->insert('peserta', $data);
                  $lastid = $this->db->insert_id();
                  $data_login = array(
                    'login_username' => $this->input->post('nim'),
                    'login_password' => $this->input->post('password'),
                    'login_tipe' => 'peserta',
                    'login_user_id' => $lastid
                  );
                  $this->db->insert('login', $data_login);
                  $this->load->view('sukses');
            }
        }

        public function test(){
            $this->load->view('sukses');
        }

        public function logout()
        {
            $this->load->library('session');
            $session_data=$this->session->userdata('logged_in');
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            redirect('Login','refresh');
        }

        public function cekDb($password)
        {
            $this->load->library('encryption');
            $this->load->model('User');
            // $encrypt_pass = md5($password);
            $username = $this->input->post('username'); 
            $result = $this->User->login($username,$password);
            if($result){
                $session_array = array();
                foreach ($result as $key) {
                    $session_array = array(
                        'id'=>$key->login_id,
                        'username'=>$key->login_username,
                        'level'=>$key->login_tipe,
                        'user_id' => $key->login_user_id
                    );
                    $this->session->set_userdata('logged_in',$session_array);
                }
                return true;
            }
            else{
                $this->form_validation->set_message('cekDb',"Login Gagal");
                return false;
            }
        }

        public function cekLogin()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $session_data=$this->session->userdata('logged_in');

                if($session_data['level'] == 'admin'){
                    redirect('Admin','refresh');
                }

                else if($session_data['level'] == 'reviewer'){
                    redirect('Reviewer','refresh');
                }

                else if($session_data['level'] == 'peserta'){
                    redirect('Peserta','refresh');
                }
            }
        }
    }
?>

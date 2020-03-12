<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Reviewer extends CI_Controller {

        public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {

			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('Acl');
			if (! $this->acl->is_public($current_controller)){
				if (! $this->acl->is_allowed($current_controller, $data['level'])){
					//redirect('login/logout','refresh');
					echo '<script>alert("Anda tidak memiliki hak akses untuk mengakses halaman ini")</script>';
	                if($session_data['level'] == 'admin'){
	                    redirect('Admin','refresh');
	                }

	                else if($session_data['level'] == 'peserta'){
	                    redirect('Peserta','refresh');
	                }
				}
			}
		}
		else{
            echo '<script>alert("Anda tidak memiliki hak akses untuk mengakses halaman ini")</script>';
			redirect('Login','refresh');
		}

		$this->session->set_userdata('username', $data['username']);
        $this->load->library('datatables');
        $this->load->model('Skema_model');
        $this->load->model('crud_model');
        $this->load->model('Peserta_model');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url','form');
	} 
    
        public function index()
        {
            $this->load->view('Reviewer/beranda');
        }

        public function identitas(){
            $session_data=$this->session->userdata('logged_in');
            $id = $session_data['user_id'];
            $this->load->model('Reviewer_model');
            $identitas = $this->Reviewer_model->get_reviewer_byid($id);
            $data = array(
                'identitas' => $identitas
            );
            $this->load->view('Reviewer/videntitas_peserta', $data);
            // var_dump($data);
        }

        public function daftar_review(){
            $session_data=$this->session->userdata('logged_in');
            $id = $session_data['user_id'];
            $this->load->model('Reviewer_model');
            $proposal = $this->Reviewer_model-> get_proposal_for_review($id);
            $data = array(
                'proposal' => $proposal
            );
            $this->load->view('Reviewer/proposal', $data);
            // var_dump($data);
        }

        public function do_review($id){
             $this->load->view('Reviewer/hasil');
        }

        // public function identitas(){
            
        // }

//------------ Penilaian --------------//
       
    }
?>
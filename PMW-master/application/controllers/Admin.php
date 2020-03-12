<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
  class Admin extends CI_Controller {

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
	                if($session_data['level'] == 'peserta'){
	                    redirect('Peserta','refresh');
	                }

	                else if($session_data['level'] == 'reviewer'){
	                    redirect('Reviewer','refresh');
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
        $this->load->model('Reviewer_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Proposal_model');
        $this->load->model('Peserta_model');
        $this->load->model('Pembimbing_model');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url','form');
	}
    
        public function index()
        {
            $data = [
                // 'username'= $session_data'username',
                // 'level'= $session_data'level',
                'sidebar' => 'Admin/sidebar',
                'content' => 'Admin/index',
                'menu'	=> 'Dashboard',
                'title' => 'Admin',
                'footer'=> 'Admin/footer',
            ];
            $this->load->view('Admin/template', $data);
        }

        //---------------Admin-----------------------//
        public function data_peserta()
        {
          $jurusan = $this->Jurusan_model->get_jurusan();
        	$data = [
                // 'username'= $session_data'username',
                // 'level'= $session_data'level',
                'jurusan' => $jurusan,
                'sidebar' => 'Admin/sidebar',
                'content' => 'Admin/vdata_peserta',
                'menu'	=> 'Data Admin',
                'title' => 'Admin',
                'footer'=> 'Admin/footer',
            ];
            $this->load->view('Admin/template', $data);
        }

        function get_peserta_json() { //data data produk by JSON object
          header('Content-Type: application/json');
          echo $this->Peserta_model->get_all_peserta_for_admin();
        }

        function update_peserta(){ //function update data
          $kode = $this->input->post('id_peserta');
          $data=array(
            'peserta_nama'     => $this->input->post('nama_peserta'),
            'peserta_no_hp'     => $this->input->post('no_hp_peserta'),
            'peserta_jurusan_id'     => $this->input->post('jurusan_peserta'),
            'peserta_prodi_id' => $this->input->post('prodi_peserta')
          );
          $this->db->where('peserta_id',$kode);
          $this->db->update('peserta', $data);
          $kode_login = $this->input->post('login_peserta');
          $data_login = array(
            'login_password' => $this->input->post('password_peserta'),
          );
          $this->db->where('login_id',$kode_login);
          $this->db->update('login', $data_login);
          redirect('Admin/data_peserta');
        }

        function delete_peserta(){ //function hapus data
          $kode = $this->input->post('id_peserta');
          $this->db->where('peserta_id',$kode);
          $this->db->delete('peserta');
          $kode_login = $this->input->post('login_peserta');
          $this->db->where('login_id',$kode_login);
          $this->db->delete('login');
          redirect('Admin/data_peserta');
        }

//---------------Mahasiswa-----------------------//
        public function data_mhs()
        {
          $jurusan = $this->Jurusan_model->get_jurusan();
        	$data = [
                // 'username'= $session_data'username',
                // 'level'= $session_data'level',
                'jurusan' => $jurusan,
                'sidebar' => 'Admin/sidebar',
                'content' => 'Admin/vdata_mhs',
                'menu'	=> 'Data Mahasiswa',
                'title' => 'Admin',
                'footer'=> 'Admin/footer',
            ];
            $this->load->view('Admin/template', $data);
        }

        public function tambah_mhs()
        {
        	$this->load->view('Admin/tambah_mhs');
        }
//--------------Reviewer/Dosen------------------//
         public function data_reviewer()
        {
        //   $jurusan = $this->Jurusan_model->get_jurusan();
        //   $data = [
        //     // 'username'= $session_data'username',
        //     // 'level'= $session_data'level',
        //     'jurusan' => $jurusan,
        //     'sidebar' => 'Admin/sidebar',
        //     'content' => 'Admin/vdata_reviewer',
        //     'menu'	=> 'Data Reviewer',
        //     'title' => 'Admin',
        //     'footer'=> 'Admin/footer',
        // ];
        // $this->load->view('Admin/template', $data);
        echo "<script>
        alert('Silahkan Menunggu Pengembangan Lebih Lanjut');
        window.location.href='index';
        </script>";
        }

        function get_reviewer_json() { //data data produk by JSON object
          header('Content-Type: application/json');
          echo $this->Reviewer_model->get_all_reviewer();
        }

        function simpan_reviewer(){ //function simpan data
          $data=array(
            'reviewer_nama'     => $this->input->post('nama_reviewer_baru'),
            'reviewer_nip'     => $this->input->post('nip_reviewer_baru'),
            'reviewer_jurusan_id'     => $this->input->post('jurusan_reviewer_baru')
          );
          $this->db->insert('reviewer', $data);
          $lastid = $this->db->insert_id();
          $data_login = array(
            'login_username' => $this->input->post('nip_reviewer_baru'),
            'login_password' => $this->input->post('password_reviewer_baru'),
            'login_tipe' => 'reviewer',
            'login_user_id' => $lastid
          );
          $this->db->insert('login', $data_login);
          redirect('Admin/data_reviewer');
        }

        function update_reviewer(){ //function update data
          $kode = $this->input->post('id_reviewer');
          $data=array(
            'reviewer_nama'     => $this->input->post('nama_reviewer'),
            'reviewer_nip'     => $this->input->post('nip_reviewer'),
            'reviewer_jurusan_id'     => $this->input->post('jurusan_reviewer')
          );
          $this->db->where('reviewer_id',$kode);
          $this->db->update('reviewer', $data);
          $kode_login = $this->input->post('login_reviewer');
          $data_login = array(
            'login_username' => $this->input->post('nip_reviewer'),
            'login_password' => $this->input->post('password_reviewer'),
          );
          $this->db->where('login_id',$kode_login);
          $this->db->update('login', $data_login);
          redirect('Admin/data_reviewer');
        }

        function delete_reviewer(){ //function hapus data
          $kode = $this->input->post('id_reviewer');
          $this->db->where('reviewer_id',$kode);
          $this->db->delete('reviewer');
          $kode_login = $this->input->post('login_reviewer');
          $this->db->where('login_id',$kode_login);
          $this->db->delete('login');
          redirect('Admin/data_reviewer');
        }

        public function tambah_reviewer()
        {
            $this->load->view('Admin/tambah_reviewer');
        }
//-------------Skema bidang---------------------//

        public function data_skema()
        {
            $data = [
                // 'username'= $session_data'username',
                // 'level'= $session_data'level',
                'sidebar' => 'Admin/sidebar',
                'content' => 'Admin/vdata_skema',
                'menu'	=> 'Data Skema',
                'title' => 'Admin',
                'footer'=> 'Admin/footer',
            ];
            $this->load->view('Admin/template', $data);
        }
        
          function get_skema_json() { //data data produk by JSON object
            header('Content-Type: application/json');
            echo $this->Skema_model->get_all_skema();
          }
          
          function simpan_skema(){ //function simpan data
            $data=array(
              'skema_nama'     => $this->input->post('nama_skema_baru'),
            );
            $this->db->insert('skema', $data);
            redirect('Admin/data_skema');
          }
        
          function update_skema(){ //function update data
            $kode=$this->input->post('kode_skema');
            $data=array(
              'skema_nama'     => $this->input->post('nama_skema'),
            );
            $this->db->where('skema_id',$kode);
            $this->db->update('skema', $data);
            redirect('Admin/data_skema');
          }
        
          function delete_skema(){ //function hapus data
            $kode=$this->input->post('kode_skema');
            $this->db->where('skema_id',$kode);
            $this->db->delete('skema');
            redirect('Admin/data_skema');
          }

        //--------------Pembimbing------------------//
         public function data_pembimbing()
         {
           $jurusan = $this->Jurusan_model->get_jurusan();
           $data = [
             // 'username'= $session_data'username',
             // 'level'= $session_data'level',
             'jurusan' => $jurusan,
             'sidebar' => 'Admin/sidebar',
             'content' => 'Admin/vdata_pembimbing',
             'menu'	=> 'Data Pembimbing',
             'title' => 'Admin',
             'footer'=> 'Admin/footer',
         ];
         $this->load->view('Admin/template', $data);
         }

         function get_pembimbing_json() { //data data produk by JSON object
          header('Content-Type: application/json');
          echo $this->Pembimbing_model->get_all_pembimbing();
        }

        function simpan_pembimbing(){ //function simpan data
          $data=array(
            'pembimbing_nama'     => $this->input->post('nama_pembimbing_baru'),
            'pembimbing_nidn'     => $this->input->post('nidn_pembimbing_baru'),
            'pembimbing_no_hp'     => $this->input->post('no_hp_pembimbing_baru'),
            'pembimbing_jurusan_id' => $this->input->post('jurusan_pembimbing_baru'),
          );
          $this->db->insert('pembimbing', $data);
          redirect('Admin/data_pembimbing');
        }

        function update_pembimbing(){ //function update data
          $kode = $this->input->post('id_pembimbing');
          $data=array(
            'pembimbing_nama'     => $this->input->post('nama_pembimbing'),
            'pembimbing_nidn'     => $this->input->post('nidn_pembimbing'),
            'pembimbing_no_hp'     => $this->input->post('no_hp_pembimbing'),
            'pembimbing_jurusan_id'     => $this->input->post('jurusan_pembimbing')
          );
          $this->db->where('pembimbing_id',$kode);
          $this->db->update('pembimbing', $data);
          redirect('Admin/data_pembimbing');
        }

        function delete_pembimbing(){ //function hapus data
          $kode = $this->input->post('id_pembimbing');
          $this->db->where('pembimbing_id',$kode);
          $this->db->delete('pembimbing');
          redirect('Admin/data_pembimbing');
        }
//--------------data Proposal------------------//
        public function data_proposal()
        {
          $proposal = $this->Proposal_model->get_all_proposal();
          $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',
            'proposal' => $proposal,
            'sidebar' => 'Admin/sidebar',
            'content' => 'Admin/vdata_proposal',
            'menu'	=> 'Data Proposal',
            'title' => 'Admin',
            'footer'=> 'Admin/footer',
        ];
          $this->load->view('Admin/template', $data);
          // var_dump($proposal);
        }

        public function lihat_review($id){
          // $reviewer = $this->Reviewer_model->get_reviewer_again();
          // $proposal = $this->Proposal_model->get_proposal_for_review($id);
          // $data = [
          //     'proposal' => $proposal,
          //     'reviewer' => $reviewer,
          //     'sidebar' => 'Admin/sidebar',
          //     'content' => 'Admin/vdata_lihat_review',
          //     'menu'	=> 'Data Proposal',
          //     'title' => 'Admin',
          //     'footer'=> 'Admin/footer',
          // ];
          // $this->load->view('Admin/template', $data);
          // var_dump($data);
          echo "<script>
            alert('Silahkan Menunggu Pengembangan Lebih Lanjut');
            window.history.back();
            </script>";
        }

        public function pilih_reviewer(){
          $id = $this->input->post('proposal_id');
          $data = array(
            'proposal_status' => "Menunggu Review",
            'proposal_reviewer_1_id' => $this->input->post('reviewer_1'),
            'proposal_reviewer_2_id' => $this->input->post('reviewer_2'),
            'proposal_reviewer_3_id' => $this->input->post('reviewer_3'),
          );
          $this->db->where('proposal_id',$id);
          $this->db->update('proposal', $data);
          redirect('Admin/lihat_review/'.$id);
        }
    }
?>

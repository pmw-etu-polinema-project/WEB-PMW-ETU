<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Peserta extends CI_Controller {

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
        $this->load->model('Peserta_model');
        $this->load->model('Proposal_model');
        $this->load->model('Pembimbing_model');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url','form');
	} 
    
        public function index()
        {
            $this->load->view('Peserta/beranda');
        }

        public function upload_proposal()
        {
            $session_data=$this->session->userdata('logged_in');
            $id = $session_data['user_id'];
            $proposal = $this->Proposal_model->cek_proposal($id);
            // var_dump($proposal);
            if($proposal){
                echo "<script>
                alert('Anda Sudah Upload Proposal');
                window.location.href='index';
                </script>";
            }
            else{
                $identitas = $this->Peserta_model->get_identitas_for_uploadproposal($id);
                $idjurusan = $identitas[0]->peserta_jurusan_id;
                // var_dump($identitas);
                $pembimbing = $this->Pembimbing_model->get_pembimbing_by_jurusan($idjurusan);
                $skema = $this->Skema_model->get_skema();
                $this->load->model('Jurusan_model');
                $jurusan = $this->Jurusan_model->get_jurusan_result();
                $data = array(
                    'identitas' => $identitas,
                    'skema' => $skema,
                    'pembimbing' => $pembimbing,
                    'jurusan' => $jurusan
                );
                $this->load->view('Peserta/vdata_pengesahan', $data);
            }
  
        }

        public function kirim_proposal(){
            $data_anggota = array(
                'anggota_nama' => $this->input->post('nama_anggota_array'),
                'anggota_nim' => $this->input->post('nim_anggota_array'),
                'anggota_jurusan' => $this->input->post('jurusan_anggota_array'),
                'anggota_prodi' => $this->input->post('prodi_anggota_array'),
                'anggota_no_hp' => $this->input->post('no_hape_anggota_array')
            );

            $config['upload_path']          = './assets/proposal';
            $config['allowed_types']        = 'pdf';
 
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('proposal')){
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }else{
                // $data = array('upload_data' => $this->upload->data());
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];

                $data = array(
                    'proposal_judul' => $this->input->post('judul'),
                    'proposal_skema_id' => $this->input->post('skema'),
                    'proposal_peserta_id' => $this->input->post('ketua_id'),
                    'proposal_pembimbing_id' => $this->input->post('pembimbing'),
                    'proposal_file_name' => $file_name,
                    'proposal_status' => "Belum Ada Reviewer"
                );

                if($this->db->insert('proposal', $data)){
                    $lastid = $this->db->insert_id();
                    $anggota= $this->input->post('nama_anggota_array');
                    $nim = $this->input->post('nim_anggota_array');
                    $jurusan = $this->input->post('jurusan_anggota_array');
                    $prodi = $this->input->post('jurusan_anggota_array');
                    $no_hape = $this->input->post('no_hape_anggota_array');
        
                    for ($x = 0; $x <= 2; $x++) {
                        if($nim[$x] != ""){
                            $data_anggota = array(
                                'anggota_proposal_id' => $lastid,
                                'anggota_nama' => $anggota[$x],
                                'anggota_nim' => $nim[$x],
                                'anggota_jurusan_id' => $jurusan[$x],
                                'anggota_prodi_id' => $prodi[$x],
                                'anggota_no_hp' => $no_hape[$x]
                            );
                            $this->db->insert('anggota', $data_anggota);
                        }
                    }

                     $this->load->view('Peserta/sukses_proposal');
                }
                else{
                    var_dump("Error");
                }
            }
            // echo "<pre>";
            // echo var_dump($data,$data_anggota);
            // echo "</pre>";
        }

        public function identitas_peserta()
        {
            $session_data=$this->session->userdata('logged_in');
            $id = $session_data['id'];
            $identitas = $this->Peserta_model->get_identitas($id);
            $data = array(
                'identitas' => $identitas
            );
            // var_dump($data);
            $this->load->view('Peserta/videntitas_peserta', $data);
        }

        public function simpan_identitas($id){
            // $kode = $this->input->post('id');
            // $data=array(
            //     'peserta_agama'     => $this->input->post('agama'),
            //     'peserta_jenis_kelamin'     => $this->input->post('jk'),
            // );
            // $this->db->where('peserta_id',$kode);
            // $this->db->update('peserta', $data);
            // redirect('Peserta/identitas_peserta');
            $data=array(
                    'peserta_no_hp'     => $this->input->post('no_hape'),
            );
            $this->db->where('peserta_id',$id);
            $this->db->update('peserta', $data);
            $id_login = $this->input->post('login');
            $data_login=array(
                'login_password'     => $this->input->post('password'),
            );
            $this->db->where('login_id',$id_login);
            $this->db->update('login', $data_login);
            redirect('Peserta/identitas_peserta');
        }

        public function pengumuman()
        {
            // $this->load->view('Peserta/pengumuman');
            echo "<script>
            alert('Silahkan Menunggu Pengumuman Lebih Lanjut');
            window.location.href='index';
            </script>";
        }
         public function daftar_proposal()
        {
            $session_data=$this->session->userdata('logged_in');
            $id = $session_data['user_id'];
            $this->load->model('Proposal_model');
            $proposal = $this->Proposal_model->get_proposal_for_daftar_proposal($id);
            $data = array(
                'proposal' => $proposal
            );
            $this->load->view('Peserta/uploadproposal', $data);
        }

        public function lihat_anggota($idproposal){
            $this->load->model('Anggota_model');
            $anggota = $this->Anggota_model->get_anggota_proposal($idproposal);
            // var_dump($anggota);
            $data = array(
                'anggota' => $anggota
            );
            $this->load->view('Peserta/anggota', $data);
        }

        public function lihat_review($idproposal){
            echo "<script>
            alert('Silahkan Menunggu Pengumuman Lebih Lanjut');
            window.history.back();
            </script>";
        }
    }
?>

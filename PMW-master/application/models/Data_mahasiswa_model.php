<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mahasiswa_model extends CI_Model {

    public function ajax_get_mahahsiswa($nim)
    {
        $hasil = $this->db->query("SELECT nimMsMhs, namaMhs,email, kdTahunAngkatan, tlpMhs, nmJurusan, namaProdi, nmJenjang, namaStatus FROM `data_mahahsiswa_s_ganjil_2019_2020_data_edit` where nimMsMhs = '$nim'");
        return $hasil->result();
    }

}

/* End of file Data_mahasiswa_model.php */

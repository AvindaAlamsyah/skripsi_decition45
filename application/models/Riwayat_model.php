<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_model extends CI_Model {

    public $tabel = "riwayat";

    public function simpan_data($data)
    {
        $this->db->insert($this->tabel, $data);
        
    }

    public function ambil_semua_data()
    {
        return $this->db->get($this->tabel)->result();
    }

}

/* End of file Riwayat_model.php */

?>
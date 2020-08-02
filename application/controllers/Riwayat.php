<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('riwayat_model');
        
    }

    public function index()
    {
        $this->load->view('riwayat');
    }

    public function ambil_semua()
    {
        $data = array(
            'data' => $this->riwayat_model->ambil_semua_data()
        );

        echo json_encode($data);
    }

}

/* End of file Riwayat.php */

?>
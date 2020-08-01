<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('riwayat_model');
    }

    public function index()
    {
        $data_uji = array(
            'age'                       => $this->input->post('age'),
            'blood_pressure'            => $this->input->post('bp'),
            'specific_gravity'          => $this->input->post('sg'),
            'albumin'                   => $this->input->post('al'),
            'sugar'                     => $this->input->post('su'),
            'red_blood_cells'           => $this->input->post('rbc'),
            'pus_cell'                  => $this->input->post('pc'),
            'pus_cell_clumps'           => $this->input->post('pcc'),
            'bacteria'                  => $this->input->post('ba'),
            'blood_glucose_random'      => $this->input->post('bgr'),
            'blood_urea'                => $this->input->post('bu'),
            'serum_creatinine'          => $this->input->post('sc'),
            'sodium'                    => $this->input->post('sod'),
            'potassium'                 => $this->input->post('pot'),
            'hemoglobin'                => $this->input->post('hemo'),
            'packed_cell_volume'        => $this->input->post('pcv'),
            'white_blood_cell_count'    => $this->input->post('wbcc'),
            'red_blood_cell_count'      => $this->input->post('rbcc'),
            'hypertension'              => $this->input->post('htn'),
            'diabetes_mellitus'         => $this->input->post('dm'),
            'coronary_artery_disease'   => $this->input->post('cad'),
            'appetite'                  => $this->input->post('appet'),
            'pedal_edema'               => $this->input->post('pe'),
            'anemia'                    => $this->input->post('ane')
        );

        /*
        $status = false;
        for ($i = 0; $i < count($data_uji); $i++) {
            if (pos($data_uji) == null) {
                $status = true;
            }
        }

        if ($status) {
            echo "Ada yang kosong";
        } else {
            echo "penuh semua";
        }
        */

        if (in_array(null, $data_uji)) {
            $this->pohon_keputusan_dengan_na($data_uji);
        } else {
            $this->pohon_keputusan_tanpa_na($data_uji);
        }

        
    }

    public function pohon_keputusan_tanpa_na($data_uji)
    {
        if ($data_uji['hemoglobin'] > 13) {
            if ($data_uji['specific_gravity'] == 1010) {
                $data_uji['class'] = "achronic kidney disease";
            } else if ($data_uji['specific_gravity'] == 1015){
                $data_uji['class'] = "achronic kidney disease";
            } else if ($data_uji['specific_gravity'] == 1020) {
                if ($data_uji['hypertension'] == "yes") {
                    $data_uji['class'] = "achronic kidney disease";
                } else{
                    $data_uji['class'] = "non achronic kidney disease";
                }
            } else if ($data_uji['specific_gravity'] == 1025) {
                $data_uji['class'] = "non achronic kidney disease";
            } else{
                $data_uji['class'] = "undefined";
            }
        } else {
            if ($data_uji['serum_creatinine'] <= 1.2) {
                if ($data_uji['specific_gravity'] == 1005) {
                    $data_uji['class'] = "achronic kidney disease";
                } else if ($data_uji['specific_gravity'] == 1010) {
                    $data_uji['class'] = "achronic kidney disease";
                } else if ($data_uji['specific_gravity'] == 1015) {
                    $data_uji['class'] = "achronic kidney disease";
                } else if ($data_uji['specific_gravity'] == 1020) {
                    if ($data_uji['albumin'] == 0) {
                        if ($data_uji['appetite'] == "good") {
                            if ($data_uji['age'] > 44) {
                                if ($data_uji['blood_pressure'] <= 80) {
                                    $data_uji['class'] = "achronic kidney disease";
                                } else{
                                    $data_uji['class'] = "non achronic kidney disease";
                                }
                            } else{
                                $data_uji['class'] = "non achronic kidney disease";
                            }
                        } else{
                            $data_uji['class'] = "achronic kidney disease";
                        }
                    } else if ($data_uji['albumin'] == 1) {
                        $data_uji['class'] = "achronic kidney disease";
                    } else if ($data_uji['albumin'] == 2) {
                        $data_uji['class'] = "undefined";
                    } else if ($data_uji['albumin'] == 3) {
                        $data_uji['class'] = "achronic kidney disease";
                    } else if ($data_uji['albumin'] == 4) {
                        $data_uji['class'] = "achronic kidney disease";
                    } else{
                        $data_uji['class'] = "undefined";
                    }
                }else{
                    if ($data_uji['age'] > 44) {
                        $data_uji['class'] = "non achronic kidney disease";
                    } else{
                        $data_uji['class'] = "achronic kidney disease";
                    }
                }
            } else {
                $data_uji['class'] = "achronic kidney disease";
            }
        }

        $this->riwayat_model->simpan_data($data_uji);
    }

    public function pohon_keputusan_dengan_na($data_uji)
    {
        if ($data_uji['hemoglobin'] == null) {
            if ($data_uji['red_blood_cells'] == "normal") {
                if ($data_uji['albumin'] == 0) {
                    $data_uji['class'] = "non achronic kidney disease";
                } else if ($data_uji['albumin'] == 1) {
                    $data_uji['class'] = "achronic kidney disease";
                } else if ($data_uji['albumin'] == 2) {
                    $data_uji['class'] = "undefined";
                } else if ($data_uji['albumin'] == 3) {
                    $data_uji['class'] = "achronic kidney disease";
                } else if ($data_uji['albumin'] == 4) {
                    $data_uji['class'] = "non achronic kidney disease";
                } else{
                    $data_uji['class'] = "undefined";
                }
            } else if ($data_uji['red_blood_cells'] == "abnormal") {
                $data_uji['class'] = "achronic kidney disease";
            } else{
                $data_uji['class'] = "achronic kidney disease";
            }
        } else if ($data_uji['hemoglobin'] <= 13) {
            if ($data_uji['red_blood_cell_count'] <= 5) {
                $data_uji['class'] = "achronic kidney disease";
            } else if ($data_uji['red_blood_cell_count'] > 5) {
                if ($data_uji['blood_urea'] <= 50) {
                    $data_uji['class'] = "non achronic kidney disease";
                } else if ($data_uji['blood_urea'] > 50) {
                    $data_uji['class'] = "achronic kidney disease";
                } else{
                    $data_uji['class'] = "undefined";
                }
            } else{
                $data_uji['class'] = "achronic kidney disease";
            }
        } else{
            if ($data_uji['specific_grafity'] == 1005) {
                $data_uji['class'] = "undefined";
            } else if ($data_uji['specific_grafity'] == 1010) {
                $data_uji['class'] = "achronic kidney disease";
            } else if ($data_uji['specific_grafity'] == 1015) {
                $data_uji['class'] = "achronic kidney disease";
            } else if ($data_uji['specific_gravity'] == 1020) {
                if ($data_uji['hypertension'] == "yes") {
                    $data_uji['class'] = "achronic kidney disease";
                } else if ($data_uji['hypertension'] == "no") {
                    $data_uji['class'] = "non achronic kidney disease";
                } else{
                    $data_uji['class'] = "undefined";
                }
            } else if ($data_uji['specific_grafity'] == 1025) {
                $data_uji['class'] = "non achronic kidney disease";
            } else{
                if ($data_uji['white_blood_cell_count'] <= 8500) {
                    $data_uji['class'] = "non achronic kidney disease";
                } else if ($data_uji['white_blood_cell_count'] > 8500) {
                    $data_uji['class'] = "non achronic kidney disease";
                } else{
                    $data_uji['class'] = "achronic kidney disease";
                }
            }
        }

        $this->riwayat_model->simpan_data($data_uji);
    }
}

/* End of file Perhitungan.php */

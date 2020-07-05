<?php

class Model_atur_ujian extends MY_Model {

    public $table ="tb_ujian";

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_mapel',
                'label' => 'ID Mapel',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'kkm_ujian',
                'label' => 'KKM Ujian',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'durasi_ujian',
                'label' => 'Durasi Ujian',
                'rules' => 'trim|required|min_length[1]|max_length[100]'
            ],
            [
                'field' => 'tgl_buka_ujian',
                'label' => 'Tanggal Mulai',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'tgl_tutup_ujian',
                'label' => 'Tanggal Akhir',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'waktu_buka_ujian',
                'label' => 'Waktu Mulai',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'waktu_tutup_ujian',
                'label' => 'Waktu Akhir',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'status_ujian',
                'label' => 'Status',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }
    
    public function getDefaultValues()
    {
        return [
            'id_mapel'    => '',
            'kkm_ujian'    => '',
            'durasi_ujian'      => '',
            'tgl_buka_ujian'        => '',
            'tgl_tutup_ujian'     => '',
            'waktu_buka_ujian'      => '',
            'waktu_tutup_ujian'      => '',
            'status_soal'     => '',
        ];
    }

}
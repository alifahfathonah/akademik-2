<?php

class Model_gelombang extends MY_Model {

    public $table ="tb_gelombang";

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_gelombang',
                'label' => 'Nama Gelombang',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'tahun_pelajaran',
                'label' => 'Nama Gelombang',
                'rules' => 'trim|required|min_length[1]|max_length[9]'
            ],
            [
                'field' => 'tgl_awal',
                'label' => 'Tanggal Awal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'tgl_akhir',
                'label' => 'Tangga Akhir',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'waktu_awal',
                'label' => 'Waktu Awal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'waktu_akhir',
                'label' => 'Waktu Akhir',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'nama_gelombang'    => '',
            'tahun_pelajaran'    => '',
            'tgl_awal'    => '',
            'tgl_akhir'    => '',
            'waktu_awal'    => '',
            'waktu_akhir'    => '',
            'status'    => '',
        ];
    }

}
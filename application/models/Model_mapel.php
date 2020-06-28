<?php

class Model_mapel extends MY_Model {

    public $table ="tb_mapel";

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_gelombang',
                'label' => 'Nama Gelombang',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'nama_mapel',
                'label' => 'Nama Mapel',
                'rules' => 'trim|required|min_length[1]|max_length[100]'
            ],
            [
                'field' => 'jml_soal',
                'label' => 'Jumlah Soal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'tampil_soal',
                'label' => 'Tampil Soal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'bobot_soal',
                'label' => 'Bobot Soal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'status_soal',
                'label' => 'Status',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }
    
    public function getDefaultValues()
    {
        return [
            'id_gelombang'    => '',
            'nama_mapel'      => '',
            'jml_soal'        => '',
            'tampil_soal'     => '',
            'bobot_soal'      => '',
            'status_soal'     => '',
        ];
    }

}
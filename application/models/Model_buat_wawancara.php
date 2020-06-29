<?php

class Model_buat_wawancara extends MY_Model {

    public $table ="tb_wawancara";
    


    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_wawancara',
                'label' => 'Nama Wawancara',
                'rules' => 'trim|required|min_length[1]|max_length[100]'
            ],
            [
                'field' => 'kriteria_wawancara',
                'label' => 'Kriteria Wawancara',
                'rules' => 'trim|required|min_length[1]|max_length[100]'
            ],
            [
                'field' => 'ket_wawancara',
                'label' => 'Jumlah Soal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'id_jurusan',
                'label' => 'Nama Jurusan',
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
            'nama_wawancara'    => '',
            'kriteria_wawancara'    => '',
            'ket_wawancara'    => '',
            'id_jurusan'    => '',
            'status'    => '',
        ];
    }

}
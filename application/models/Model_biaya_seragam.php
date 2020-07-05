<?php

class Model_biaya_seragam extends MY_Model {

    public $table ="tb_seragam";

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_seragam',
                'label' => 'Nama Seragam',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'biaya_seragam',
                'label' => 'Biaya Seragam',
                'rules' => 'trim|required|min_length[1]|max_length[9]'
            ],
            [
                'field' => 'id_gelombang',
                'label' => 'ID Gelombang',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'id_jurusan',
                'label' => 'ID jurusan',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'nama_seragam'    => '',
            'biaya_seragam'    => '',
            'id_gelombang'    => '',
            'id_jurusan'    => '',
        ];
    }

}
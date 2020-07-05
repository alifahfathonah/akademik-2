<?php

class Model_biaya_pengembangan extends MY_Model {

    public $table ="tb_pengembangan";

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_pengembangan',
                'label' => 'Nama Pengembangan',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'biaya_pengembangan',
                'label' => 'Biaya Pengembangan',
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
            'nama_pengembangan'    => '',
            'biaya_pengembangan'    => '',
            'id_gelombang'    => '',
            'id_jurusan'    => '',
        ];
    }

}
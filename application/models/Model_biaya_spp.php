<?php

class Model_biaya_spp extends MY_Model {

    public $table ="tb_spp";

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_spp',
                'label' => 'Nama spp',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'biaya_spp',
                'label' => 'Biaya spp',
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
            'nama_spp'    => '',
            'biaya_spp'    => '',
            'id_gelombang'    => '',
            'id_jurusan'    => '',
        ];
    }

}
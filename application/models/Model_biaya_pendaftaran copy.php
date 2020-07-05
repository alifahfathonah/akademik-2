<?php

class Model_biaya_pendaftaran extends MY_Model {

    public $table ="tb_biaya_pendaftaran";

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_pendaftaran',
                'label' => 'Nama Pendaftaran',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'biaya_pendaftaran',
                'label' => 'Biaya Pendaftaran',
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
            'nama_pendaftaran'    => '',
            'biaya_pendaftaran'    => '',
            'id_gelombang'    => '',
            'id_jurusan'    => '',
        ];
    }

}
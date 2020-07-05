<?php

class Model_siswa_mutasi extends MY_Model {

    public $table ="tb_mutasi";

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_pendaftaran',
                'label' => 'ID Pendaftaran',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'tgl_mutasi',
                'label' => 'Tanggal Mutasi',
                'rules' => 'trim|required|min_length[1]|max_length[11]'
            ],
            [
                'field' => 'isi_mutasi',
                'label' => 'Isi Mutasi',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'status_mutasi',
                'label' => 'Status Mutasi',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'id_pendaftaran'    => '',
            'tgl_mutasi'    => '',
            'isi_mutasi'    => '',
            'status_mutasi'    => '',
        ];
    }

}
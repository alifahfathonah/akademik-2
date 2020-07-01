<?php

class Model_hasil_wawancara extends MY_Model {

    public $table ="tb_hasil_wawancara";
    


    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_pendaftaran',
                'label' => 'ID Pendaftaran',
                'rules' => 'trim|required|min_length[1]|max_length[100]'
            ],
            [
                'field' => 'id_personal',
                'label' => 'ID Personal',
                'rules' => 'trim|required|min_length[1]|max_length[100]'
            ],
            [
                'field' => 'status_wawancara',
                'label' => 'Status Wawancara',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'pil_jur',
                'label' => 'Pilihan Jurusan',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'isi_wawancara',
                'label' => 'Isi Wawancara',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'catatan',
                'label' => 'Catatan',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'id_pendaftaran'    => '',
            'id_personal'    => '',
            'status_wawancara'    => '',
            'pil_jur'    => '',
            'isi_wawancara'    => '',
            'catatan'    => '',
        ];
    }

}
<?php

class Model_kelas extends MY_Model {

    public $table ="tb_kelas";
    


    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_kelas',
                'label' => 'Nama Kelas',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'status_kelas',
                'label' => 'Status Kelas',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'id_personal',
                'label' => 'Personal',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'nama_kelas'    => '',
            'status_kelas'    => '',
            'id_personal'    => '',
        ];
    }

}
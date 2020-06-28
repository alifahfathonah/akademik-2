<?php

class Model_siswa extends MY_Model {

    public $table ="tb_siswa";
    
    
    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'no_pendaftaran',
                'label' => 'No Pendaftaran',
                'rules' => 'trim|required|min_length[1]|max_length[40]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'no_pendaftaran' => '',
        ];
    }


}
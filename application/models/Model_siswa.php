<?php

class Model_siswa extends MY_Model {

    public $table ="tb_siswa";
    
    
    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_personal',
                'label' => 'Nama Personal',
                'rules' => 'trim|required|min_length[1]|max_length[40]'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'no_hp',
                'label' => 'No Hp',
                'rules' => 'trim|required|numeric'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required|alpha',
                'errors' => array(
                    'required' => 'Kamu Harus pilih  %s.',
                ),
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'Kamu Harus pilih  %s.',
                )
            ],
            [
                'field' => 'level',
                'label' => 'Level',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'Kamu Harus pilih  %s.',
                )
            ],
            [
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'Kamu Harus pilih  %s.',
                )
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'nama_personal' => '',
            'jenis_kelamin' => '',
            'password'      => '',
            'username'      => '',
            'no_hp'         => '',
            'email'         => '',
            'status'        => '',
            'level'         => '',
            'jabatan'       => '',
        ];
    }


}
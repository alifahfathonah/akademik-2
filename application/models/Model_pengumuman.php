<?php

class Model_pengumuman extends MY_Model {

    public $table ="tb_pengumuman";
    
   

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_personal',
                'label' => 'Nama Personal',
                'rules' => 'trim|required|numeric|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'tgl_pengumuman',
                'label' => 'Tanggal Pengumuman',
                'rules' => 'trim|required|min_length[1]|max_length[10]'
            ],
            [
                'field' => 'judul_pengumuman',
                'label' => 'Judul Pengumuman',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'isi_pengumuman',
                'label' => 'Isi Pengumuman',
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
            'id_personal'    => '',
            'tgl_pengumuman'    => '',
            'judul_pengumuman'    => '',
            'isi_pengumuman'    => '',
            'status'    => '',
        ];
    }

}
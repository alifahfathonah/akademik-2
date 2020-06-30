<?php

class Model_buat_soal extends MY_Model {

    public $table ="tb_soal";
    


    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_mapel',
                'label' => 'Nama Mapel',
                'rules' => 'trim|required|min_length[1]|max_length[100]'
            ],
            [
                'field' => 'nomor',
                'label' => 'Nomor',
                'rules' => 'trim|required|min_length[1]|max_length[100]'
            ],
            [
                'field' => 'soal',
                'label' => 'Soal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'file1',
                'label' => 'File 1',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'file2',
                'label' => 'File 2',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'pilA',
                'label' => 'Pil A',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'pilB',
                'label' => 'Pil B',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'pilC',
                'label' => 'Pil C',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'pilD',
                'label' => 'Pil D',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'pilE',
                'label' => 'Pil E',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'fileA',
                'label' => 'File A',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'fileB',
                'label' => 'File B',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'fileC',
                'label' => 'File C',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'fileD',
                'label' => 'File D',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'fileE',
                'label' => 'File E',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'jawaban',
                'label' => 'Jawaban',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'id_mapel'    => '',
            'nomor'    => '',
            'soal'    => '',
            'file1'    => '',
            'file2'    => '',
            'pilA'    => '',
            'pilB'    => '',
            'pilC'    => '',
            'pilD'    => '',
            'pilE'    => '',
            'fileA'    => '',
            'fileB'    => '',
            'fileC'    => '',
            'fileD'    => '',
            'fileE'    => '',
            'jawaban'    => '',
        ];
    }

}
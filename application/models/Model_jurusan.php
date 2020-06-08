<?php

class Model_jurusan extends MY_Model {

    public $table ="tb_jurusan";
    
    // function save() {
    //     $data = array(
    //         'kd_jurusan'    => $this->input->post('kd_jurusan', TRUE),
    //         'nama_jurusan'  => $this->input->post('nama_jurusan', TRUE)
    //     );
    //     $this->db->insert($this->table,$data);
    // }
    
    // function update() {
    //     $data = array(
    //         'nama_jurusan'  => $this->input->post('nama_jurusan', TRUE)
    //     );
    //     $kd_jurusan   = $this->input->post('kd_jurusan');
    //     $this->db->where('kd_jurusan',$kd_jurusan);
    //     $this->db->update($this->table,$data);
    // }

    
    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_singkat',
                'label' => 'Singkatan Jurusan',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'bidang_keahlian',
                'label' => 'Bidang Keahlian',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'program_keahlian',
                'label' => 'Program Keahlian',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'kompetensi_keahlian',
                'label' => 'Kompetensi Keahlian',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'kapasitas',
                'label' => 'Kapasitas',
                'rules' => 'trim|required|min_length[1]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'nama_singkat'    => '',
            'bidang_keahlian'    => '',
            'program_keahlian'    => '',
            'kompetensi_keahlian'    => '',
            'kapasitas'    => 0,
        ];
    }
    
    

}
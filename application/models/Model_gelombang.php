<?php

class Model_gelombang extends MY_Model {

    public $table ="tb_gelombang";
    
    // function save() {
    //     $data = array(
    //         'nuptk'      => $this->input->post('nuptk', TRUE),
    //         'nama_guru'  => $this->input->post('nama_guru', TRUE),
    //         'gender'     => $this->input->post('gender', TRUE),
    //         'username'   => $this->input->post('username', TRUE),
    //         'password'   => md5($this->input->post('password', TRUE))
    //     );
    //     $this->db->insert($this->table,$data);
    // }
    
    // function update() {
    //     $data = array(
    //         'nuptk'      => $this->input->post('nuptk', TRUE),
    //         'nama_guru'  => $this->input->post('nama_guru', TRUE),
    //         'gender'     => $this->input->post('gender', TRUE)
    //     );
    //     $id_guru   = $this->input->post('id_guru');
    //     $this->db->where('id_guru',$id_guru);
    //     $this->db->update($this->table,$data);
    // }
    
    // function chekLogin($username,$password){
    //     $this->db->where('username',$username);
    //     $this->db->where('password',  md5($password));
    //     $user = $this->db->get('tbl_guru')->row_array();
    //     return $user;
    // }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_gelombang',
                'label' => 'Nama Gelombang',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'tahun_pelajaran',
                'label' => 'Nama Gelombang',
                'rules' => 'trim|required|min_length[1]|max_length[9]'
            ],
            [
                'field' => 'tgl_awal',
                'label' => 'Tanggal Awal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'tgl_akhir',
                'label' => 'Tangga Akhir',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'waktu_awal',
                'label' => 'Waktu Awal',
                'rules' => 'trim|required|min_length[1]'
            ],
            [
                'field' => 'waktu_akhir',
                'label' => 'Waktu Akhir',
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
            'nama_gelombang'    => '',
            'tahun_pelajaran'    => '',
            'tgl_awal'    => '',
            'tgl_akhir'    => '',
            'waktu_awal'    => '',
            'waktu_akhir'    => '',
            'status'    => '',
        ];
    }

}
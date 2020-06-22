<?php

class Model_pengumuman extends MY_Model {

    public $table ="tb_pengumuman";
    
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
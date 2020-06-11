<?php

class Model_users extends MY_Model {

    public $table ="tb_personal";

    /* DATA PERSONAL */

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
                'label' => 'Biaya Personal',
                'rules' => 'trim|required|numeric'
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
    
    
    // function save($foto) {
    //     $data = array(
    //         'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
    //         'username'        => $this->input->post('username', TRUE),
    //         'password'        => md5($this->input->post('password', TRUE)),
    //         'id_level_user'   => $this->input->post('id_level_user', TRUE),
    //         'foto'            => $foto
    //     );
    //     $this->db->insert($this->table,$data);
    // }
    
    // function update($foto) {
    //     if(empty($foto)){
    //         // jangan update field foto
    //     $data = array(
    //         'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
    //         'username'        => $this->input->post('username', TRUE),
    //         'password'        => md5($this->input->post('password', TRUE)),
    //         'id_level_user'   => $this->input->post('id_level_user', TRUE)
    //     );
    //     }else{
    //         // update field foto
    //     $data = array(
    //         'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
    //         'username'        => $this->input->post('username', TRUE),
    //         'password'        => md5($this->input->post('password', TRUE)),
    //         'id_level_user'   => $this->input->post('id_level_user', TRUE),
    //         'foto'            => $foto
    //     );
    //     }
    //     $id_user   = $this->input->post('id_user');
    //     $this->db->where('id_user',$id_user);
    //     $this->db->update($this->table,$data);
    // }

}
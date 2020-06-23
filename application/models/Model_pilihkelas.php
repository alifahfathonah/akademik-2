<?php

class Model_pilihkelas extends MY_Model {

    public $table ="tb_pilih_kelas";
    
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
<?php

class Model_pilihkelas extends MY_Model {

    public $table ="pilih_kelas";
    
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
                'field' => 'id_siswa',
                'label' => 'Siswa',
                'rules' => 'trim|required|min_length[1]|max_length[30]'
            ],
            [
                'field' => 'id_kelas',
                'label' => 'Kelas',
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
            'nama__pilih_kelas'    => '',
            'id_kelas'    => '',
            'id_siswa'    => '',
            'status_pilih_kelas'    => '',
            'nama_pilih_kelas'    => '',
        ];
    }

}
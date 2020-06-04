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

    public function getDefaultValues()
    {
        $date_now = date('Y-m-d');
        $time_now = '07:00:01' /* date('H:i:s') */;
        
        return [
            'no_daftar' => '02390290302',
            'full_name' => '',
            'gender'    => '',
            'tempat_lahir'  => '',
            'gelombang' => $this->where('tgl_awal <=',$date_now)->where('tgl_akhir >=',$date_now)->where('waktu_awal <=',$time_now)->where('waktu_akhir >=',$time_now)->where('status','aktif')->getAll()[0]->nama_gelombang,
            'id_gelombang' => $this->where('tgl_awal <=',$date_now)->where('tgl_akhir >=',$date_now)->where('waktu_awal <=',$time_now)->where('waktu_akhir >=',$time_now)->where('status','aktif')->getAll()[0]->id_gelombang,
        ];
    }

    // Validation Form Input
    public function getValidationRules()
    {
        return [
            [
                'field' => 'full_name',
                'label' => 'Nama',
                'rules' => 'trim|required|min_length[5]'
            ],
            [
                'field' => 'gender',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tempat_lahir',
                'label' => 'Tempat Lahir',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'no_hp',
                'label' => 'No HP',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'asal_sekolah',
                'label' => 'Asal Sekolah',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'password_again',
                'label' => 'Ulangi Password',
                'rules' => 'trim|required|matches[password]'
            ],
            [
                
                'field' => 'pilihan1',
                'label' => 'Pilihan 1',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'pilihan2',
                'label' => 'Pilihan 2',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'pilihan3',
                'label' => 'Pilihan 3',
                'rules' => 'trim|required'
            ]
        ];
    }

}
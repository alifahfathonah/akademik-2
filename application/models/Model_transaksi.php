<?php

class Model_transaksi extends MY_Model {

    public $table ="tb_pembayaran";
    

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
            
        ];
    }

    
    public function getDefaultValues()
    {
        return [
            'tgl_pembayaran'    => '',
            'no_pembayaran'    => date('Ymd').rand(110,1),
            'id_pendaftaran'    => '',
            'id_pengembangan'    => '',
        ];
    }

    function chekLogin($username,$password){
        // $this->db->where('username',$username);
        // $this->db->where('password',  md5($password));
        $user = $this->where('username',$username)
                    ->where('password',md5($password))
                    ->get();
        return $user;
    }

}
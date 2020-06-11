<?php
class Model_user extends MY_Model{
    
    /* Buat Login Personal */

    public $table ="tb_personal";
    
    function chekLogin($username,$password,$status){
        // $this->db->where('username',$username);
        // $this->db->where('password',  md5($password));
        $user = $this->where('username',$username)
                    ->where('password',md5($password))
                    ->where('level',$status)
                    ->get();
        return $user;
    }

    
    // Validation Form Input
    public function getValidationRules()
    {
        return [
            [
                
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required'
            ],
            [
                
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|max_length[20]'
            ],
            [
                
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'trim|required'
            ],
            
        ];
    }
    
}

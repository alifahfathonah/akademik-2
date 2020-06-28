<?php

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->model('Model_guru');
        $this->load->model('Model_pendaftaran');
    }

    function index() {
        $this->load->view('siswa/login');
    }

    function chek_siswa() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username  = $this->input->post('username');
            $password  = $this->input->post('password');
            $loginUser = $this->Model_pendaftaran->chekLogin($username, $password);
            if (!empty($loginUser)) {
                // sukses login administrator
                $login = array(
                    'username' => $loginUser->username,
                    'level' => 'siswa',
                    'isLogin' => TRUE,
                 );
                $this->session->set_userdata($login);
                redirect('siswa');
            }  else {
                // gagal login
                flashMessage('error','Maaf, Username atau Password Salah');
                redirect('auth');
            }
        } else {
            redirect('auth');
        }
    }

    function chek_login() {
        
        if (isset($_POST['submit'])) {
            // proses login disini

            $validate = $this->Model_user->validate();
            if (! $validate) {
                // redirect('admin');
                $this->load->view('auth/login');
                return;
            }

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $status    = $this->input->post('status');
            $login = $this->Model_user->chekLogin($username, $password,$status);
            if (!empty($login) &&  ($login->status == 'aktif')) {
                // sukses login administrator
                
                
                $login_admin = array(
                    'username' => $login->username,
                    'level' => $login->level,
                    'isLogin' => TRUE,
                    'tabel' => 'personal'
                 );
                $this->session->set_userdata($login_admin);
                // echo "Sukses";
                redirect('welcome');
            
            } else {
                // gagal login
                flashMessage('error','Maaf, Username atau Password Salah');
                redirect('admin');
            }
        } else {
            redirect('admin');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function Admin()
    {
        $this->load->view('auth/login');
    }

}
<?php

Class Pendaftaran extends  CI_Controller {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        // $this->load->library('ssp');
        // $this->load->model('Model_siswa');
        $this->load->model('Model_gelombang');
        $this->load->model('Model_pendaftaran');
    }

    public function index()
    {
        // Tanggal sekarang 
        // memulai gelombang masuk
        $date_now = date('Y-m-d');
        $time_now = '07:00:01' /* date('H:i:s') */;
        $data = array(
            'no_daftar' => 4948985994, 
            'gelombang' => $this->Model_gelombang->where('tgl_awal <=',$date_now)->where('waktu_awal <=',$time_now)->where('waktu_akhir >=',$time_now)->where('status','aktif')->getAll(),
        );
        $this->load->view('siswa/pendaftaran',$data);
    
    }

    
    function dataRange($data){
        
        $date_now = date('Y-m-d');
        $time_now = '07:00:01' /* date('H:i:s') */;
        // $wa = tgl awal'
        // $ba = tgl akhir;
        foreach ($data as $a) {
            if ( ($a->tgl_awal < $date_now) AND ($a->tgl_akhir > $date_now) ) {
                return $a->nama_gelombang;
            }
        }
    }

    public function simpan()
    {
        // echo "<pre>";
        // echo var_dump($_POST);
        // echo "</pre>";
        $input = (object) $this->input->post(null, true);

        if (! $_POST) {
            $input = $this->Model_pendaftaran->getDefaultValues();
            $input = (object) $input;
        }

        $validate = $this->Model_pendaftaran->validate();
        if (! $validate) {
            // $mainView   = 'phonebook_contact/form';
            // $heading    = 'Phonebook Contact > Create';
            // $formAction = 'phonebookcontact/create';
            // $buttonText = 'Create';
            $this->load->view('siswa/pendaftaran', compact(
                // 'mainView',
                // 'heading',
                // 'formAction',
                'input',
                'buttonText'
            ));
            return;
        }

        $data_insert = array(
            'id_gelombang' => $input->id_gelombang,
            'tgl_pendaftaran' => $input->tanggal,
            'no_pendaftaran' => $input->no_daftar,
            'status' => 'non aktif',
            'nama_siswa' => $input->full_name,
            'jenis_kelamin' => $input->gender, 
            'tempat_lahir' => $input->tempat_lahir,
            'tanggal_lahir' => $input->tanggal_lahir,
            'no_hp' => $input->no_hp,
            'email' => $input->email,
            'agama' => $input->agama,
            'nik' => $input->nik,
            'asal_sekolah' => $input->asal_sekolah,
            'username' => $input->username,
            'password' => md5($input->password),
            'pil_1' => $input->pilihan1,
            'pil_2' => $input->pilihan2,
            'pil_3' => $input->pilihan3,
        );

        $insert = $this->Model_pendaftaran->insert($data_insert);
        if (! $insert) {
            flashMessage('error', 'Pendaftaran gagal disimpan!');
        } else {
            flashMessage('success', 'Selamat , Pendaftaran berhasil.');
        }

        redirect('pendaftaran', 'refresh');
    }

}
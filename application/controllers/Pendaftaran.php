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
        $this->load->library('pdf');
    }

    public function index()
    {
        // Tanggal sekarang 
        // memulai gelombang masuk
        $date_now = date('Y-m-d');
        $time_now = '07:00:01' /* date('H:i:s') */;
        $data = array(
            'no_daftar' => '', 
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
        
        $no_pend = pendaftaranNo($input->id_gelombang);

        $data_insert = array(
            'id_gelombang' => $input->id_gelombang,
            'tgl_pendaftaran' => $input->tanggal,
            'no_pendaftaran' => $no_pend,
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

        redirect('pendaftaran/cetak/'.$no_pend, 'refresh');
    }

    function cetak($no=null){
        $pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN SMK MUH 3 KRA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'PENDAFTARAN SISWA BARU',0,1,'C');

        $pdf->Cell(190,7,'No. Pendaftaran = '.$no,0,1,'L');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(50,6,'NAMA',1,0);
        $pdf->Cell(55,6,'TGL PENDAFTARAN',1,0);
        $pdf->Cell(27,6,'NO HP',1,0);
        $pdf->Cell(60,6,'TANGGAL LHR',1,1);
        $pdf->SetFont('Arial','',10);
        $pendaftaran = $this->db->where('no_pendaftaran',$no)->get('tb_pendaftaran')->result();
        foreach ($pendaftaran as $row){
            $pdf->Cell(50,6,$row->nama_siswa,1,0);
            $pdf->Cell(55,6,$row->tgl_pendaftaran,1,0);
            $pdf->Cell(27,6,$row->no_hp,1,0);
            $pdf->Cell(60,6,$row->tanggal_lahir,1,1); 
        
            $pdf->Cell(10,7,'',0,1);

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(10,6,'JENIS KELAMIN = '.$row->jenis_kelamin,0,1,'L');
            $pdf->Cell(10,6,'EMAIL = '.$row->email,0,1,'L');
            $pdf->Cell(10,6,'AGAMA = '.$row->agama,0,1,'L');
            $pdf->Cell(10,6,'ASAL SEKOLAH = '.$row->asal_sekolah,0,1,'L');
            $pdf->Cell(10,6,'USERNAME = '.$row->username,0,1,'L');
            $pdf->Cell(10,6,'PILIHAN 1 = '.$row->pil_1,0,1,'L');
            $pdf->Cell(10,6,'PILIHAN 2 = '.$row->pil_2,0,1,'L');
            $pdf->Cell(10,6,'PILIHAN 3 = '.$row->pil_3,0,1,'L');
        }
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(190,7,'Silahkan simpan dan di tunjukkan ke bagian Sekolah',0,1,'L');
        $pdf->Cell(10,7,'',0,1);
        
        $pdf->Cell(190,6,'Tanda Tangan',0,1,'R');

        $pdf->Output();

    }



}
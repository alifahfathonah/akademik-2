<?php

Class Siswa extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "master";
        $this->sub_menu = "siswa";
    }

    
    
    function data() {
   
        // nama tabel
        $table = 'tb_pendaftaran';
        // nama PK
        $primaryKey = 'id_pendaftaran';
        // list field
        $columns = array(
            array('db' => 'jenis_kelamin',
                'dt' => 'jenis_kelamin',
                'formatter' => function( $d) {
                   if($d == 'L'){
                       return "Laki-laki";
                   }else{
                       return "Perempuan";
                   }   
                }
            ),
            array('db' => 'nama_siswa', 'dt' => 'nama_siswa'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array(
                'db'        => 'status',
                'dt'        => 'status',
                'formatter' => function($d) {
                    return $status = ($d == 'aktif') ? anchor('siswa/edit/'.$d,'<i class="fa fa-check-square-o"></i>','class="btn btn-xs btn-success tooltips" data-placement="top" data-original-title="Ubah"'):
                        anchor('siswa/edit/'.$d,'<i class="fa fa-square-o"></i>','class="btn btn-xs btn-warning tooltips" data-placement="top" data-original-title="Ubah"');
                }
            ),
            array(
                'db' => 'id_pendaftaran',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('siswa/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('siswa/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Ubah status?\')" ');
                }
            )
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

    function index() {
        $data['heading']    = $this->template->link('Siswa ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'siswa/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_siswa->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        /* Cek FILE Upload gambar */
        if (!empty($_FILES) && $_FILES['pas_photo']['size'] > 0) {
            $upload = $this->upload_foto_user();

            if ($upload) {
                $data['input']->pas_photo =  $upload['file_name']; // Data for column "cover".
                
            }

        }

        if (!$this->Model_siswa->validate() || $this->form_validation->error_array() ) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'siswa/add';
            $data['heading']    = $this->template->link('Siswa > Tambah');
            $data['formAction'] = "siswa/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }


        if ($this->Model_siswa->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data  berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data  gagal disimpan.');
        }

        redirect($this->sub_menu);
    }
    
    function edit($id=null){

        $pendaftaran = $this->Model_siswa->query("select * from tb_pendaftaran where id_pendaftaran = '$id' ")->result();
        if (!$pendaftaran) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('siswa', 'refresh');
        }
        // $siswa = $this->Model_siswa->find('id_siswa',$id);
        $data_siswa = $this->db->where('id',$id)->get('data_siswa')->row();
        if (!$_POST) {
            $data['input'] = (object) $data_siswa;
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        /* Cek FILE Upload gambar */
        if (!empty($_FILES) && $_FILES['pas_photo']['size'] > 0) {
            $upload = $this->upload_foto_user();

            if ($upload) {
                $data['input']->pas_photo =  $upload['file_name']; // Data for column "cover".
                
            }

        }

        if (!$this->Model_siswa->validate() || $this->form_validation->error_array() ) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'siswa/add';
            $data['heading']    = $this->template->link('Siswa > Tambah');
            $data['formAction'] = "siswa/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }


        if ($this->Model_siswa->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data  berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data  gagal disimpan.');
        }

        redirect($this->sub_menu);
    }
    
    function delete(){
        $nim = $this->uri->segment(3);
        if(!empty($nim)){
            // proses delete data
            $this->db->where('nim',$nim);
            $this->db->delete('tbl_siswa');
        }
        redirect('siswa');
    }
    
    
    function upload_foto_user(){
        $config['upload_path']      = './uploads/foto_user/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 2024;                    // 2mb
        $config['max_width']        = 0;
        $config['max_height']       = 0;
        $config['overwrite']        = true;
        $config['file_ext_tolower'] = true;
        // proses upload
        
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pas_photo')) {
            // Upload OK, return uploaded file info.
            return $this->upload->data();
        } else {
            // Add error to $_error_array
            $this->form_validation->add_to_error_array('pas_photo', $this->upload->display_errors('', ''));
            return false;
        }
    }
    
    
    function siswa_aktif(){
        $this->template->load('template', 'siswa/siswa_aktif');
    }
    
    function load_data_siswa_by_rombel(){
        $rombel = $_GET['rombel'];
        
        echo "<table class='table table-bordered'>
            <tr><th width='90'>NIM</th><th>NAMA</th></tr>";
        $this->db->where('id_rombel',$rombel);
        $siswa = $this->db->get('tbl_siswa');
        foreach ($siswa->result() as $row){
            echo "<tr><td>$row->nim</td><td>$row->nama</td></tr>";
        }
        echo"</table>";
    }
    
    function data_by_rombel_excel(){
        $this->load->library('CPHP_excel');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'SISWA');
        
        $rombel = $_POST['rombel'];
        $this->db->where('id_rombel',$rombel);
        $siswa = $this->db->get('tbl_siswa');
        $no=2;
        foreach ($siswa->result() as $row){
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $row->nim);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $row->nama);
            $no++;
        }
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
        $objWriter->save("data-siswa.xlsx");
        $this->load->helper('download');
        force_download('data-siswa.xlsx', NULL);
    }


}
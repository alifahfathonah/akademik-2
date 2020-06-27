<?php

Class Validasi extends AdminController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "informasi";
        $this->sub_menu = "validasi";
        $this->load->model('Model_pendaftaran','validasi',true);
    }

    
    function data() {
        // nama tabel
        $table = 'tb_pendaftaran';
        // nama PK
        $primaryKey = 'id_pendaftaran';
        // list field
        $columns = array(
            array('db' => 'no_pendaftaran', 'dt' => 'no_pendaftaran'),
            array('db' => 'nama_siswa', 'dt' => 'nama_siswa'),
            array('db' => 'jenis_kelamin', 'dt' => 'jenis_kelamin'),
            array('db' => 'no_hp', 'dt' => 'no_hp'),
            array('db' => 'asal_sekolah', 'dt' => 'asal_sekolah'),
            array('db' => 'status', 
                  'dt' => 'status',
                  'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return $d=='aktif'?'<span class="text-success">On</span>':'<span class="text-danger text-bold">Off</span>';
                }),
            array(
                'db' => 'id_pendaftaran',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return  anchor('validasi/edit/'.$d,'<i class="fa fa-pencil fa-2x"></i>','class="btn btn-xs tooltips" data-placement="top" data-original-title="Off" onclick="return confirm(\'Yakin Ubah Status?\')" ') ;
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
        $data['heading']  = $this->template->link('Informasi - Validasi ');
        $data['menu']     = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'validasi/list' ,$data);
    }

    
    function add() {
        // if (isset($_POST['submit'])) {
        //     $uplodFoto = $this->upload_foto_user();
        //     $this->Model_users->save($uplodFoto);
        //     redirect('users');
        // } else {
            // $data['Judul'] = 'Tambah Data';
            // $this->template->load('template', 'gelombang/add',$data);
        // }
        
        if (!$_POST) {
            $data = (object) $this->Model_gelombang->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_gelombang->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'gelombang/add';
            $data['heading']    = $this->template->link('Gelombang > Tambah');
            $data['formAction'] = "gelombang/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_gelombang->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data gelombang berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data kelas gagal disimpan.');
        }

        redirect('gelobang');
    }

    
    public function edit($id = null)
    {
        
        $pendaftaran = $this->validasi->find('id_pendaftaran',$id);
        if (!$pendaftaran) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('validasi', 'refresh');
        }


        switch ($pendaftaran->status) {
            case 'aktif':
                // $data->status = 'aktif';
                $update = $this->validasi->update($id, ['status' => 'non aktif'],'id_pendaftaran');
                break;
            case 'non aktif':
                $update = $this->validasi->update($id, ['status' => 'aktif'],'id_pendaftaran');
                break;
            default:
                # code...
                break;
        }

        
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('validasi', 'refresh');
    }

    public function delete($id)
    {
        $gelombang = $this->Model_gelombang->find('id_gelombang',$id);
        if (!$gelombang) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('gelombang', 'refresh');
        }

        $hapus = $this->Model_gelombang->where('id_gelombang',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('gelombang', 'refresh');
    }

}
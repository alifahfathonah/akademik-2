<?php

Class Pilihkelas extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "informasi";
        $this->sub_menu = "pilihkelas";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'pilih_kelas';
        // nama PK
        $primaryKey = 'id_kelas';
        // list field
        $columns = array(
            array('db' => 'id_pilih_kelas', 'dt' => 'id_pilih_kelas'),
            array('db' => 'nama_pilih_kelas', 'dt' => 'nama_pilih_kelas'),
            array('db' => 'nama_kelas', 'dt' => 'id_kelas'),
            array('db' => 'nama_siswa', 'dt' => 'id_siswa'),
            array('db' => 'status_pilih_kelas', 'dt' => 'status_pilih_kelas'),
            array(
                'db' => 'id_pilih_kelas',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('pilihkelas/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('pilihkelas/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Informasi - Pilih Kelas ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'kelas/pilih-kelas' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_pilihkelas->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_pilihkelas->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'kelas/addPilihKelas';
            $data['heading']    = $this->template->link('Kelas > Tambah');
            $data['formAction'] = "pilihkelas/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_pilihkelas->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect($this->sub_menu);
    }

    
    public function edit($id = null)
    {
        $kelas = $this->Model_pilihkelas->find('id_pilih_kelas',$id);
        if (!$kelas) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('pilihkelas', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $kelas;
        }

        $validate = $this->Model_pilihkelas->validate();
        if (! $validate) {
            $data['mainView']   = 'kelas/addPilihKelas';
            $data['heading']    = $this->template->link('Pilih Kelas > Edit ');
            $data['formAction'] = "pilihkelas/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $simpan = [
            'nama_pilih_kelas' => $data['input']->nama_pilih_kelas,
        ];

        $update = $this->db->where('id_pilih_kelas',$id)->update('tb_pilih_kelas',$simpan);
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect($this->sub_menu, 'refresh');
    }

    public function delete($id)
    {
        $kelas = $this->Model_pilihkelas->find('id_kelas',$id);
        if (!$kelas) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('kelas', 'refresh');
        }

        $hapus = $this->Model_pilihkelas->where('id_kelas',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect($this->sub_menu, 'refresh');
    }

}
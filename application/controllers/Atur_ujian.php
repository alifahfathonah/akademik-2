<?php

Class Atur_ujian extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "akademik";
        $this->sub_menu = "atur-ujian";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'tb_ujian';
        // nama PK
        $primaryKey = 'id_ujian';
        // list field
        $columns = array(
            array('db' => 'id_ujian', 'dt' => 'id_ujian'),
            array('db' => 'id_mapel', 'dt' => 'id_mapel'),
            array('db' => 'kkm_ujian', 'dt' => 'kkm_ujian'),
            array('db' => 'durasi_ujian', 'dt' => 'durasi_ujian'),
            array('db' => 'tgl_buka_ujian', 'dt' => 'tgl_buka_ujian'),
            array('db' => 'tgl_tutup_ujian', 'dt' => 'tgl_tutup_ujian'),
            array('db' => 'waktu_buka_ujian', 'dt' => 'waktu_buka_ujian'),
            array('db' => 'waktu_tutup_ujian', 'dt' => 'waktu_tutup_ujian'),
            array('db' => 'status_ujian', 'dt' => 'status_ujian'),
            array(
                'db' => 'id_ujian',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('atur_ujian/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('atur_ujian/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Akademik - Atur Ujian ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'atur_ujian/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_atur_ujian->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_atur_ujian->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'atur_ujian/add';
            $data['heading']    = $this->template->link('atur_ujian > Tambah');
            $data['formAction'] = "atur_ujian/add";
            $data['buttonText'] = 'Simpan';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_atur_ujian->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect('atur_ujian');
    }

    
    public function edit($id = null)
    {
        $atur_ujian = $this->Model_atur_ujian->find('id_ujian',$id);
        if (!$atur_ujian) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('atur_ujian', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $atur_ujian;
        }

        $validate = $this->Model_atur_ujian->validate();
        if (! $validate) {
            $data['mainView']   = 'atur_ujian/add';
            $data['heading']    = $this->template->link('atur_ujian > Edit ');
            $data['formAction'] = "atur_ujian/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_atur_ujian->update($id, $data['input'],'id_ujian');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('atur_ujian', 'refresh');
    }

    public function delete($id)
    {
        $atur_ujian = $this->Model_atur_ujian->find('id_ujian',$id);
        if (!$atur_ujian) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('atur_ujian', 'refresh');
        }

        $hapus = $this->Model_atur_ujian->where('id_ujian',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('atur_ujian', 'refresh');
    }

}
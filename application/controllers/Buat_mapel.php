<?php

Class Buat_mapel extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "akademik";
        $this->sub_menu = "buat-mapel";
        $this->load->model('Model_mapel','Model_mapel',true);
    }

    
    function data() {
        // nama tabel
        $table = 'tb_mapel';
        // nama PK
        $primaryKey = 'id_mapel';
        // list field
        $columns = array(
            array('db' => 'id_mapel', 'dt' => 'id_mapel'),
            array('db' => 'id_gelombang', 'dt' => 'id_gelombang'),
            array('db' => 'nama_mapel', 'dt' => 'nama_mapel'),
            array('db' => 'jml_soal', 'dt' => 'jml_soal'),
            array('db' => 'tampil_soal', 'dt' => 'tampil_soal'),
            array('db' => 'bobot_soal', 'dt' => 'bobot_soal'),
            array('db' => 'status_soal', 'dt' => 'status_soal'),
            array(
                'db' => 'id_mapel',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('buat_mapel/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('buat_mapel/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Akademik - Buat Mapel ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'buat_mapel/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_mapel->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_mapel->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'buat_mapel/add';
            $data['heading']    = $this->template->link('Buat Mapel > Tambah');
            $data['formAction'] = "buat_mapel/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_mapel->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect($this->sub_menu);
    }

    
    public function edit($id = null)
    {
        $buat_mapel = $this->Model_mapel->find('id_mapel',$id);
        if (!$buat_mapel) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('buat_mapel', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $buat_mapel;
        }

        $validate = $this->Model_mapel->validate();
        if (! $validate) {
            $data['mainView']   = 'buat_mapel/add';
            $data['heading']    = $this->template->link('buat_mapel > Edit ');
            $data['formAction'] = "buat/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_mapel->update($id, $data['input'],'id_mapel');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect($this->sub_menu, 'refresh');
    }

    public function delete($id)
    {
        $buat_mapel = $this->Model_mapel->find('id_mapel',$id);
        if (!$buat_mapel) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('buat_mapel', 'refresh');
        }

        $hapus = $this->Model_mapel->where('id_mapel',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect($this->sub_menu, 'refresh');
    }

}
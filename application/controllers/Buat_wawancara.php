<?php

Class Buat_wawancara extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "wawancara";
        $this->sub_menu = "buat_wawancara";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'buat_wawancara';
        // nama PK
        $primaryKey = 'id_wawancara';
        // list field
        $columns = array(
            array('db' => 'id_wawancara', 'dt' => 'id_wawancara'),
            array('db' => 'nama_wawancara', 'dt' => 'nama_wawancara'),
            array('db' => 'kriteria_wawancara', 'dt' => 'kriteria_wawancara'),
            array('db' => 'ket_wawancara', 'dt' => 'ket_wawancara'),
            array('db' => 'kompetensi_keahlian', 'dt' => 'id_jurusan'),
            array('db' => 'status', 'dt' => 'status'),
            array(
                'db' => 'id_wawancara',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('buat_wawancara/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('buat_wawancara/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Wawancara - Buat Wawancara ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'buat_wawancara/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_buat_wawancara->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_buat_wawancara->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'buat_wawancara/add';
            $data['heading']    = $this->template->link('buat_wawancara > Tambah');
            $data['formAction'] = "buat_wawancara/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_buat_wawancara->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect($this->sub_menu);
    }

    
    public function edit($id = null)
    {
        $buat_wawancara = $this->Model_buat_wawancara->find('id_wawancara',$id);
        if (!$buat_wawancara) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('buat_wawancara', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $buat_wawancara;
        }

        $validate = $this->Model_buat_wawancara->validate();
        if (! $validate) {
            $data['mainView']   = 'buat_wawancara/add';
            $data['heading']    = $this->template->link('buat_wawancara > Edit ');
            $data['formAction'] = "buat_wawancara/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_buat_wawancara->update($id, $data['input'],'id_wawancara');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect($this->sub_menu, 'refresh');
    }

    public function delete($id)
    {
        $buat_wawancara = $this->Model_buat_wawancara->find('id_wawancara',$id);
        if (!$buat_wawancara) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('buat_wawancara', 'refresh');
        }

        $hapus = $this->Model_buat_wawancara->where('id_wawancara',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect($this->sub_menu, 'refresh');
    }

}
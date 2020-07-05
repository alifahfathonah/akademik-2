<?php

Class Biaya_seragam extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "pembayaran";
        $this->sub_menu = "biaya-seragam";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'biaya_seragam';
        // nama PK
        $primaryKey = 'id_seragam';
        // list field
        $columns = array(
            array('db' => 'id_seragam', 'dt' => 'id_seragam'),
            array('db' => 'nama_seragam', 'dt' => 'nama_seragam'),
            array('db' => 'biaya_seragam', 'dt' => 'biaya_seragam'),
            array('db' => 'nama_gelombang', 'dt' => 'id_gelombang'),
            array('db' => 'kompetensi_keahlian', 'dt' => 'id_jurusan'),
            array(
                'db' => 'id_seragam',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('biaya_seragam/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('biaya_seragam/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Pembayaran - Biaya Seragam');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'biaya_seragam/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_biaya_seragam->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_biaya_seragam->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'biaya_seragam/add';
            $data['heading']    = $this->template->link('biaya_seragam > Tambah');
            $data['formAction'] = "biaya_seragam/add";
            $data['buttonText'] = 'Simpan';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_biaya_seragam->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect('Biaya_Seragam');
    }

    
    public function edit($id = null)
    {
        $biaya_seragam = $this->Model_biaya_seragam->find('id_seragam',$id);
        if (!$biaya_seragam) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('biaya_seragam', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $biaya_seragam;
        }

        $validate = $this->Model_biaya_seragam->validate();
        if (! $validate) {
            $data['mainView']   = 'biaya_seragam/add';
            $data['heading']    = $this->template->link('biaya_seragam > Edit ');
            $data['formAction'] = "biaya_seragam/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_biaya_seragam->update($id, $data['input'],'id_seragam');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('biaya_seragam', 'refresh');
    }

    public function delete($id)
    {
        $biaya_seragam = $this->Model_biaya_seragam->find('id_seragam',$id);
        if (!$biaya_seragam) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('biaya_seragam', 'refresh');
        }

        $hapus = $this->Model_biaya_seragam->where('id_seragam',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('biaya_seragam', 'refresh');
    }

}
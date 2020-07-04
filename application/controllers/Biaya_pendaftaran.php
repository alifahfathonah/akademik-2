<?php

Class Biaya_pendaftaran extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "pembayaran";
        $this->sub_menu = "biaya-pendaftaran";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'tb_biaya_pendaftaran';
        // nama PK
        $primaryKey = 'id_biaya_pendaftaran';
        // list field
        $columns = array(
            array('db' => 'id_biaya_pendaftaran', 'dt' => 'id_biaya_pendaftaran'),
            array('db' => 'nama_pendaftaran', 'dt' => 'nama_pendaftaran'),
            array('db' => 'biaya_pendaftaran', 'dt' => 'biaya_pendaftaran'),
            array('db' => 'id_gelombang', 'dt' => 'id_gelombang'),
            array('db' => 'id_jurusan', 'dt' => 'id_jurusan'),
            array(
                'db' => 'id_biaya_pendaftaran',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('biaya_pendaftaran/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('biaya_pendaftaran/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Pembayaran - Biaya Pendaftaran');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'biaya_pendaftaran/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_biaya_pendaftaran->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_biaya_pendaftaran->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'biaya_pendaftaran/add';
            $data['heading']    = $this->template->link('biaya_pendaftaran > Tambah');
            $data['formAction'] = "biaya_pendaftaran/add";
            $data['buttonText'] = 'Simpan';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_biaya_pendaftaran->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect($this->sub_menu);
    }

    
    public function edit($id = null)
    {
        $biaya_pendaftara = $this->Model_biaya_pendaftaran->find('id_biaya_pendaftaran',$id);
        if (!$kelas) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('biaya_penndaftaran', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $biaya_pendaftaran;
        }

        $validate = $this->Model_biaya_pendaftaran->validate();
        if (! $validate) {
            $data['mainView']   = 'biaya_pendaftaran/add';
            $data['heading']    = $this->template->link('biaya_pendaftaran > Edit ');
            $data['formAction'] = "biaya_pendafttaran/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_biaya_pendaftaran->update($id, $data['input'],'id_biaya_pendaftaran');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect($this->sub_menu, 'refresh');
    }

    public function delete($id)
    {
        $biaya_pendaftara = $this->Model_biaya_pendaftaran->find('id_biaya_pendaftaran',$id);
        if (!$kelas) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('kelas', 'refresh');
        }

        $hapus = $this->Model_biaya_pendaftaran->where('id_biaya_pendaftaran',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect($this->sub_menu, 'refresh');
    }

}
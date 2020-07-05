<?php

Class Biaya_pengembangan extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "pembayaran";
        $this->sub_menu = "biaya-pengembangan";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'biaya_pengembangan';
        // nama PK
        $primaryKey = 'id_pengembangan';
        // list field
        $columns = array(
            array('db' => 'id_pengembangan', 'dt' => 'id_pengembangan'),
            array('db' => 'nama_pengembangan', 'dt' => 'nama_pengembangan'),
            array('db' => 'biaya_pengembangan', 'dt' => 'biaya_pengembangan'),
            array('db' => 'nama_gelombang', 'dt' => 'id_gelombang'),
            array('db' => 'kompetensi_keahlian', 'dt' => 'id_jurusan'),
            array(
                'db' => 'id_pengembangan',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('biaya_pengembangan/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('biaya_pengembangan/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Pembayaran - Biaya Pengembangan');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'biaya_pengembangan/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_biaya_pengembangan->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_biaya_pengembangan->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'biaya_pengembangan/add';
            $data['heading']    = $this->template->link('biaya_pengembangan > Tambah');
            $data['formAction'] = "biaya_pengembangan/add";
            $data['buttonText'] = 'Simpan';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_biaya_pengembangan->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect('Biaya_pengembangan');
    }

    
    public function edit($id = null)
    {
        $biaya_pengembangan = $this->Model_biaya_pengembangan->find('id_pengembangan',$id);
        if (!$biaya_pengembangan) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('biaya_pengembangan', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $biaya_pengembangan;
        }

        $validate = $this->Model_biaya_pengembangan->validate();
        if (! $validate) {
            $data['mainView']   = 'biaya_pengembangan/add';
            $data['heading']    = $this->template->link('Biaya Pengembangan > Edit ');
            $data['formAction'] = "biaya_pengembangan/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_biaya_pengembangan->update($id, $data['input'],'id_pengembangan');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('biaya_pengembangan', 'refresh');
    }

    public function delete($id)
    {
        $biaya_pengembangan = $this->Model_biaya_pengembangan->find('id_pengembangan',$id);
        if (!$biaya_pengembangan) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('biaya_pengembangan', 'refresh');
        }

        $hapus = $this->Model_biaya_pengembangan->where('id_pengembangan',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('biaya_pengembangan', 'refresh');
    }

}
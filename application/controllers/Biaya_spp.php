<?php

Class Biaya_spp extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "pembayaran";
        $this->sub_menu = "biaya-spp";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'biaya_spp';
        // nama PK
        $primaryKey = 'id_spp';
        // list field
        $columns = array(
            array('db' => 'id_spp', 'dt' => 'id_spp'),
            array('db' => 'nama_spp', 'dt' => 'nama_spp'),
            array('db' => 'biaya_spp', 'dt' => 'biaya_spp'),
            array('db' => 'nama_gelombang', 'dt' => 'id_gelombang'),
            array('db' => 'kompetensi_keahlian', 'dt' => 'id_jurusan'),
            array(
                'db' => 'id_spp',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('biaya_spp/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('biaya_spp/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Pembayaran - Biaya SPP');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'biaya_spp/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_biaya_spp->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_biaya_spp->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'biaya_spp/add';
            $data['heading']    = $this->template->link('biaya_spp > Tambah');
            $data['formAction'] = "biaya_spp/add";
            $data['buttonText'] = 'Simpan';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_biaya_spp->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect('biaya_spp');
    }

    
    public function edit($id = null)
    {
        $biaya_spp = $this->Model_biaya_spp->find('id_spp',$id);
        if (!$biaya_spp) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('biaya_spp', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $biaya_spp;
        }

        $validate = $this->Model_biaya_spp->validate();
        if (! $validate) {
            $data['mainView']   = 'biaya_spp/add';
            $data['heading']    = $this->template->link('biaya_spp > Edit ');
            $data['formAction'] = "biaya_spp/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_biaya_spp->update($id, $data['input'],'id_spp');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('biaya_spp', 'refresh');
    }

    public function delete($id)
    {
        $biaya_spp = $this->Model_biaya_spp->find('id_spp',$id);
        if (!$biaya_spp) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('biaya_spp', 'refresh');
        }

        $hapus = $this->Model_biaya_spp->where('id_spp',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('biaya_spp', 'refresh');
    }

}
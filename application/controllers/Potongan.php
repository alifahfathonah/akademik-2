<?php

Class Potongan extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "master";
        $this->sub_menu = "potongan";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'tb_potongan';
        // nama PK
        $primaryKey = 'id_potongan';
        // list field
        $columns = array(
            array('db' => 'id_potongan', 'dt' => 'id_potongan'),
            array('db' => 'nama_potongan', 'dt' => 'nama_potongan'),
            array('db' => 'biaya_potongan', 
                'dt' => 'biaya_potongan',
                'formatter' => function( $d) {
                    return 'Rp '.number_format($d,0,',','.');
                }
            ),
            array('db' => 'jenis_potongan', 'dt' => 'jenis_potongan'),
            array(
                'db' => 'id_potongan',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('potongan/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('potongan/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Master - Potongan ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'potongan/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_potongan->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_potongan->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'potongan/add';
            $data['heading']    = $this->template->link('Potongan > Tambah');
            $data['formAction'] = "potongan/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_potongan->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data  berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data  gagal disimpan.');
        }

        redirect($this->sub_menu);
    }

    
    public function edit($id = null)
    {
        $potongan = $this->Model_potongan->find('id_potongan',$id);
        if (!$potongan) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('potongan', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $potongan;
        }

        $validate = $this->Model_potongan->validate();
        if (! $validate) {
            $data['mainView']   = 'potongan/add';
            $data['heading']    = $this->template->link('Potongan > Edit ');
            $data['formAction'] = "potongan/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_potongan->update($id, $data['input'],'id_potongan');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect($this->sub_menu, 'refresh');
    }

    public function delete($id)
    {
        $potongan = $this->Model_potongan->find('id_potongan',$id);
        if (!$potongan) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('potongan', 'refresh');
        }

        $hapus = $this->Model_potongan->where('id_potongan',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect($this->sub_menu, 'refresh');
    }

}
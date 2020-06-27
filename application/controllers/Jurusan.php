<?php

Class Jurusan extends OperatorController {

    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
        
        $this->menu = "master";
        $this->sub_menu = "jurusan";
        // $this->load->model('Model_jurusan');
    }

    function data() {
        // nama tabel
        $table = 'tb_jurusan';
        // nama PK
        $primaryKey = 'id_jurusan';
        // list field
        $columns = array(
            array('db' => 'nama_singkat', 'dt' => 'nama_singkat'),
            array('db' => 'bidang_keahlian', 'dt' => 'bidang_keahlian'),
            array('db' => 'program_keahlian', 'dt' => 'program_keahlian'),
            array(
                'db' => 'id_jurusan',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('jurusan/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('jurusan/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')" ');
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
        $data['heading']    = $this->template->link('Master - Jurusan ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'jurusan/list',$data);
    }

    function add() {
        // if (isset($_POST['submit'])) {
        //     $this->Model_jurusan->save();
        //     redirect('jurusan');
        // } else {
        //     $this->template->load('template', 'jurusan/add');
        // }

        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_jurusan->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_jurusan->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'jurusan/add';
            $data['heading']    = $this->template->link('Jurusan > Tambah');
            $data['formAction'] = "jurusan/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_jurusan->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data jurusan berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data Jurusan gagal disimpan.');
        }

        redirect('jurusan');
    }
    
    
    public function edit($id = null)
    {
        $jurusan = $this->Model_jurusan->find('id_jurusan',$id);
        if (!$jurusan) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('jurusan', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $jurusan;
        }

        $validate = $this->Model_jurusan->validate();
        if (! $validate) {
            $data['mainView']   = 'jurusan/add';
            $data['heading']    = $this->template->link('Jurusan > Edit ');
            $data['formAction'] = "jurusan/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_jurusan->update($id, $data['input'],'id_jurusan');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('jurusan', 'refresh');
    }
    
    
    public function delete($id)
    {
        $jurusan = $this->Model_jurusan->find('id_jurusan',$id);
        if (!$jurusan) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('jurusan', 'refresh');
        }

        $hapus = $this->Model_jurusan->where('id_jurusan',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('jurusan', 'refresh');
    }

}
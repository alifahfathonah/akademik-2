<?php

Class Gelombang extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "master";
        $this->sub_menu = "gelombang";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'tb_gelombang';
        // nama PK
        $primaryKey = 'id_gelombang';
        // list field
        $columns = array(
            array('db' => 'id_gelombang', 'dt' => 'id_gelombang'),
            array('db' => 'nama_gelombang', 'dt' => 'nama_gelombang'),
            array('db' => 'tahun_pelajaran', 'dt' => 'tahun_pelajaran'),
            array('db' => 'status', 
                  'dt' => 'status',
                  'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return $d=='aktif'?'<span class="text-success">On</span>':'<span class="text-danger text-bold">Off</span>';
                }),
            array(
                'db' => 'id_gelombang',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('gelombang/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('gelombang/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Master - Gelombang ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'gelombang/list' ,$data);
    }

    
    function add() {
        // if (isset($_POST['submit'])) {
        //     $uplodFoto = $this->upload_foto_user();
        //     $this->Model_users->save($uplodFoto);
        //     redirect('users');
        // } else {
            // $data['Judul'] = 'Tambah Data';
            // $this->template->load('template', 'gelombang/add',$data);
        // }
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_gelombang->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_gelombang->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'gelombang/add';
            $data['heading']    = $this->template->link('Gelombang > Tambah');
            $data['formAction'] = "gelombang/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_gelombang->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data gelombang berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data kelas gagal disimpan.');
        }

        redirect('gelobang');
    }

    
    public function edit($id = null)
    {
        $gelombang = $this->Model_gelombang->find('id_gelombang',$id);
        if (!$gelombang) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('gelombang', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $gelombang;
        }

        $validate = $this->Model_gelombang->validate();
        if (! $validate) {
            $data['mainView']   = 'gelombang/add';
            $data['heading']    = $this->template->link('Gelombang > Edit ');
            $data['formAction'] = "gelombang/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_gelombang->update($id, $data['input'],'id_gelombang');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('gelombang', 'refresh');
    }

    public function delete($id)
    {
        $gelombang = $this->Model_gelombang->find('id_gelombang',$id);
        if (!$gelombang) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('gelombang', 'refresh');
        }

        $hapus = $this->Model_gelombang->where('id_gelombang',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('gelombang', 'refresh');
    }

}
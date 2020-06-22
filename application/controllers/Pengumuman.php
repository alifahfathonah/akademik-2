<?php

Class Pengumuman extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "informasi";
        $this->sub_menu = "pengumuman";
        // $this->load->model('Model_pengumuman');
    }

    
    function data() {
        // nama tabel
        $table = 'tb_pengumuman';
        // nama PK
        $primaryKey = 'id_pengumuman';
        // list field
        $columns = array(
            array('db' => 'id_pengumuman', 'dt' => 'id_pengumuman'),
            array('db' => 'tgl_pengumuman', 'dt' => 'tgl_pengumuman'),
            array('db' => 'judul_pengumuman', 'dt' => 'judul_pengumuman'),
            array('db' => 'id_personal', 'dt' => 'nama_personal'),
            // array('db' => 'nama_personal', 'dt' => 4,'field' => 'name','as' => 'nama_personal'),
            array('db' => 'status', 
                  'dt' => 'status',
                  'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return $d=='aktif'?'<span class="text-success">On</span>':'<span class="text-danger text-bold">Off</span>';
                }),
            array(
                'db' => 'id_pengumuman',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('pengumuman/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('pengumuman/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Pengumuman ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'pengumuman/list' ,$data);
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
            $data['input'] = (object) $this->Model_pengumuman->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_pengumuman->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'pengumuman/add';
            $data['heading']    = $this->template->link('Pengumuman > Tambah');
            $data['formAction'] = "pengumuman/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_pengumuman->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data gelombang berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data kelas gagal disimpan.');
        }

        redirect('pengumuman');
    }

    
    public function edit($id = null)
    {
        $pengumuman = $this->Model_pengumuman->find('id_pengumuman',$id);
        if (!$pengumuman) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('pengumuman', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $pengumuman;
        }

        $validate = $this->Model_pengumuman->validate();
        if (! $validate) {
            $data['mainView']   = 'pengumuman/add';
            $data['heading']    = $this->template->link('Pengumuman > Edit ');
            $data['formAction'] = "pengumuman/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_pengumuman->update($id, $data['input'],'id_pengumuman');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('pengumuman', 'refresh');
    }

    public function delete($id)
    {
        $pengumuman = $this->Model_pengumuman->find('id_pengumuman',$id);
        if (!$pengumuman) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('pengumuman', 'refresh');
        }

        $hapus = $this->Model_pengumuman->where('id_pengumuman',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('pengumuman', 'refresh');
    }

}
<?php

Class Siswa_mutasi extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "pembayaran";
        $this->sub_menu = "siswa-mutasi";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'tb_mutasi';
        // nama PK
        $primaryKey = 'id_mutasi';
        // list field
        $columns = array(
            array('db' => 'id_pendaftaran', 'dt' => 'id_pendaftaran'),
            array('db' => 'tgl_mutasi', 'dt' => 'tgl_mutasi'),
            array('db' => 'isi_mutasi', 'dt' => 'isi_mutasi'),
            array('db' => 'status_mutasi', 'dt' => 'status_mutasi'),
            array(
                'db' => 'id_mutasi',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('siswa_mutasi/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('siswa_mutasi/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Pembayaran - Siswa Mutasi');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'siswa_mutasi/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_siswa_mutasi->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_siswa_mutasi->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'siswa_mutasi/add';
            $data['heading']    = $this->template->link('siswa_mutasi > Tambah');
            $data['formAction'] = "siswa_mutasi/add";
            $data['buttonText'] = 'Simpan';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_siswa_mutasi->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect('siswa_mutasi');
    }

    
    public function edit($id = null)
    {
        $siswa_mutasi = $this->Model_siswa_mutasi->find('id_mutasi',$id);
        if (!$siswa_mutasi) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('siswa_mutasi', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $siswa_mutasi;
        }

        $validate = $this->Model_siswa_mutasi->validate();
        if (! $validate) {
            $data['mainView']   = 'siswa_mutasi/add';
            $data['heading']    = $this->template->link('siswa_mutasi > Edit ');
            $data['formAction'] = "siswa_mutasi/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_siswa_mutasi->update($id, $data['input'],'id_mutasi');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('siswa_mutasi', 'refresh');
    }

    public function delete($id)
    {
        $siswa_mutasi = $this->Model_siswa_mutasi->find('id_mutasi',$id);
        if (!$siswa_mutasi) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('siswa_mutasi', 'refresh');
        } 

        $hapus = $this->Model_siswa_mutasi->where('id_mutasi',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('siswa_mutasi', 'refresh');
    }

    public function pencarian($id=null)
    {
        // $data['nama'] = $this->db->get_where('tb_pendaftaran',['id_pendaftaran' => $id])->row();
        $query = "SELECT a.*,b.nama_siswa as nama_siswa,b.id_gelombang,d.nama_gelombang,c.kompetensi_keahlian FROM tb_hasil_wawancara a join tb_pendaftaran b on b.id_pendaftaran=a.id_pendaftaran join tb_jurusan c on c.id_jurusan=a.pil_jur join tb_gelombang d on b.id_gelombang=d.id_gelombang  where a.id_pendaftaran = $id and b.status='aktif' and a.status_wawancara ='diterima' ";
        $data['nama'] = $this->db->query($query)->row();

        return $this->load->view('siswa_mutasi/data_siswa',$data);
    }

}
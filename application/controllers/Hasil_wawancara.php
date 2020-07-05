<?php

Class Hasil_wawancara extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "wawancara";
        $this->sub_menu = "hasil-wawancara";
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'tb_hasil_wawancara';
        // nama PK
        $primaryKey = 'id_hasil_wawancara';
        // list field
        $columns = array(
            array('db' => 'id_hasil_wawancara', 'dt' => 'id_hasil_wawancara'),
            array('db' => 'id_pendaftaran', 'dt' => 'id_pendaftaran'),
            array('db' => 'id_personal', 'dt' => 'id_personal'),
            array('db' => 'status_wawancara', 'dt' => 'status_wawancara'),
            array('db' => 'pil_jur', 'dt' => 'pil_jur'),
            array('db' => 'isi_wawancara', 'dt' => 'isi_wawancara'),
            array('db' => 'catatan', 'dt' => 'catatan'),
            array(
                'db' => 'id_hasil_wawancara',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('hasil_wawancara/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('hasil_wawancara/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Wawancara - Hasil Wawancara ');
        $data['menu'] = $this->menu;
        $data['list'] = $this->db->query("select a.*,b.nama_siswa as nama,b.no_pendaftaran as no,b.pil_1,b.pil_2,b.pil_3 from tb_hasil_wawancara a join tb_pendaftaran b on b.id_pendaftaran=a.id_pendaftaran ")->result();
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'hasil_wawancara/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_hasil_wawancara->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_hasil_wawancara->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'hasil_wawancara/add';
            $data['heading']    = $this->template->link('hasil_wawancara > Tambah');
            $data['formAction'] = "hasil_wawancara/add";
            $data['buttonText'] = 'Tambah';
            $data['data_wawancara'] = $this->db->where('status','aktif')->get('tb_wawancara')->result();
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_hasil_wawancara->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect('hasil_wawancara');
    }

    
    public function edit($id = null)
    {
        $hasil_wawancara = $this->Model_hasil_wawancara->find('id_hasil_wawancara',$id);
        if (!$hasil_wawancara) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('hasil_wawancara', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $hasil_wawancara;
        }

        $validate = $this->Model_hasil_wawancara->validate();
        if (! $validate) {
            $data['mainView']   = 'hasil_wawancara/add';
            $data['heading']    = $this->template->link('hasil_wawancara > Edit ');
            $data['formAction'] = "hasil_wawancara/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_hasil_wawancara->update($id, $data['input'],'id_hasil_wawancara');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('hasil_wawancara', 'refresh');
    }

    public function delete($id)
    {
        $hasil_wawancara = $this->Model_hasil_wawancara->find('id_hasil_wawancara',$id);
        if (!$hasil_wawancara) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('hasil_wawancara', 'refresh');
        }

        $hapus = $this->Model_hasil_wawancara->where('id_hasil_wawancara',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect('hasil_wawancara', 'refresh');
    }

    public function nama_siswa($id=null)
    {
        $data['nama'] =  $this->db->get_where('tb_pendaftaran',['id_pendaftaran' => $id])->row();
        // $nama = $this->db->query("select * from tb_pendaftaran a join tb_jurusan b on b.id_jurusan=a.id_jurusan where a.id_pendaftaran = '$id' ")->row();
        return $this->load->view('hasil_wawancara/jurusan_pilihan',$data);
    }
    public function pencarian($id=null)
    {
        $data['data_wawancara'] =  $this->db->get_where('tb_wawancara',['id_jurusan' => $id])->result();
        // $nama = $this->db->query("select * from tb_pendaftaran a join tb_jurusan b on b.id_jurusan=a.id_jurusan where a.id_pendaftaran = '$id' ")->row();
        return $this->load->view('hasil_wawancara/pencarian',$data);
    }

}
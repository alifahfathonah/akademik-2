<?php

Class Transaksi extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
        $this->menu = "pembayaran";
        $this->sub_menu = "transaksi";
        $this->load->library('cart');
        // $this->load->model('Model_gelombang');
    }

    
    function data() {
        // nama tabel
        $table = 'tb_transksi';
        // nama PK
        $primaryKey = 'id_transksi';
        // list field
        $columns = array(
            array('db' => 'id_transksi', 'dt' => 'id_transksi'),
            array('db' => 'nama_transksi', 'dt' => 'nama_transksi'),
            array('db' => 'status_transksi', 'dt' => 'status_transksi'),
            array(
                'db' => 'id_transksi',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('transksi/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('transksi/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete" onclick="return confirm(\'Are you sure delete?\')"');
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
        $data['heading']    = $this->template->link('Pembayaran - Transaksi Pembayaran');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'transaksi/list' ,$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_transaksi->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_transaksi->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'transaksi/add';
            $data['heading']    = $this->template->link('Transaksi > Tambah');
            $data['formAction'] = "transksi/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_transaksi->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan.');
        }

        redirect($this->sub_menu);
    }

    
    public function edit($id = null)
    {
        $transksi = $this->Model_transaksi->find('id_transksi',$id);
        if (!$transksi) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('transksi', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $transksi;
        }

        $validate = $this->Model_transaksi->validate();
        if (! $validate) {
            $data['mainView']   = 'transksi/add';
            $data['heading']    = $this->template->link('transksi > Edit ');
            $data['formAction'] = "transksi/edit/$id";
            $data['buttonText'] = 'Update';
            $data['menu'] = $this->menu;
            $data['sub_menu'] = $this->sub_menu;
            $this->template->load('template', $data['mainView'] ,$data);
            return;
        }

        $update = $this->Model_transaksi->update($id, $data['input'],'id_transksi');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect($this->sub_menu, 'refresh');
    }

    public function delete($id)
    {
        $transksi = $this->Model_transaksi->find('id_transksi',$id);
        if (!$transksi) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('transksi', 'refresh');
        }

        $hapus = $this->Model_transaksi->where('id_transksi',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect($this->sub_menu, 'refresh');
    }

    public function pencarian($id=null)
    {
        // $data['nama'] = $this->db->get_where('tb_pendaftaran',['id_pendaftaran' => $id])->row();
        $query = "SELECT a.*,b.nama_siswa as nama_siswa,b.id_gelombang,d.nama_gelombang,c.kompetensi_keahlian FROM tb_hasil_wawancara a join tb_pendaftaran b on b.id_pendaftaran=a.id_pendaftaran join tb_jurusan c on c.id_jurusan=a.pil_jur join tb_gelombang d on b.id_gelombang=d.id_gelombang  where a.id_pendaftaran = $id and b.status='aktif' and a.status_wawancara ='diterima' ";
        $data['nama'] = $this->db->query($query)->row();

        return $this->load->view('transaksi/data_siswa',$data);
    }
    public function jurusan($id=null)
    {
        $jur = $_POST['jur'];
        $gel = $_POST['gel'];
        $data['nama'] = $this->db->get_where('tb_jurusan',['id_jurusan' => $id])->row();
        $data['pendaftaran'] = $this->db->query("select * from tb_biaya_pendaftaran where id_jurusan = $jur AND id_gelombang = $gel  ")->row();
        $data['pengembangan'] = $this->db->query("select * from tb_pengembangan where id_jurusan = $jur AND id_gelombang = $gel  ")->row();
        $data['seragam'] = $this->db->query("select * from tb_seragam where id_jurusan = $jur AND id_gelombang = $gel  ")->row();
        $data['spp'] = $this->db->query("select * from tb_spp where id_jurusan = $jur AND id_gelombang = $gel  ")->row();
        return $this->load->view('transaksi/data_biaya_jurusan',$data);
    }

    public function simpantransaksi()
    {
        $data = array(
            array(
                    'id'      => 'pendaftaran',
                    'qty'     => 1,
                    'price'   => $_POST['biaya_pendaftaran'],
                    'name'    => $_POST['pendaftaran'],
            ),
            array(
                    'id'      => 'pengembangan',
                    'qty'     => 1,
                    'price'   => $_POST['biaya_pengembangan'],
                    'name'    => $_POST['pengembangan']
            ),
            array(
                    'id'      => 'seragam',
                    'qty'     => 1,
                    'price'   => $_POST['biaya_seragam'],
                    'name'    => $_POST['seragam']
            ),
            array(
                    'id'      => 'spp',
                    'qty'     => 1,
                    'price'   => $_POST['biaya_spp'],
                    'name'    => $_POST['spp']
            )
        );
        
        $this->cart->insert($data);
    }

    public function potongan()
    {
        $data = $this->db->get('tb_potongan')->result();
        $str = '';
        foreach ($data as $p ) {
            $str .= '';
        }
    }

}
<?php
// Tabel Personal PSB 2020
Class Users extends AdminController {

    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
        // $this->load->model('Model_users');
        $this->menu = "master";
        $this->sub_menu = "users";
    }

    function data() {
        // nama tabel
        $table = 'tb_personal';
        // nama PK
        $primaryKey = 'id_personal';
        // list field
        $columns = array(
            array('db' => 'pas_photo', 'dt' => 'pas_photo'),
            array('db' => 'nama_personal', 'dt' => 'nama_personal'),
            array('db' => 'level', 'dt' => 'level'),
            array(
                'db' => 'id_personal',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('users/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('users/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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
        $data['heading']    = $this->template->link('Personal ');
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $this->template->load('template', 'users/list',$data);
    }

    
    function add() {
        
        if (!$_POST) {
            $data['input'] = (object) $this->Model_users->getDefaultValues();
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->Model_users->validate()) {
            // $halaman     = $this->halaman;
            $data['mainView']   = 'users/add';
            $data['heading']    = $this->template->link('Potongan > Tambah');
            $data['formAction'] = "users/add";
            $data['buttonText'] = 'Tambah';
            $data['menu']       = $this->menu;
            $data['sub_menu']   = $this->sub_menu;
            $this->template->load('template', $data['mainView'],$data);
            // $this->load->view('template', compact('halaman', 'main_view', 'form_action', 'input'));
            return;
        }

        if ($this->Model_users->insert($data['input'])) {
            $this->session->set_flashdata('success', 'Data  berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Data  gagal disimpan.');
        }

        redirect($this->sub_menu);
    }

    
    public function edit($id = null)
    {
        $potongan = $this->Model_users->find('id_potongan',$id);
        if (!$potongan) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('potongan', 'refresh');
        }

        $data['input'] = (object) $this->input->post(null, true);
        if (! $_POST) {
            $data['input'] = (object) $potongan;
        }

        $validate = $this->Model_users->validate();
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

        $update = $this->Model_users->update($id, $data['input'],'id_potongan');
        if (! $update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect($this->sub_menu, 'refresh');
    }

    public function delete($id)
    {
        $potongan = $this->Model_users->find('id_potongan',$id);
        if (!$potongan) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('potongan', 'refresh');
        }

        $hapus = $this->Model_users->where('id_potongan',$id)->delete();

        if (!$hapus) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }
        
        redirect($this->sub_menu, 'refresh');
    }

    
    
     function upload_foto_user(){
        $config['upload_path']          = './uploads/foto_user/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
    
    
    function rule(){
        $this->template->load('template','users/rule');
    }
    
    function modul(){
        $level_user = $_GET['level_user'];
        echo "<table id='mytable2' class='table table-striped table-bordered table-hover table-full-width dataTable'>
                <thead>
                    <tr>
                        <th width='10'>NO</th>
                        <th>NAMA MODULE</th>
                        <th>LINK</th>
                        <th width='100'>HAK AKSES</th>
                    </tr>";
        
        $menu = $this->db->get('tabel_menu');
        $no=1;
        foreach ($menu->result() as $row){
            echo "<tr>
                <td>$no</td>
                <td>".  strtoupper($row->nama_menu)."</td>
                <td>$row->link</td>
                <td align='center'><input type='checkbox' ";
            $this->chek_akses($level_user, $row->id);
             echo " onclick='addRule($row->id)'></td>
                </tr>";
            $no++;
        }
        
        echo"</thead>
            </table>";
    }
    
    function chek_akses($level_user,$id_menu){
        $data = array('id_level_user'=>$level_user,'id_menu'=>$id_menu);
        $chek = $this->db->get_where('tbl_user_rule',$data);
        if($chek->num_rows()>0){
            echo "checked";
        }
    }




    function addrule(){
        $level_user = $_GET['level_user'];
        $id_menu    = $_GET['id_menu'];
        $data       = array('id_level_user'=>$level_user,'id_menu'=>$id_menu);
        $chek       = $this->db->get_where('tbl_user_rule',$data);
        if($chek->num_rows()<1){
            $this->db->insert('tbl_user_rule',$data);
            echo "berhasil memberikan akses modul";
        }else{
            $this->db->where('id_menu',$id_menu);
            $this->db->where('id_level_user',$level_user);
            $this->db->delete('tbl_user_rule');
            echo " berhasil delete akses modul";
        }
    }

}
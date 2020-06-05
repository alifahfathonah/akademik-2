<?php

Class Gelombang extends OperatorController {

    function __construct() {
        parent::__construct();
        // if (empty($this->session->userdata('username'))) {
        //     redirect('auth');
        // }
        //chekAksesModule();
        $this->load->library('ssp');
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
                    return anchor('guru/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('guru/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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
        $this->template->load('template', 'gelombang/list');
    }

    
    function add() {
        if (isset($_POST['submit'])) {
            $uplodFoto = $this->upload_foto_user();
            $this->Model_users->save($uplodFoto);
            redirect('users');
        } else {
            $this->template->load('template', 'users/add');
        }
    }

}
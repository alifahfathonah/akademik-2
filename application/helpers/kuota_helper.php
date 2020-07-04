<?php
// Menseting flash message (redirect).
function kuota($table, $id_jurusan)
{
    $CI =& get_instance();
    $kapasitas = $CI->db->get_where($table,['id_jurusan'=>$id_jurusan])->row();
    return $kapasitas->kapasitas;
}

function daftar($table,$pil1)
{
    $CI =& get_instance();
    $pilihan = $CI->db->get_where($table,['pil_1'=>$pil1])->result();
    return count($pilihan);
}

function pilihan_jurusan($id_jurusan=null)
{
    $CI =& get_instance();
    $j = $CI->db->where('id_jurusan',$id_jurusan)->get('tb_jurusan')->row();
    return $j->kompetensi_keahlian;
}


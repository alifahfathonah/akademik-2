<br>
<br>
<?php if(showFlashMessage()){
    echo showFlashMessage();
};?>
<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Tabel Hasil Wawancara
            <div class="panel-tools">
                <?php echo anchor('hasil_wawancara/add','<i class="fa fa-pencil-square-o" aria-hidden="true">[DATA BARU]</i>',"title='Tambah Data'");?>
            <!--    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> -->
            </div>
        </div>
        <div class="panel-body">
            <table id="" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO PENDAFT</th>
                        <th>NAMA SISWA</th>
                        <th>PIL 1</th>
                        <th>PIL 2</th>
                        <th>PIL 3</th>
                        <th>DI TERIMA JURUSAN</th>
                        <th>ISI WAWANCARA</th>
                        <th>DINYATAKAN</th>
                        <th>CATATAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=0; foreach ($list as $l ) { $no++;?>
                    
                    <tr>
                        <td><?=$no;?></td>
                        <td><?=$l->no;?></td>
                        <td><?=$l->nama?></td>
                        <td><?=pilihan_jurusan($l->pil_1);?></td>
                        <td><?=pilihan_jurusan($l->pil_2)?></td>
                        <td><?=pilihan_jurusan($l->pil_3)?></td>
                        <td><?=pilihan_jurusan($l->pil_jur)?></td>
                        <td><?=$l->isi_wawancara;?></td>
                        <td><?=$l->status_wawancara;?></td>
                        <td><?=$l->catatan?></td>
                        <td>
                            <?php 
                                echo 
                                anchor('hasil_wawancara/edit/'.$l->id_hasil_wawancara,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"'); 
                                echo 
                                anchor('hasil_wawancara/delete/'.$l->id_hasil_wawancara,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Edit"  onclick="return confirm(\'Are you sure delete?\')" '); 
                                
                                
                            
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>


  <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('hasil_wawancara/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "id_pendaftaran"
                    },
                    {
                        "data": "id_personal"
                    },
                    {
                        "data": "status_wawancara"
                    },
                    {
                        "data": "pil_jur"
                    },
                    {
                        "data": "isi_wawancara"
                    },
                    {
                        "data": "catatan"
                    },
                    { "data": "aksi","width": "120px" },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>
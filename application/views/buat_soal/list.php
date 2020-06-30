<br>
<br>
<?php if(showFlashMessage()){
    echo showFlashMessage();
};?>
<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Tabel Buat Soal
            <div class="panel-tools">
                <?php echo anchor('buat_soal/add','<i class="fa fa-pencil-square-o" aria-hidden="true">[DATA BARU]</i>',"title='Tambah Data'");?>
            <!--    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> -->
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>TANGGAL</th>
                        <th>PERTANYAAN</th>
                        <th>GAMBAR</th>
                        <th>SUARA</th>
                        <th>JWB A</th>
                        <th>FILE A</th>
                        <th>JWB B</th>
                        <th>FILE B</th>
                        <th>JWB C</th>
                        <th>FILE C</th>
                        <th>JWB D</th>
                        <th>FILE D</th>
                        <th>JWB E</th>
                        <th>FILE E</th>
                        <th>JAWABAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>2-2-2020</th>
                        <th>Siapa Presiden RI ke 1?</th>
                        <th>-</th>
                        <th>-</th>
                        <th>Joko Widodo</th>
                        <th>-</th>
                        <th>Susilo Bambang Yudhoyono</th>
                        <th>-</th>
                        <th>Ir Soekarno</th>
                        <th>-</th>
                        <th>Soeharto</th>
                        <th>-</th>
                        <th>Megawati</th>
                        <th>-</th>
                        <th>Ir Soekarno</th>
                        <th>Edit | Hapus</th>
                    </tr>
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
                "ajax": '<?php echo site_url('buat_soal/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "id_mapel"
                    },
                    {
                        "data": "nomor"
                    },
                    {
                        "data": "file1"
                    },
                    {
                        "data": "file2"
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
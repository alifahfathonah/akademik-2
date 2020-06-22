<br>
<br>
<?php if(showFlashMessage()){
    echo showFlashMessage();
};?>
<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Dynamic Table
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO PENDAFTAR</th>
                        <th>NAMA SISWA</th>
                        <th>JK</th>
                        <th>NO HP</th>
                        <th>ASAL SEKOLAH</th>
                        <th>VALIDASI</th>
                        <th>UBAH</th>
                    </tr>
                </thead>
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
                "ajax": '<?php echo site_url('validasi/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "nama_siswa"
                    },
                    {
                        "data": "jenis_kelamin"
                    },
                    {
                        "data": "no_hp"
                    },
                    {
                        "data": "asal_sekolah"
                    },
                    { 
                        "data": "status",
                        "width": "120px" ,
                        "sClass": "text-center",
                    },
                    {
                        "data": "aksi"
                    },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>
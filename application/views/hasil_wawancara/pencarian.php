
        <table id="mywawancara" class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA WAWANCARA</th>
                    <th>KRITERIA WAWANCARA</th>
                    <th>KETERANGAN WAWANCARA</th>
                    <th>STATUS WAWANCARA</th>
                    <th>JURUSAN</th>
                </tr>
            </thead>
            
            <tbody>
                <?php $no=0; foreach ($data_wawancara as $l ) { $no++;?>
                    
                    <tr>
                        <td><?=$no;?></td>
                        <td><?=$l->nama_wawancara;?></td>
                        <td><?=$l->kriteria_wawancara?></td>
                        <td><?=$l->ket_wawancara;?></td>
                        <td><?=$l->status?></td>
                        <td><?=pilihan_jurusan($l->id_jurusan)?></td>
                    </tr>
                <?php } ?>
                </tbody>
        </table>
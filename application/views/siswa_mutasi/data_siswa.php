
<?php if ($nama) { ?>
    

            <div class="form-group ">
                <label class="col-sm-2 control-label" for="nama_siswa">
                    NAMA SISWA
                </label>
                <div class="col-sm-9">
                    <input class="form-control" disabled value="<?=$nama->nama_siswa;?>" id="nama_siswa">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="pil_1">
                   DITERIMA JURUSAN
                </label>
                <div class="col-sm-9">
                    <input type="text"  disabled value="<?=pilihan_jurusan($nama->pil_jur);?>"  placeholder="" id="pil_1" class="form-control">
                    <input type="hidden" value="<?=$nama->pil_jur?>" id="data-j">
                </div>
            </div>

<?php } else {
    echo "<h3>Maaf Belum Lulus Wawancara</h3>";
}
 ?>

 <script>
 $(document).ready(function(){
     

 });
 </script>

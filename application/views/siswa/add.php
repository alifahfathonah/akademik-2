<br>
<br>
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Form Data Peserta Didik
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">

            
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active"><a data-toggle="tab" href="#data-diri">Data Diri</a></li>
                <li role="presentation" class="orang"><a data-toggle="tab" href="#orang-tua">Orang Tua</a></li>
                <li role="presentation"><a data-toggle="tab" href="#prestasi">Prestasi</a></li>
                <li role="presentation"><a data-toggle="tab" href="#berkas">Berkas</a></li>
            </ul>
            <br>
            
            <?php
            echo form_open_multipart('siswa/add', 'role="form" class="form-horizontal"');
            ?>
            <div class="tab-content">
                <div id="data-diri" class="tab-pane fade in active">
                        
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            No Pendaftaran 
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NIM / NISN
                        </label>
                        <div class="col-sm-4">
                            <input type="text" name="nim" placeholder="MASUKAN NIM" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="nisn" placeholder="MASUKAN NISN" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NAMA 
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TTL
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            JENIS KELAMIN
                        </label>
                        <div class="col-sm-5">
                            <?php
                            echo form_dropdown('gender', array('P' => 'LAKI LAKI', 'W' => 'PEREMPUAN'), null, "class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            AGAMA
                        </label>
                        <div class="col-sm-5">
                            <?php
                            echo '';
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Foto
                        </label>
                        <div class="col-sm-2">
                            <input type="file" name="userfile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            ROMBEL
                        </label>
                        <div class="col-sm-6">
                            <?php echo ''; ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Alamat
                        </label>
                        <div class="col-sm-6">
                            <textarea class="form-control"></textarea>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            RT / RW
                        </label>
                        <div class="col-sm-3">
                            <input type="text" name="nama" placeholder="RT" id="form-field-1" class="form-control">
                        </div>
                                        <div class="col-sm-3">
                            <input type="text" name="nama" placeholder="RW" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TTL
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            JENIS KELAMIN
                        </label>
                        <div class="col-sm-5">
                            <?php
                            echo form_dropdown('gender', array('P' => 'LAKI LAKI', 'W' => 'PEREMPUAN'), null, "class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            AGAMA
                        </label>
                        <div class="col-sm-5">
                            <?php
                            echo '';
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Foto
                        </label>
                        <div class="col-sm-2">
                            <input type="file" name="userfile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            ROMBEL
                        </label>
                        <div class="col-sm-6">
                            <?php echo ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">

                        </label>
                        <div class="col-sm-2">
                        <a data-toggle="tab" id="orang" href="#orang-tua">Orang Tua</a>
                        </div>
                        <div class="col-sm-3">
                            <?php echo anchor('siswa', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                        </div>
                    </div>

                </div>

                <div id="orang-tua" class="tab-pane fade">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Nama Ayah
                        </label>
                        <div class="col-sm-2">
                            <input type="file" name="userfile">
                        </div>
                    </div>
                </div>
                <div id="prestasi" class="tab-pane fade">
                    <h3>Prestasi</h3>
                    <p>Membuat navigasi tabs dan pills bootstrap.</p>
                </div>
                <div id="berkas" class="tab-pane fade">
                    <h3>Berkas</h3>
                    <p>Membuat navigasi tabs dan pills bootstrap.</p>
                </div>
            </div>
            
            </form>
            
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>

<script>

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
    //   console.log(e.target.id)
    // let li = e.target.id;
    // $('.'+li).addClass('active');
    $(e.target).addClass('active');
})

</script>

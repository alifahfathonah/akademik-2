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
                            <input type="text" name="nama" placeholder="" id="form-field-1" value="<?=$input->no_pendaftaran;?>" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NIM / NISN
                        </label>
                        <div class="col-sm-4">
                            <input type="text" name="nisn" value="<?=$input->nisn?>" placeholder="MASUKAN NISN" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Asal Sekolah
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nisn" value="<?=$input->asal_sekolah?>" placeholder="MASUKAN NISN" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NAMA 
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" value="<?=$input->nama_siswa?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TTL
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" value="<?=$input->tempat_lahir?>" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" value="<?=$input->tanggal_lahir?>" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            JENIS KELAMIN
                        </label>
                        <div class="col-sm-5">
                            <?php
                            echo form_dropdown('gender', array('L' => 'LAKI LAKI', 'P' => 'PEREMPUAN'), $input->jenis_kelamin, "class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            AGAMA
                        </label>
                        <div class="col-sm-5">
                        <?php
                            
                            echo form_dropdown('agama', [
                                'Islam' => 'Islam',
                                'Kristen' => 'Kristen',
                                'Katholik' => 'Katholik',
                                'Hindu' => 'Hindu',
                                'Budha' => 'Budha',
                                
                            ], $input->agama, "class='form-control'");
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

                    <h3>Alamat</h3>
                    <hr>


                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Dukuh
                        </label>
                        <div class="col-sm-6">
                            <input type="text" value="" name="dukuh" placeholder="Dukuh" id="" class="form-control">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            RT / RW
                        </label>
                        <div class="col-sm-3">
                            <input type="text" name="sis_rt" placeholder="RT" id="" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="sis_rw" placeholder="RW" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Kelurahan / Kecamatan
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="sis_kelurahan" placeholder="" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="sis_kecamatan" placeholder="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Kabupaten / Provinsi
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="sis_kabupaten" placeholder="Kabupaten" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="sis_provinsi" placeholder="Provinsi" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            No Seri Ijazah / No. SKHUN
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="seri_ijasah_smp" placeholder="No Ijasah SMP" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="seri_skhun_smp" placeholder="No .SKHUN" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Pilihan 1
                        </label>
                        <div class="col-sm-5">
                            
                            <?= form_dropdown('pil_1', getDropdownList('tb_jurusan',['kompetensi_keahlian','kompetensi_keahlian']), $input->pil_1?? '', ['class' => 'form-control', 'autofocus' => 'autofocus']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Pilihan 2
                        </label>
                        <div class="col-sm-5">
                            
                            <?= form_dropdown('pil_2', getDropdownList('tb_jurusan',['kompetensi_keahlian','kompetensi_keahlian']), $input->pil_2?? '', ['class' => 'form-control', 'autofocus' => 'autofocus']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Pilihan 3
                        </label>
                        <div class="col-sm-5">
                            
                            <?= form_dropdown('pil_3', getDropdownList('tb_jurusan',['kompetensi_keahlian','kompetensi_keahlian']), $input->pil_3?? '', ['class' => 'form-control', 'autofocus' => 'autofocus']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Username
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Password
                        </label>
                        <div class="col-sm-5">
                            <input type="password" name="tanggal_lahir" placeholder="Password" id="" class="form-control">
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

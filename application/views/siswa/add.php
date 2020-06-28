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
            <div class="tab-content">
                <!-- Toogle data siswa -->
                <div id="data-diri" class="tab-pane fade in active">
                    
                    <?php
                    echo form_open_multipart($formAction, 'role="form" class="form-horizontal"');
                    ?>  
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            No Pendaftaran 
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="no_pendaftaran" placeholder="" id="form-field-1" value="<?=$input->no_pendaftaran ?? '';?>" class="form-control">
                            <input type="hidden" name="id_pendaftaran" placeholder="" id="" value="<?=$input->id_pendaftaran;?>" class="form-control">
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
                            <input type="text" name="asal_sekolah" value="<?=$input->asal_sekolah?>" placeholder="MASUKAN NISN" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NAMA 
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" value="<?=$input->nama_siswa ?? ''?>" class="form-control">
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
                            echo form_dropdown('gender', array('L' => 'LAKI LAKI', 'P' => 'PEREMPUAN'), $input->jenis_kelamin ?? '', "class='form-control'");
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
                            <input type="file" name="pas_photo">
                        </div>
                    </div>

                    <h3>Alamat</h3>
                    <hr>


                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Dukuh
                        </label>
                        <div class="col-sm-6">
                            <input type="text" value="<?=$input->sis_dukuh;?>" name="sis_dukuh" placeholder="Dukuh" id="" class="form-control">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            RT / RW
                        </label>
                        <div class="col-sm-3">
                            <input type="text" name="sis_rt" value="<?=$input->sis_rt;?>" placeholder="RT" id="" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="sis_rw" placeholder="RW" value="<?=$input->sis_rw;?>" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Kelurahan / Kecamatan
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="sis_kelurahan" value="<?=$input->sis_kelurahan;?>" placeholder="" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="sis_kecamatan" value="<?=$input->sis_kecamatan;?>" placeholder="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Kabupaten / Provinsi
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="sis_kabupaten" placeholder="Kabupaten" value="<?=$input->sis_kabupaten;?>" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="sis_provinsi" value="<?=$input->sis_provinsi;?>" placeholder="Provinsi" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            No Seri Ijazah / No. SKHUN
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="seri_ijasah_smp" value="<?=$input->seri_ijasah_smp;?>" placeholder="No Ijasah SMP" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="seri_skhun_smp" value="<?=$input->seri_skhun_smp;?>" placeholder="No .SKHUN" id="" class="form-control">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            No UN SMP
                        </label>
                        <div class="col-sm-6">
                            <input type="text" value="<?=$input->no_un_smp;?>" name="no_un_smp" placeholder="No UN SMP" id="" class="form-control">
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
                            <input type="text" value="<?=$input->username;?>" name="username" placeholder="TANGGAL LAHIR" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Password
                        </label>
                        <div class="col-sm-5">
                            <input type="password" value="<?=$input->password;?>" name="password" placeholder="Password" id="" class="form-control">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">

                        </label>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-info">Edit</button>
                        </div>
                        <div class="col-sm-3">
                            <?php echo anchor('siswa', 'Kembali', array('class' => 'btn btn-warning btn-sm')); ?>
                        </div>
                    </div>

                    </form>

                </div>

                <!-- end Toggle Data siswa -->

                <!-- Toggle Ortu -->
                <div id="orang-tua" class="tab-pane fade">
                    <p>Orang Tua</p>
                    <?php
                    echo form_open_multipart($formAction, 'role="form" class="form-horizontal"');
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NAMA 
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" placeholder="" id="form-field-1" value="<?=$input->nama_siswa ?? ''?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_ayah">
                            Nama Ayah
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_ayah" placeholder="" id="nama_ayah" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="no_hp_ayah">
                            No HP Ayah
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="no_hp_ayah" placeholder="" id="no_hp_ayah" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="pekerjaan_ayah">
                            Pekerjaan Ayah
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="pekerjaan_ayah" placeholder="" id="pekerjaan_ayah" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="status_ayah">
                            Status Ayah
                        </label>
                        <div class="col-sm-9">
                            <select name="status_ayah" id="" class="form-control">
                                <option value="masih hidup">Masih Hidup</option>
                                <option value="pisah">Pisah</option>
                                <option value="almarhum">Almarhum</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_ibu">
                            Nama Ibu
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_ibu" placeholder="" id="nama_ibu" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="no_hp_ibu">
                            No HP Ayah
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="no_hp_ibu" placeholder="" id="no_hp_ibu" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="pekerjaan_ibu">
                            Pekerjaan Ibu
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="pekerjaan_ibu" placeholder="" id="pekerjaan_ibu" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="status_ibu">
                            Status Ibu
                        </label>
                        <div class="col-sm-9">
                            <select name="status_ibu" id="" class="form-control">
                                <option value="masih hidup">Masih Hidup</option>
                                <option value="pisah">Pisah</option>
                                <option value="almarhum">Almarhum</option>
                            </select>
                        </div>
                    </div>

                    
                    <!-- End Almat Ortu dan Wali -->
                    <h4>Alamat Orang Tua</h4>
                    <hr>


                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Dukuh
                        </label>
                        <div class="col-sm-6">
                            <input type="text" value="" name="ortu_dukuh" placeholder="Dukuh" id="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            RT / RW
                        </label>
                        <div class="col-sm-3">
                            <input type="text" name="ortu_rt" value="" placeholder="RT" id="" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="ortu_rw" placeholder="RW" value="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Kelurahan / Kecamatan
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="ortu_kelurahan" value="" placeholder="" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="ortu_kecamatan" value="" placeholder="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Kabupaten / Provinsi
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="ortu_kabupaten" placeholder="Kabupaten" value="" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="ortu_provinsi" value="" placeholder="Provinsi" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Nama Wali / No. Hp Wali
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="nama_wali" value="" placeholder="Nama Wali" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="number" name="no_hp_wali" value="" placeholder="No .Hp Wali" id="" class="form-control">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Pekerjaan Wali
                        </label>
                        <div class="col-sm-6">
                            <input type="text" value="" name="pekerjaan_wali" placeholder="Pekerjaan Wali" id="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="alamat_wali">
                            Alamat Wali
                        </label>
                        <div class="col-sm-9">
                            <textarea name="alamat_wali"  id="alamat_wali" value="" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">

                        </label>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-info">Edit Ortu</button>
                        </div>
                        <div class="col-sm-3">
                            <?php echo anchor('siswa', 'Kembali', array('class' => 'btn btn-warning btn-sm')); ?>
                        </div>
                    </div>
                    <!-- End Almat Ortu dan Wali  -->

                    </form>

                </div>

                <!-- end Toogle Ortu -->

                <!-- Toggle Prestasi -->
                <div id="prestasi" class="tab-pane fade">
                    <h3>Prestasi</h3>
                    <?php
                        echo form_open_multipart($formAction, 'role="form" class="form-horizontal"');
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Nama Siswa
                        </label>
                        <div class="col-sm-9">
                            <input type="text"  name="nama" placeholder="" id="form-field-1" value="<?=$input->nama_siswa ?? ''?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_prestasi">
                            Nama Prestasi
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_prestasi" placeholder="" id="nama_prestasi" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="peringkat_prestasi">
                            Peringkat Prestasi
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="peringkat_prestasi" placeholder="" id="peringkat_prestasi" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="tingkat_prestasi">
                            Tingkat Prestasi
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="tingkat_prestasi" placeholder="" id="tingkat_prestasi" value="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="tahun_prestasi">
                            Tahun Prestasi
                        </label>
                        <div class="col-sm-9">
                            <input type="number" name="tahun_prestasi" placeholder="" id="tahun_prestasi" value="" class="form-control">
                        </div>
                    </div>

                    </form>
                    
                </div>
                <!-- END Toggle Prestasi -->

                <div id="berkas" class="tab-pane fade">
                    <h3>Berkas</h3>
                    
                    <?php
                        echo form_open_multipart($formAction, 'role="form" class="form-horizontal"');
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Nama Siswa
                        </label>
                        <div class="col-sm-9">
                            <input type="text"  name="nama" placeholder="" id="form-field-1" value="<?=$input->nama_siswa ?? ''?>" class="form-control">
                        </div>
                    </div>

                    </form>
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

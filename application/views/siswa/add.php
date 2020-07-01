<br>
<br>
<div class="col-sm-12">
<?php
    echo showFlashMessage();
;?>
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
                        <div class="col-sm-3">
                            <input type="file" name="pas_photo">
                        </div>
                        <div class="col-sm-6">
                            <?php $image = ($input->pas_photo !== '') ? $input->pas_photo : 'user.png' ; ?>
                            <img width="80" class="img-responsive" src="<?=base_url('uploads/foto_user/'.$image)?>" >
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
                    echo form_open_multipart($formActionOrtu, 'role="form" class="form-horizontal"');
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NAMA 
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" placeholder="" id="form-field-1" value="<?=$input->nama_siswa ?? ''?>" class="form-control">
                            <input type="hidden" name="id_siswa" value="<?=$data_ortu->idsis ?? '' ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_ayah">
                            Nama Ayah
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_ayah" placeholder="" id="nama_ayah" value="<?=$data_ortu->nama_ayah ?? ''?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="no_hp_ayah">
                            No HP Ayah
                        </label>
                        <div class="col-sm-9">
                            <input type="number" name="no_hp_ayah" placeholder="" id="no_hp_ayah" value="<?=$data_ortu->no_hp_ayah ?? ''?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="pekerjaan_ayah">
                            Pekerjaan Ayah
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="pekerjaan_ayah" placeholder="" id="pekerjaan_ayah" value="<?=$data_ortu->pekerjaan_ayah?? ''?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="status_ayah">
                            Status Ayah
                        </label>
                        <div class="col-sm-9">
                            
                            <?php 
                                    $array = [
                                        '' => '--Pilih--',
                                        'masih hidup' => 'masih hidup',
                                        'pisah' => 'pisah',
                                        'almarhum' => 'almarhum',

                                    ];
                                echo form_dropdown('status_ayah',$array,$data_ortu->status_ibu ?? '',['class'=>'form-control']) ?>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_ibu">
                            Nama Ibu
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_ibu" placeholder="" id="nama_ibu" value="<?=$data_ortu->nama_ibu?? ''?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="no_hp_ibu">
                            No HP Ibu
                        </label>
                        <div class="col-sm-9">
                            <input type="number" name="no_hp_ibu" placeholder="" id="no_hp_ibu" value="<?=$data_ortu->no_hp_ibu?? ''?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="pekerjaan_ibu">
                            Pekerjaan Ibu
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="pekerjaan_ibu" placeholder="" id="pekerjaan_ibu" value="<?=$data_ortu->pekerjaan_ibu?? ''?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="status_ibu">
                            Status Ibu
                        </label>
                        <div class="col-sm-9">

                            <?php 
                                $array = [
                                    '' => '--Pilih--',
                                    'masih hidup' => 'masih hidup',
                                    'pisah' => 'pisah',
                                    'almarhum' => 'almarhum',

                                ];
                            echo form_dropdown('status_ibu',$array,$data_ortu->status_ibu ?? '',['class'=>'form-control']) ?>

                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="pendapatan_ortu">
                            Pendapatan Orang Tua
                        </label>
                        <div class="col-sm-9">
                            <?php 
                                $array = [
                                    '' => '--Pilih--',
                                    'Kurang Dari Rp. 500.000' => 'Kurang Dari Rp. 500.000',
                                    'Rp 500.000 s/d Rp. 1.000.000' => 'Rp 500.000 s/d Rp. 1.000.000',
                                    'Rp. 1.000.000 s/d Rp 2.000.000' => 'Rp. 1.000.000 s/d Rp 2.000.000',
                                    'Rp. 2.000.000 s/d Rp. 3.000.000' => 'Rp. 2.000.000 s/d Rp. 3.000.000',
                                    'diatas Rp. 3.000.000' => 'diatas Rp. 3.000.000'

                                ];
                                echo form_dropdown('pendapatan_ortu',$array,$data_ortu->pendapatan_ortu ?? '',['class'=>'form-control']) ?>
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
                            <input type="text" value="<?=$data_ortu->ortu_dukuh?? ''?>" name="ortu_dukuh" placeholder="Dukuh" id="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            RT / RW
                        </label>
                        <div class="col-sm-3">
                            <input type="number" name="ortu_rt" value="<?=$data_ortu->ortu_rt?? ''?>" placeholder="RT" id="" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="number" name="ortu_rw" placeholder="RW" value="<?=$data_ortu->ortu_rw?? ''?>" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Kelurahan / Kecamatan
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="ortu_kelurahan" value="<?=$data_ortu->ortu_kelurahan?? ''?>" placeholder="" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="ortu_kecamatan" value="<?=$data_ortu->ortu_kecamatan?? ''?>" placeholder="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Kabupaten / Provinsi
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="ortu_kabupaten" placeholder="Kabupaten" value="<?=$data_ortu->ortu_kabupaten?? ''?>" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="ortu_provinsi" value="<?=$data_ortu->ortu_provinsi?? ''?>" placeholder="Provinsi" id="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Nama Wali / No. Hp Wali
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="nama_wali" value="<?=$data_ortu->nama_wali?? ''?>" placeholder="Nama Wali" id="" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="number" name="no_hp_wali" value="<?=$data_ortu->no_hp_wali?? ''?>" placeholder="No .Hp Wali" id="" class="form-control">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">
                            Pekerjaan Wali
                        </label>
                        <div class="col-sm-6">
                            <input type="text" value="<?=$data_ortu->pekerjaan_wali?? ''?>" name="pekerjaan_wali" placeholder="Pekerjaan Wali" id="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="alamat_wali">
                            Alamat Wali
                        </label>
                        <div class="col-sm-9">
                            <textarea name="alamat_wali"  id="alamat_wali" class="form-control"><?=$data_ortu->alamat_wali?? ''?></textarea>
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
                        echo form_open_multipart($formActionPrestasi, 'role="form" class="form-horizontal"');
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Nama Siswa
                        </label>
                        <div class="col-sm-9">
                            <input type="text"  name="nama" placeholder="" id="form-field-1" value="<?=$input->nama_siswa ?? ''?>" class="form-control">
                            <input type="hidden" name="id_siswa" value="<?=$input->id_siswa ?? ''; ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_prestasi">
                            Nama Prestasi
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_prestasi" value="" placeholder="" id="nama_prestasi" class="form-control">
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

                    

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">

                        </label>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-info">Tambah</button>
                        </div>
                        <div class="col-sm-3">
                            <?php echo anchor('siswa', 'Kembali', array('class' => 'btn btn-warning btn-sm')); ?>
                        </div>
                    </div>

                    </form>

                    <?php 
                        //idpendaftaran
                        $pend = $this->uri->segment('3'); 
                    ?>
                    <div class="table-responsive">
                        <?php 
                            if (isset($input->id_siswa) ) {
                                $dt_prestasi = $this->db->where('id_siswa',$input->id_siswa)->get('tb_prestasi')->result();
                            }
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Prestasi</td>
                                    <td>Peringkat</td>
                                    <td>Tingkat </td>
                                    <td>Tahun</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if (isset($input->id_siswa) ) { 
                                $no=0;foreach ($dt_prestasi as $b ) {
                                 
                            ?>
                                <tr>
                                    <td><?=++$no?></td>
                                    <td><?=$b->nama_prestasi;?></td>
                                    <td><?=$b->peringkat_prestasi;?></td>
                                    <td><?=$b->tingkat_prestasi;?></td>
                                    <td><?=$b->tahun_prestasi?></td>
                                    <td>
                                    <a onclick='return("Yakin Hapus??")' href="<?php echo base_url('siswa/hapusPrestasi/'.$pend.'/'.$b->id_prestasi)?>" >Hapus</a>
                                       
                                    </td>
                                </tr>
                            <?php    
                                }
                                } else {
                                    echo "<tr><td colspan='3'>Data Kosong</td></tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    
                    
                </div>
                <!-- END Toggle Prestasi -->

                <div id="berkas" class="tab-pane fade">
                    <h3>Berkas</h3>
                    
                    <?php
                        echo form_open_multipart($formActionBerkas, 'role="form" class="form-horizontal"');
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            Nama Siswa
                        </label>
                        <div class="col-sm-9">
                            <input type="text"  name="nama" placeholder="" id="form-field-1" value="<?=$input->nama_siswa ?? ''?>" class="form-control">
                            <input type="hidden" value="<?=$input->id_siswa ?? ''; ?>" name="id_siswa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="tgl_upload">
                            Tanggal
                        </label>
                        <div class="col-sm-9">
                            <input type="date"  name="tgl_upload" placeholder="" id="tgl_upload" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_file">
                            Nama Berkas
                        </label>
                        <div class="col-sm-9">
                            <input type="text"  name="nama_file" placeholder="" id="nama_file" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="upload_file">
                            Cari File
                        </label>
                        <div class="col-sm-9">
                            <input type="file" id="upload_file" class="form-control" name="upload_file">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">

                        </label>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                        <div class="col-sm-3">
                            <?php echo anchor('siswa', 'Kembali', array('class' => 'btn btn-warning btn-sm')); ?>
                        </div>
                    </div>

                    </form>

                    <div class="table-responsive">
                        <?php 
                            if (isset($input->id_siswa) ) {
                                $dt_berkas = $this->db->where('id_siswa',$input->id_siswa)->get('tb_berkas_siswa')->result();
                            }
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Tanggal</td>
                                    <td>Nama Berkas</td>
                                    <td>Download</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if (isset($input->id_siswa) ) { 
                                $no=0;foreach ($dt_berkas as $b ) {
                                 
                            ?>
                                <tr>
                                    <td><?=++$no?></td>
                                    <td><?=$b->tgl_upload?></td>
                                    <td><?=$b->nama_file;?></td>
                                    <td>
                                        <a href="<?php echo base_url().'siswa/download/'. $b->upload_file ?>">Download file</a>
                                        <a class="text-danger" onclick='return("Yakin Hapus Berkas??")' href="<?php echo base_url('siswa/hapusBerkas/'.$pend.'/'.$b->id_berkas_siswa)?>">Hapus</a>
                                       
                                    </td>
                                </tr>
                            <?php    
                                }
                                } else {
                                    echo "<tr><td colspan='3'>Data Kosong</td></tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    
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

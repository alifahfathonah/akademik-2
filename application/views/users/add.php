<br>
<br>
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            <?php echo "<p class='text-uppercase text-warning'>".$menu." ".$sub_menu." ".$buttonText."</p>"
                ; 
            ?>
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

            <?php
            echo form_open_multipart($formAction, 'role="form" class="form-horizontal"');
            ?>


            <div class="form-group <?= setValidationStyle('nama_personal') ?>">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA PERSONAL
                </label>
                <div class="col-sm-5">
                    <input type="text" name="nama_personal" placeholder="MASUKAN NAMA PERSONAL LENGKAP" id="form-field-1" class="form-control">
                    <?= setValidationIcon('nama_personal') ?>
                    <?=form_error('nama_personal');?>
                </div>
            </div>

            <img style="float: left;position: absolute;margin-top: -55px;margin-left: 810px;" width="100" class="img-thumbnail img-responsive" src="<?=base_url();?>uploads/user.png" alt="">
            
            
            <div class="form-group row <?= setValidationStyle('jenis_kelamin') ?> ">
                <label for="nama" class="col-sm-2 control-label">Status Kelas</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="L" name="jenis_kelamin" <?php echo (!empty($input->jenis_kelamin) and ($input->jenis_kelamin == 'aktif') ) ? "checked" :"" ;?> >
                                On
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="P" name="jenis_kelamin" <?php echo (!empty($input->status_kelas) and ($input->status_kelas == 'non aktif') ) ? "checked" :"" ;?> >
                                Off
                            </label>
                        </div>
                        
                        <?= setValidationIcon('status_kelas') ?>
                        <?=form_error('status_kelas');?>
                        
                        
                    </div>
            </div>



            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NO HP
                </label>
                <div class="col-sm-9">
                    <input type="text" name="no_hp" placeholder="MASUKAN NO HP" id="form-field-1" class="form-control">
                </div>
            </div>



            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    EMAIL
                </label>
                <div class="col-sm-9">
                    <input type="text" name="nama_lengkap" placeholder="MASUKAN EMAIL" id="form-field-1" class="form-control">
                </div>
            </div>

            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    JABATAN
                </label>
                <div class="col-sm-9">
                    <?php 
                        $options = array(
                            ''         => '--PILIH--',
                            'karyawan'         => 'Karyawan',
                            'kepsek'           => 'Kepala Sekolah',
                            'guru'         => 'Guru',
                    );
                    
                    echo form_dropdown('jabatan', $options, $input->jabatan,['class'=>'form-control']);
                    ?>
                </div>
            </div>
            

            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    USERNAME
                </label>
                <div class="col-sm-9">
                    <input type="text" name="username" placeholder="MASUKAN USERNAME" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    PASSWORD
                </label>
                <div class="col-sm-9">
                    <input type="password" name="password" placeholder="MASUKAN PASSWORD" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    LEVEL
                </label>
                <div class="col-sm-2">
                    <?php
                        $options = array(
                                ''         => '--PILIH--',
                                'admin'         => 'Administrator',
                                'kepsek'           => 'Kepala Sekolah',
                                'panitia'         => 'Panitia',
                                'bendahara'         => 'Bendahara',
                        );
                        
                        echo form_dropdown('level', $options, $input->level,['class'=>'form-control']);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    FOTO
                </label>
                <div class="col-sm-5">
                    <input type="file" name="pas_photo" class="form-control col-sm-">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger  btn-sm"><?=$buttonText;?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('users', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
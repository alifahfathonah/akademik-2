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
                    <input type="text" value="<?=$input->nama_personal?>" name="nama_personal" placeholder="MASUKAN NAMA PERSONAL LENGKAP" id="form-field-1" class="form-control">
                    <?= setValidationIcon('nama_personal') ?>
                    <?=form_error('nama_personal');?>
                </div>
            </div>
            
            <!-- Gambar -->
            <?php if (!empty($input->pas_photo)):
            ?>
            
                <img style="float: left;position: absolute;margin-top: -55px;margin-left: 810px;" width="100" class="img-thumbnail img-responsive" src="<?=base_url('uploads/foto_user/'.$input->pas_photo);?>" alt="">

            <?php else : ?>
            
                <img style="float: left;position: absolute;margin-top: -55px;margin-left: 810px;" width="100" class="img-thumbnail img-responsive" src="<?=base_url('uploads/user.png');?>" alt="">
            <?php endif ?>
            
            
            <div class="form-group row <?= setValidationStyle('jenis_kelamin') ?> ">
                <label for="nama" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="L" name="jenis_kelamin" <?php echo (!empty($input->jenis_kelamin) and ($input->jenis_kelamin == 'L') ) ? "checked" :"" ;?> >
                                Laki-laki
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="P" name="jenis_kelamin" <?php echo (!empty($input->jenis_kelamin) and ($input->jenis_kelamin == 'P') ) ? "checked" :"" ;?> >
                                Perempuan
                            </label>
                        
                        <?= setValidationIcon('jenis_kelamin') ?>
                        <?=form_error('jenis_kelamin');?>
                        </div>
                        
                        
                    </div>
            </div>



            <div class="form-group <?= setValidationStyle('no_hp') ?>">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NO HP
                </label>
                <div class="col-sm-9">
                    <input type="text" name="no_hp" placeholder="MASUKAN NO HP" id="form-field-1" class="form-control" value="<?=$input->no_hp?>">
                    
                    <?= setValidationIcon('no_hp') ?>
                    <?=form_error('no_hp');?>
                </div>
            </div>



            
            <div class="form-group <?= setValidationStyle('email') ?>">
                <label class="col-sm-2 control-label" for="form-field-1">
                    EMAIL
                </label>
                <div class="col-sm-9">
                    <input type="email" value="<?=$input->email;?>" name="email" placeholder="MASUKAN EMAIL" id="form-field-1" class="form-control">
                    <?= setValidationIcon('email') ?>
                    <?=form_error('email');?>
                </div>
            </div>

            
            <div class="form-group <?= setValidationStyle('jabatan') ?>">
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
                    <?= setValidationIcon('jabatan') ?>
                    <?=form_error('jabatan');?>

                    
                </div>
            </div>
            
            
            <div class="form-group row <?= setValidationStyle('status') ?> ">
                <label for="nama" class="col-sm-2 control-label">STATUS</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="aktif" name="status" <?php echo (!empty($input->status) and ($input->status == 'aktif') ) ? "checked" :"" ;?> >
                                On
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="non aktif" name="status" <?php echo (!empty($input->status) and ($input->status == 'non aktif') ) ? "checked" :"" ;?> >
                                Off
                            </label>
                        
                        </div>
                        <?= setValidationIcon('status') ?>
                        <?=form_error('status');?>
                        
                        
                    </div>
            </div>
            
            <div class="form-group <?= setValidationStyle('username') ?>">
                <label class="col-sm-2 control-label" for="username">
                    USERNAME
                </label>
                <div class="col-sm-9">
                    <input type="text" name="username" value="<?=$input->username?>" placeholder="MASUKAN USERNAME" id="username" class="form-control">
                    
                    <?= setValidationIcon('username') ?>
                    <?=form_error('username');?>
                </div>
            </div>
            <div class="form-group <?= setValidationStyle('password') ?>">
                <label class="col-sm-2 control-label" for="password">
                    PASSWORD
                </label>
                <div class="col-sm-9">
                    <input type="password" name="password" value="<?=$input->password;?>" placeholder="MASUKAN PASSWORD" id="password" class="form-control">
                    <?= setValidationIcon('password') ?>
                    <?=form_error('password');?>
                </div>
            </div>
            <div class="form-group <?= setValidationStyle('level') ?>">
                <label class="col-sm-2 control-label" for="level">
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
                        
                        echo form_dropdown('level', $options, $input->level,['class'=>'form-control','id'=>'level']);
                    ?>
                    <?= setValidationIcon('level') ?>
                    <?=form_error('level');?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="pas_photo">
                    FOTO
                </label>
                <div class="col-sm-5">
                    <input type="file" name="pas_photo" id="pas_photo" class="form-control col-sm-">
                    <?= fileFormError('pas_photo', '<p class="text-danger">', '</p>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText;?></button>
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
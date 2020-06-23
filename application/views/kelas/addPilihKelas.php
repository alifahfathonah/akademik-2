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


            <div class="form-group <?= setValidationStyle('nama_kelas') ?>">
                <label class="col-sm-2 control-label" for="nama_kelas">
                    Nama Kelas
                </label>
                <div class="col-sm-9">
                    <?=form_dropdown('nama_kelas',getDropdownList('tb_kelas',['id_kelas','nama_kelas']),$input->nama_kelas,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    <?= setValidationIcon('nama_kelas') ?>
                    <?=form_error('nama_kelas');?>
                </div>
            </div>
            
            
            <div class="form-group <?= setValidationStyle('id_siswa') ?>">
                <label class="col-sm-2 control-label" for="id_siswa">
                    Nama Siswa
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" name="id_siswa" >
                    <?= setValidationIcon('id_siswa') ?>
                    <?=form_error('id_siswa');?>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label" for="id_siswa">
                    Jurusan
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" name="" >
                </div>
            </div>
            
            
            <div class="form-group row <?= setValidationStyle('status_pilih_kelas') ?> ">
                <label for="nama" class="col-sm-2 control-label">Status Kelas</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="aktif" name="status_pilih_kelas" <?php echo (!empty($input->status_pilih_kelas) and ($input->status_pilih_kelas == 'aktif') ) ? "checked" :"" ;?> >
                                On
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="non aktif" name="status_pilih_kelas" <?php echo (!empty($input->status_pilih_kelas) and ($input->status_pilih_kelas == 'non aktif') ) ? "checked" :"" ;?> >
                                Off
                            </label>
                        </div>
                        
                        <?= setValidationIcon('status_pilih_kelas') ?>
                        <?=form_error('status_pilih_kelas');?>
                        
                        
                    </div>
            </div>

            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('gelombang', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
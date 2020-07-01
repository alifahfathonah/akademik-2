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
            <!-- <div class="panel-tools">
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
            </div> -->
        </div>
        <div class="panel-body">

            <?php
            echo form_open_multipart($formAction, 'role="form" class="form-horizontal"');
            ?>


            <!-- <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    ID Pendaftaran
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->id_pendaftaran?>" name="id_pendaftaran" placeholder="" id="id_pendaftaran" class="form-control">
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div> -->
            
            <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    PENDAFTARAN
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_pendaftaran',getDropdownList('tb_pendaftaran',['id_pendaftaran','no_pendaftaran']),$input->id_pendaftaran,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    SISWA
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_pendaftaran',getDropdownList('tb_pendaftaran',['id_pendaftaran','nama_siswa']),$input->id_pendaftaran,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div>
            
            <!-- <div class="form-group <?= setValidationStyle('id_personal') ?>">
                <label class="col-sm-2 control-label" for="id_personal">
                    PERSONAL
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_personal',getDropdownList('tb_personal',['id_personal','nama_personal']),$input->id_personal,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_personal') ?>
                    <?=form_error('id_personal');?>
                </div>
            </div> -->
            
            <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    PILIHAN 1
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->id_pendaftaran?>" name="id_pendaftaran" placeholder="" id="id_pendaftaran" class="form-control">
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    PILIHAN 2
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->id_pendaftaran?>" name="id_pendaftaran" placeholder="" id="id_pendaftaran" class="form-control">
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    PILIHAN 3
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->id_pendaftaran?>" name="id_pendaftaran" placeholder="" id="id_pendaftaran" class="form-control">
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('id_jurusan') ?>">
                <label class="col-sm-2 control-label" for="id_jurusan">
                    DITERIMA JURUSAN
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_jurusan',getDropdownList('tb_jurusan',['id_jurusan','kompetensi_keahlian']),$input->id_jurusan,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_jurusan') ?>
                    <?=form_error('id_jurusan');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('id_jurusan') ?>">
                <label class="col-sm-2 control-label" for="id_jurusan">
                    DiNYATAKAN
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_jurusan',getDropdownList('tb_jurusan',['id_jurusan','kompetensi_keahlian']),$input->id_jurusan,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_jurusan') ?>
                    <?=form_error('id_jurusan');?>
                </div>
            </div>

            <!-- <div class="form-group row <?= setValidationStyle('pil_jur') ?> ">
                <label for="nama" class="col-sm-2 control-label">Dinyatakan</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="aktif" name="status_kelas" <?php echo (!empty($input->status_kelas) and ($input->status_kelas == 'aktif') ) ? "checked" :"" ;?> >
                                On
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="non aktif" name="status_kelas" <?php echo (!empty($input->status_kelas) and ($input->status_kelas == 'non aktif') ) ? "checked" :"" ;?> >
                                Off
                            </label>
                        </div>
                        
                        <?= setValidationIcon('status_kelas') ?>
                        <?=form_error('status_kelas');?>
                        
                        
                    </div>
            </div> -->

            
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
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
        <!--    <div class="panel-tools">
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


            <div class="form-group <?= setValidationStyle('id_gelombang') ?>">
                <label class="col-sm-2 control-label" for="id_gelombang">
                    GELOMBANG
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_gelombang',getDropdownList('tb_gelombang',['id_gelombang','nama_gelombang']),$input->id_gelombang,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    <?= setValidationIcon('id_gelombang') ?>
                    <?=form_error('id_gelombang');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('nama_mapel') ?>">
                <label class="col-sm-2 control-label" for="nama_mapel">
                    NAMA MAPEL
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->nama_mapel;?>" type="text" name="nama_mapel" placeholder="Ketik Nama Mapel" id="nama_mapel" class="form-control">
                    <?= setValidationIcon('nama_mapel') ?>
                    <?=form_error('nama_mapel');?>
                </div>
            </div>
            
            <div class="form-group <?= setValidationStyle('jml_soal') ?>">
                <label class="col-sm-2 control-label" for="jml_soal">
                    JUMLAH SOAL
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->jml_soal;?>" type="text" name="jml_soal" placeholder="Ketik Jumlah Soal" id="jml_soal" class="form-control">
                    <?= setValidationIcon('jml_soal') ?>
                    <?=form_error('jml_soal');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('tampil_soal') ?>">
                <label class="col-sm-2 control-label" for="tampil_soal">
                    TAMPIL SOAL
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->tampil_soal;?>" type="text" name="tampil_soal" placeholder="Ketik Tampil Soal" id="tampil_soal" class="form-control">
                    <?= setValidationIcon('tampil_soal') ?>
                    <?=form_error('tampil_soal');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('bobot_soal') ?>">
                <label class="col-sm-2 control-label" for="bobot_soal">
                    BOBOT SOAL
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->bobot_soal;?>" type="text" name="bobot_soal" placeholder="Ketik Bobot Soal" id="bobot_soal" class="form-control">
                    <?= setValidationIcon('bobot_soal') ?>
                    <?=form_error('bobot_soal');?>
                </div>
            </div>

            <div class="form-group row <?= setValidationStyle('status_soal') ?> ">
                <label for="nama" class="col-sm-2 control-label">STATUS SOAL</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="aktif" name="status_soal" <?php echo (!empty($input->status_soal) and ($input->status_soal == 'aktif') ) ? "checked" :"" ;?> >
                                Aktif
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="non aktif" name="status_soal" <?php echo (!empty($input->status_soal) and ($input->status_soal == 'non aktif') ) ? "checked" :"" ;?> >
                                Tidak Aktif
                            </label>
                        </div>
                        
                        <?= setValidationIcon('status_soal') ?>
                        <?=form_error('status_soal');?>
                        
                        
                    </div>
            </div>

            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('buat_mapel', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
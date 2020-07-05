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


            <div class="form-group <?= setValidationStyle('kkm_ujian') ?>">
                <label class="col-sm-2 control-label" for="kkm_ujian">
                    KKM UJIAN
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?=$input->kkm_ujian?>" name="kkm_ujian" placeholder="Ketik KKM Ujian" id="kkm_ujian" class="form-control">
                    <?= setValidationIcon('kkm_ujian') ?>
                    <?=form_error('kkm_ujian');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('durasi_ujian') ?>">
                <label class="col-sm-2 control-label" for="durasi_ujian">
                    DURASI UJIAN
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?=$input->kkm_ujian?>" name="durasi_ujian" placeholder="Ketik Durasi Ujian" id="durasi_ujian" class="form-control">
                    <?= setValidationIcon('durasi_ujian') ?>
                    <?=form_error('durasi_ujian');?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row <?= setValidationStyle('tgl_buka_ujian') ?> ">
                        <label for="tgl_buka_ujian" class="col-sm-4 control-label">TANGGAL MULAI</label>
                            <div class="col-sm-8">
                                <input type="date" value="<?=$input->tgl_buka_ujian;?>" class="form-control" name="tgl_buka_ujian" placeholder="">
                                
                                <?= setValidationIcon('tgl_buka_ujian') ?>
                                <?=form_error('tgl_buka_ujian');?>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row  <?= setValidationStyle('waktu_buka_ujian') ?> ">
                        <label for="waktu_buka_ujian" class="col-sm-4 control-label">WAKTU MULAI</label>
                            <div class="col-sm-3">
                                <input id="waktu_buka_ujian" type="time" class="form-control" value="<?=$input->waktu_buka_ujian;?>" name="waktu_buka_ujian" placeholder="">
                                            
                                <?= setValidationIcon('waktu_buka_ujian') ?>
                                <?=form_error('waktu_buka_ujian');?>
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row <?= setValidationStyle('tgl_tutup_ujian') ?>">
                        <label for="tgl_tutup_ujian" class="col-sm-4 control-label">TANGGAL AKHIR</label>
                            <div class="col-sm-8">
                                <input type="date" value="<?=$input->tgl_tutup_ujian;?>" class="form-control" name="tgl_tutup_ujian" placeholder="">
                                
                                <?= setValidationIcon('tgl_tutup_ujian') ?>
                                <?=form_error('tgl_tutup_ujian');?>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row <?= setValidationStyle('waktu_tutup_ujian') ?> ">
                        <label for="waktu_tutup_ujian" class="col-sm-4 control-label">WAKTU AKHIR</label>
                            <div class="col-sm-3">
                                <input id="waktu_tutup_ujian" type="time" name="waktu_tutup_ujian" value="<?=$input->waktu_tutup_ujian;?>" placeholder="">
                                            
                                <?= setValidationIcon('waktu_tutup_ujian') ?>
                                <?=form_error('waktu_tutup_ujian');?>
                            </div>
                    </div>
                </div>
            </div>
            
            <!-- <div class="form-group <?= setValidationStyle('id_gelombang') ?>">
                <label class="col-sm-2 control-label" for="id_gelombang">
                    GELOMBANG
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_gelombang',getDropdownList('tb_gelombang',['id_gelombang','nama_gelombang']),$input->id_gelombang,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_gelombang') ?>
                    <?=form_error('id_gelombang');?>
                </div>
            </div> -->
            
            <div class="form-group <?= setValidationStyle('id_mapel') ?>">
                <label class="col-sm-2 control-label" for="id_mapel">
                    NAMA MAPEL
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_mapel',getDropdownList('tb_mapel',['id_mapel','nama_mapel']),$input->id_mapel,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_mapel') ?>
                    <?=form_error('id_mapel');?>
                </div>
            </div>
            
            <div class="form-group row <?= setValidationStyle('status_ujian') ?> ">
                <label for="nama" class="col-sm-2 control-label">STATUS UJIAN</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="aktif" name="status_ujian" <?php echo (!empty($input->status_ujian) and ($input->status_ujian == 'aktif') ) ? "checked" :"" ;?> >
                                AKTIF
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="non aktif" name="status_ujian" <?php echo (!empty($input->status_ujian) and ($input->status_ujian == 'non aktif') ) ? "checked" :"" ;?> >
                                TIDAK AKTIF
                            </label>
                        </div>
                        
                        <?= setValidationIcon('status_ujian') ?>
                        <?=form_error('status_ujian');?>
                    </div>
            </div>

            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('atur_ujian', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
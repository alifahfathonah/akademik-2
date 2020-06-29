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


            <div class="form-group <?= setValidationStyle('nama_gelombang') ?>">
                <label class="col-sm-2 control-label" for="nama_gelombang">
                    Nama Gelombang
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nama_gelombang?>" name="nama_gelombang" placeholder="" id="nama_gelombang" class="form-control">
                    <?= setValidationIcon('nama_gelombang') ?>
                    <?=form_error('nama_gelombang');?>
                </div>
            </div>
            <div class="form-group <?= setValidationStyle('tahun_pelajaran') ?>">
                <label class="col-sm-2 control-label" for="tahun_pelajaran">
                    Tahun Pelajaran
                </label>
                <div class="col-sm-9">
                    <input name="tahun_pelajaran" type="text" value="<?=$input->tahun_pelajaran;?>" placeholder="" id="tahun_pelajaran" class="form-control">
                    
                    <?= setValidationIcon('tahun_pelajaran') ?>
                    <?=form_error('tahun_pelajaran');?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row <?= setValidationStyle('tgl_awal') ?> ">
                        <label for="tgl_awal" class="col-sm-4 control-label">Tanggal Mulai</label>
                            <div class="col-sm-8">
                                <input type="date" value="<?=$input->tgl_awal;?>" class="form-control" name="tgl_awal" placeholder="">
                                
                                <?= setValidationIcon('tgl_awal') ?>
                                <?=form_error('tgl_awal');?>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                
                    <div class="form-group row <?= setValidationStyle('tgl_akhir') ?>">
                        <label for="tgl_akhir" class="col-sm-4 control-label">Tanggal Akhir</label>
                            <div class="col-sm-6">
                                <input type="date" value="<?=$input->tgl_akhir;?>" class="form-control" name="tgl_akhir" placeholder="">
                                
                                <?= setValidationIcon('tgl_akhir') ?>
                                <?=form_error('tgl_akhir');?>
                            </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row  <?= setValidationStyle('waktu_awal') ?> ">
                        <label for="waktu_awal" class="col-sm-4 control-label">Waktu Mulai</label>
                            <div class="col-sm-8">
                                <input id="waktu_awal" type="time" class="form-control" value="<?=$input->waktu_awal;?>" name="waktu_awal" placeholder="">
                                            
                                <?= setValidationIcon('waktu_awal') ?>
                                <?=form_error('waktu_awal');?>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row <?= setValidationStyle('waktu_akhir') ?> ">
                        <label for="waktu_akhir" class="col-sm-4 control-label">Waktu Akhir</label>
                            <div class="col-sm-4">
                                <input id="waktu_akhir" type="time" name="waktu_akhir" value="<?=$input->waktu_akhir;?>" placeholder="">
                                            
                                <?= setValidationIcon('waktu_akhir') ?>
                                <?=form_error('waktu_akhir');?>
                            </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group row <?= setValidationStyle('status') ?> ">
                <label for="nama" class="col-sm-2 control-label">Status</label>
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
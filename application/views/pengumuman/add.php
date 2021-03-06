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


            <div class="form-group <?= setValidationStyle('id_personal') ?>">
                <label class="col-sm-2 control-label" for="id_personal">
                    NAMA PERSONAL
                </label>
                <div class="col-sm-5">
                    <?= form_dropdown('id_personal',getDropdownList('tb_personal',['id_personal','nama_personal']),$input->id_personal,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_personal') ?>
                    <?=form_error('id_personal');?>
                </div>
            </div>
            <div class="form-group <?= setValidationStyle('tgl_pengumuman') ?>">
                <label class="col-sm-2 control-label" for="tgl_pengumuman">
                    TANGGAL
                </label>
                <div class="col-sm-3">
                    <input name="tgl_pengumuman" type="date" value="<?=$input->tgl_pengumuman;?>" placeholder="" id="tgl_pengumuman" class="form-control">
                    
                    <?= setValidationIcon('tgl_pengumuman') ?>
                    <?=form_error('tgl_pengumuman');?>
                </div>
            </div>
            
            <div class="form-group row <?= setValidationStyle('judul_pengumuman') ?> ">
                <label for="judul_pengumuman" class="col-sm-2 control-label">JUDUL</label>
                    <div class="col-sm-8">
                        <input type="text" value="<?=$input->judul_pengumuman;?>" class="form-control" name="judul_pengumuman" placeholder="">
                        
                        <?= setValidationIcon('judul_pengumuman') ?>
                        <?=form_error('judul_pengumuman');?>
                    </div>
            </div>

            <div class="form-group row  <?= setValidationStyle('isi_pengumuman') ?> ">
                <label for="isi_pengumuman" class="col-sm-2 control-label">ISI PENGUMUMAN</label>
                    <div class="col-sm-10">
                        <textarea name="isi_pengumuman" id="isi_pengumuman" cols="30" rows="10"><?=$input->isi_pengumuman;?></textarea>
                        <?= setValidationIcon('isi_pengumuman') ?>
                        <?=form_error('isi_pengumuman');?>
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
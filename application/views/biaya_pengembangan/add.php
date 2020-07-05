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


            <div class="form-group <?= setValidationStyle('nama_pengembangan') ?>">
                <label class="col-sm-2 control-label" for="nama_pengembangan">
                    NAMA
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nama_pengembangan?>" name="nama_pengembangan" placeholder="" id="nama_pengembangan" class="form-control">
                    <?= setValidationIcon('nama_pengembangan') ?>
                    <?=form_error('nama_pengembangan');?>
                </div>
            </div>
            
            <div class="form-group <?= setValidationStyle('biaya_pengembangan') ?>">
                <label class="col-sm-2 control-label" for="biaya_pengembangan">
                    BIAYA
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?=$input->biaya_pengembangan?>" name="biaya_pengembangan" placeholder="" id="biaya_pengembangan" class="form-control">
                    <?= setValidationIcon('biaya_pengembangan') ?>
                    <?=form_error('biaya_pengembangan');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('id_jurusan') ?>">
                <label class="col-sm-2 control-label" for="id_jurusan">
                    JURUSAN
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_jurusan',getDropdownList('tb_jurusan',['id_jurusan','kompetensi_keahlian']),$input->id_jurusan,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_jurusan') ?>
                    <?=form_error('id_jurusan');?>
                </div>
            </div>

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

            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('biaya_pengembangan', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
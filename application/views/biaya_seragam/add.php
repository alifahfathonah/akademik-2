<br>
<br>
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            <?php echo "<p class='text-uppercase text-warning'>".$menu." ".$sub_menu." Tambah </p>"
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


            <div class="form-group <?= setValidationStyle('nama_seragam') ?>">
                <label class="col-sm-2 control-label" for="nama_seragam">
                    NAMA
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nama_seragam?>" name="nama_seragam" placeholder="" id="nama_seragam" class="form-control">
                    <?= setValidationIcon('nama_seragam') ?>
                    <?=form_error('nama_seragam');?>
                </div>
            </div>
            
            <div class="form-group <?= setValidationStyle('biaya_seragam') ?>">
                <label class="col-sm-2 control-label" for="biaya_seragam">
                    BIAYA
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?=$input->biaya_seragam?>" name="biaya_seragam" placeholder="" id="biaya_seragam" class="form-control">
                    <?= setValidationIcon('biaya_seragam') ?>
                    <?=form_error('biaya_seragam');?>
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
                    <?php echo anchor('biaya_seragam', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
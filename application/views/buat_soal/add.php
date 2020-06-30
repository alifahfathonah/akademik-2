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
            
            <!-- <div class="form-group <?= setValidationStyle('nama_mapel') ?>">
                <label class="col-sm-2 control-label" for="nama_mapel">
                    Nama Mapel
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('nama_mapel',getDropdownList('tb_mapel',['id_mapel','nama_mapel']),$input->nama_mapel,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('nama_mapel') ?>
                    <?=form_error('nama_mapel');?>
                </div>
            </div> -->
            
            <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    NO
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nomor?>" name="nomor" placeholder="" id="nomor" class="form-control">
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    NO
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nomor?>" name="nomor" placeholder="" id="nomor" class="form-control">
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    NO
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nomor?>" name="nomor" placeholder="" id="nomor" class="form-control">
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    NO
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nomor?>" name="nomor" placeholder="" id="nomor" class="form-control">
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    NO
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nomor?>" name="nomor" placeholder="" id="nomor" class="form-control">
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    NO
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nomor?>" name="nomor" placeholder="" id="nomor" class="form-control">
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    NO
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nomor?>" name="nomor" placeholder="" id="nomor" class="form-control">
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    NO
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nomor?>" name="nomor" placeholder="" id="nomor" class="form-control">
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
                </div>
            </div>

            <!-- <div class="form-group <?= setValidationStyle('nomor') ?>">
                <label class="col-sm-2 control-label" for="nomor">
                    No
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('nomor',getDropdownList('tb_soal',['nomor','nomor']),$input->nomor,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('nomor') ?>
                    <?=form_error('nomor');?>
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
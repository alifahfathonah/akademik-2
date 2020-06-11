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


            <div class="form-group <?= setValidationStyle('nama_potongan') ?>">
                <label class="col-sm-2 control-label" for="nama_potongan">
                    Nama Potongan
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nama_potongan?>" name="nama_potongan" placeholder="" id="Nama Potongan" class="form-control">
                    <?= setValidationIcon('nama_potongan') ?>
                    <?=form_error('nama_potongan');?>
                </div>
            </div>
            
            
            <div class="form-group <?= setValidationStyle('jenis_potongan') ?>">
                <label class="col-sm-2 control-label" for="jenis_potongan">
                    Jenis Potongan
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->jenis_potongan?>" name="jenis_potongan" placeholder="" id="Jenis potongan" class="form-control">
                    <?= setValidationIcon('jenis_potongan') ?>
                    <?=form_error('jenis_potongan');?>
                </div>
            </div>
            
            <div class="form-group <?= setValidationStyle('biaya_potongan') ?>">
                <label class="col-sm-2 control-label" for="biaya_potongan">
                    Biaya Potongan
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?=$input->biaya_potongan?>" name="biaya_potongan" placeholder="" id="Biaya Potongan" class="form-control">
                    <?= setValidationIcon('biaya_potongan') ?>
                    <?=form_error('biaya_potongan');?>
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
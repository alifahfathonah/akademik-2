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
            echo form_open($formAction, 'role="form" class="form-horizontal"');
            ?>

            <div class="form-group <?= setValidationStyle('nama_singkat') ?>">
                <label class="col-sm-2 control-label" for="nama_singkat">
                    Singkatan Jurusan
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->nama_singkat;?>" type="text" name="nama_singkat" placeholder="Tulis Singkatan Jurusan" id="nama_singkat" class="form-control">
                    <?= setValidationIcon('nama_singkat') ?>
                    <?=form_error('nama_singkat');?>
                </div>
            </div>
            <div class="form-group <?= setValidationStyle('bidang_keahlian') ?>">
                <label class="col-sm-2 control-label" for="bidang_keahlian">
                    Bidang Keahlian
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->bidang_keahlian;?>" type="text" name="bidang_keahlian" placeholder="Tulis Bidang Keahlian" id="bidang_keahlian" class="form-control">
                    <?= setValidationIcon('bidang_keahlian') ?>
                    <?=form_error('bidang_keahlian');?>
                </div>
            </div>
            <div class="form-group <?= setValidationStyle('program_keahlian') ?>">
                <label class="col-sm-2 control-label" for="program_keahlian">
                    Program Keahlian
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->program_keahlian;?>" type="text" name="program_keahlian" placeholder="Tulis Program Keahlian" id="program_keahlian" class="form-control">
                    <?= setValidationIcon('program_keahlian') ?>
                    <?=form_error('program_keahlian');?>
                </div>
            </div>
            <div class="form-group <?= setValidationStyle('kompetensi_keahlian') ?>">
                <label class="col-sm-2 control-label" for="kompetensi_keahlian">
                    Kompetensi Keahlian
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->kompetensi_keahlian?>" type="text" name="kompetensi_keahlian" placeholder="Tulis kompetensi Keahlian" id="kompetensi_keahlian" class="form-control">                    
                    <?= setValidationIcon('kompetensi_keahlian') ?>
                    <?=form_error('kompetensi_keahlian');?>
                </div>
            </div>
            <div class="form-group <?= setValidationStyle('kapasitas') ?>">
                <label class="col-sm-2 control-label" for="kapasitas">
                    Kapasitas
                </label>
                <div class="col-sm-9">
                    <input value="<?=$input->kapasitas?>" type="number" name="kapasitas" placeholder="Tulis Kapasitas" id="kapasitas" class="form-control">                     
                    <?= setValidationIcon('kapasitas') ?>                   
                    <?=form_error('kapasitas');?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText;?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('jurusan', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
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


            <div class="form-group <?= setValidationStyle('nama_wawancara') ?>">
                <label class="col-sm-2 control-label" for="nama_wawancara">
                    NAMA WAWANCARA
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->nama_wawancara?>" name="nama_wawancara" placeholder="Ketik Nama Wawancara" id="nama_wawancara" class="form-control">
                    <?= setValidationIcon('nama_wawancara') ?>
                    <?=form_error('nama_wawancara');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('kriteria_wawancara') ?>">
                <label class="col-sm-2 control-label" for="kriteria_wawancara">
                    KRITERIA WAWANCARA
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->kriteria_wawancara?>" name="kriteria_wawancara" placeholder="Ketik Kriteria Wawancara" id="kriteria_wawancara" class="form-control">
                    <?= setValidationIcon('kriteria_wawancara') ?>
                    <?=form_error('kriteria_wawancara');?>
                </div>
            </div>
            
            <div class="form-group <?= setValidationStyle('ket_wawancara') ?>">
                <label class="col-sm-2 control-label" for="ket_wawancara">
                    KETERANGAN
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->ket_wawancara?>" name="ket_wawancara" placeholder="Ketik Keterangan" id="ket_wawancara" class="form-control">
                    <?= setValidationIcon('ket_wawancara') ?>
                    <?=form_error('ket_wawancara');?>
                </div>
            </div>
            
            <!-- <div class="form-group <?= setValidationStyle('id_personal') ?>">
                <label class="col-sm-2 control-label" for="id_personal">
                    Personal
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_personal',getDropdownList('tb_personal',['id_personal','nama_personal']),$input->id_personal,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_personal') ?>
                    <?=form_error('id_personal');?>
                </div>
            </div>
             -->
            
            <div class="form-group row <?= setValidationStyle('status') ?> ">
                <label for="nama" class="col-sm-2 control-label">STATUS</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="aktif" name="status" <?php echo (!empty($input->status) and ($input->status == 'aktif') ) ? "checked" :"" ;?> >
                                AKTIF
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="non aktif" name="status" <?php echo (!empty($input->status) and ($input->status == 'non aktif') ) ? "checked" :"" ;?> >
                                TIDAK AKTIF
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
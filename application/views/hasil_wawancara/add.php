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


            
            <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    PENDAFTARAN
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_pendaftaran',getDropdownList('tb_pendaftaran',['id_pendaftaran','no_pendaftaran']),$input->id_pendaftaran,['class' => 'form-control id_pendaftaran', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div>

            <div id="result"></div>

            
            
            <div class="form-group <?= setValidationStyle('id_personal') ?>">
                <label class="col-sm-2 control-label" for="id_personal">
                    PERSONAL
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_personal',getDropdownList('tb_personal',['id_personal','nama_personal']),$input->id_personal,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_personal') ?>
                    <?=form_error('id_personal');?>
                </div>
            </div>
            

            <div class="form-group <?= setValidationStyle('pil_jur') ?>">
                <label class="col-sm-2 control-label" for="pil_jur">
                    DITERIMA JURUSAN
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('pil_jur',getDropdownList('tb_jurusan',['id_jurusan','kompetensi_keahlian']),$input->pil_jur,['class' => 'form-control', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('pil_jur') ?>
                    <?=form_error('pil_jur');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('status_wawancara') ?>">
                <label class="col-sm-2 control-label" for="status_wawancara">
                    DiNYATAKAN
                </label>
                <div class="col-sm-9">
                    
                    <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="diterima" name="status_wawancara" <?php echo (!empty($input->status_wawancara) and ($input->status_wawancara == 'diterima') ) ? "checked" :"" ;?> >
                                DITERIMA
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="tidak diterima" name="status_wawancara" <?php echo (!empty($input->status_wawancara) and ($input->status_wawancara == 'tidak diterima') ) ? "checked" :"" ;?> >
                                TIDAK DITERIMA
                            </label>
                        </div>
                        
                        <?= setValidationIcon('status_wawancara') ?>
                        <?=form_error('status_wawancara');?>
                </div>
            </div>

            
            <div class="form-group <?= setValidationStyle('isi_wawancara') ?>">
                <label class="col-sm-2 control-label" for="isi_wawancara">
                    ISI WAWANCARA
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->isi_wawancara;?>" name="isi_wawancara" placeholder="" id="isi_wawancara" class="form-control">
                    
                        <?= setValidationIcon('isi_wawancara') ?>
                        <?=form_error('isi_wawancara');?>
                </div>
            </div>
            
            <div class="form-group <?= setValidationStyle('catatan') ?>">
                <label class="col-sm-2 control-label" for="catatan">
                    CATATAN
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->catatan?>" name="catatan" placeholder="MASUKAN CATATAN" id="catatan" class="form-control">
                    
                        <?= setValidationIcon('catatan') ?>
                        <?=form_error('catatan');?>
                </div>
            </div>


            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('hasil_wawancara', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>

            <div class="form-group ">
                <label class="col-sm-2 control-label" for="id_pencarian">
                    PENCARIAN
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_pencarian',getDropdownList('tb_jurusan',['id_jurusan','kompetensi_keahlian']),'',['class' => 'form-control id_pencarian', 'autofocus' => 'autofocus']);?>
                    
                </div>
            </div>

        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
    <div class="table-responsive">
        <div id="pencarian" class="pencarian">
        </div>
    </div>
</div>


<script>
$(document).ready(function(){

    $('select.id_pendaftaran').change(function(){
        let id = this.value;
        // alert(this.value);
        $.post( "<?=base_url('hasil_wawancara/nama_siswa/')?>"+id, function( data ) {
            $('#result').html(data);
        });
    });
    $('select.id_pencarian').change(function(){
        let id = this.value;
        // alert(this.value);
        $.post( "<?=base_url('hasil_wawancara/pencarian/')?>"+id, function( data ) {
            $('#pencarian').html(data);
        });
    });

})



</script>
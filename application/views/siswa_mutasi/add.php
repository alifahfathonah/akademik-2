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

            <div class="form-group <?= setValidationStyle('tgl_mutasi') ?>">
                <label class="col-sm-2 control-label" for="tgl_mutasi">
                    TANGGAL
                </label>
                <div class="col-sm-3">
                    <input name="tgl_mutasi" type="date" value="<?=$input->tgl_mutasi;?>" placeholder="" id="tgl_mutasi" class="form-control">
                    
                    <?= setValidationIcon('tgl_mutasi') ?>
                    <?=form_error('tgl_mutasi');?>
                </div>
            </div>

            <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    NO PENDAFTARAN
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_pendaftaran',getDropdownListPendaftaranAktif('tb_pendaftaran',['id_pendaftaran','no_pendaftaran']),$input->id_pendaftaran,['class' => 'form-control id_pencarian', 'autofocus' => 'autofocus']);?>
                    
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div>
            <div id="pencarian">
            </div>

            
            <div class="form-group row <?= setValidationStyle('status_mutasi') ?> ">
                <label for="nama" class="col-sm-2 control-label">STATUS MUTASI</label>
                    <div class="col-sm-10">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="pindah" name="status_mutasi" <?php echo (!empty($input->status_mutasi) and ($input->status_mutasi == 'pindah') ) ? "checked" :"" ;?> >
                                PINDAH SWASTA
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey"  value="diterima" name="status_mutasi" <?php echo (!empty($input->status_mutasi) and ($input->status_mutasi == 'diterima') ) ? "checked" :"" ;?> >
                                DITERIMA NEGERI
                            </label>
                        </div>
                        
                        <?= setValidationIcon('status_mutasi') ?>
                        <?=form_error('status_mutasi');?>
                        
                        
                    </div>
            </div>

            <div class="form-group <?= setValidationStyle('isi_mutasi') ?>">
                <label class="col-sm-2 control-label" for="isi_mutasi">
                    ISI MUTASI
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=$input->isi_mutasi?>" name="isi_mutasi" placeholder="" id="isi_mutasi" class="form-control">
                    <?= setValidationIcon('isi_mutasi') ?>
                    <?=form_error('isi_mutasi');?>
                </div>
            </div>

            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('siswa_mutasi', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>



<script>
$(document).ready(function(){
    var gel ;
    var jur ;
    $('select.id_pencarian').change(function(){
        let id = this.value;
        // alert(this.value);
        $.post( "<?=base_url('siswa_mutasi/pencarian/')?>"+id, function( data ) {
            $('#pencarian').html(data);
             gel = $('#data-g').val();
             jur = $('#data-j').val();
        });
    });
    // $('select.jurusan').change(function(){
    //     let id = this.value;
    //     // alert(this.value);
        
    // });

    // $('#myModal').on('shown.bs.modal', function (e) {

    //     $.post( "<?=base_url('transaksi/jurusan/')?>",{ jur: jur, gel: gel }, function( data ) {
    //         $('#data-biaya').html(data);
    //     });
    // })

})
</script>
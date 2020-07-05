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


            <div class="form-group <?= setValidationStyle('no_pembayaran') ?>">
                <label class="col-sm-2 control-label" for="no_pembayaran">
                    No Nota
                </label>
                <div class="col-sm-4">
                    <input type="text" value="<?=$input->no_pembayaran?>" name="no_pembayaran" placeholder="" id="no_pembayaran" class="form-control">
                    <?= setValidationIcon('no_pembayaran') ?>
                    <?=form_error('no_pembayaran');?>
                </div>
                <label class="col-sm-2 control-label" for="tgl_pembayaran">
                    Tanggal
                </label>
                <div class="col-sm-4">
                    <input type="date" value="<?=$input->tgl_pembayaran?>" name="tgl_pembayaran" placeholder="" id="tgl_pembayaran" class="form-control">
                </div>
            </div>
            
            
            <div class="form-group <?= setValidationStyle('id_pendaftaran') ?>">
                <label class="col-sm-2 control-label" for="id_pendaftaran">
                    No Pendaftaran
                </label>
                <div class="col-sm-9">
                    <?= form_dropdown('id_pendaftaran',getDropdownListPendaftaranAktif('tb_pendaftaran',['id_pendaftaran','no_pendaftaran']),$input->id_pendaftaran,['class' => 'form-control id_pencarian', 'autofocus' => 'autofocus']);?>
                    <?= setValidationIcon('id_pendaftaran') ?>
                    <?=form_error('id_pendaftaran');?>
                </div>
            </div>

            <div id="pencarian">
            </div>
            
            <div class="form-group row  ">
                <label class="col-sm-1 control-label" for="form-field-1">

                </label>
                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal" type="button">Tambahkan Pembayaran</button>
            </div>


            
            <div class="form-group">
                <label class="col-sm-1 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger  btn-sm"><?=$buttonText?></button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('transaksi', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cari Potongan</h4>
      </div>
      <div class="modal-body">
        <form>
            <?= form_dropdown('id_potongan',getDropdownList('tb_potongan',['id_potongan','nama_potongan']),'',['class' => 'form-control potongan', 'autofocus' => 'autofocus']);?>
            <div class="lihat-potongan"></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
$(document).ready(function(){
    var gel ;
    var jur ;
    $('select.id_pencarian').change(function(){
        let id = this.value;
        // alert(this.value);
        $.post( "<?=base_url('transaksi/pencarian/')?>"+id, function( data ) {
            $('#pencarian').html(data);
             gel = $('#data-g').val();
             jur = $('#data-j').val();
        });
    });
    $('select.potongan').change(function(){
        let id = this.value;
        // alert(this.value);
        
        $.post( "<?=base_url('transaksi/potongan/')?>"+id,{  }, function( data ) {
            $('.lihat-potongan').html(data);
        });
        
    });

    $('#myModal').on('shown.bs.modal', function (e) {

    })

})
</script>
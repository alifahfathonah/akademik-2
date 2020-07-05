<?php 

$pendaftaran1 = (!empty($pendaftaran->biaya_pendaftaran)) ? $pendaftaran->biaya_pendaftaran : 0 ;
$pengembangan1 = (!empty($pengembangan->biaya_pengembangan)) ? $pengembangan->biaya_pengembangan : 0 ;
$seragam1 = (!empty($seragam->biaya_seragam)) ? $seragam->biaya_seragam : 0 ;
$spp1 = (!empty($spp->biaya_spp)) ? $spp->biaya_spp : 0 ;

$total = $pendaftaran1+$pengembangan1+$seragam1+$spp1;

?>
            <div class="form-group ">
                <label class="control-label" for="nama_siswa">
                    BIAYA PENDAFTARAN
                </label>
                    <input class="form-control" name="biaya_pendaftaran" value="<?=$pendaftaran1?>" readonly value="" id="">
                    <input type="hidden" class="form-control" name="pendaftaran" value="<?=$pendaftaran->id_biaya_pendaftaran?>"   id="">
            </div>

            <div class="form-group">
                <label class="control-label" for="pil_1">
                    BIAYA PENGEMBANGAN
                </label>
                <input type="text" readonly name='biaya_pengembangan' value="<?=$pengembangan1?>"  placeholder="" id="" class="form-control">
                <input type="hidden"  value="<?=$pengembangan->id_pengembangan?>" name="pengembangan"  placeholder="" id="" class="form-control">
                    
            </div>

            <div class="form-group">
                <label class="control-label" for="">
                    BIAYA SERAGAM
                </label>
                    <input type="text" readonly name="biaya_seragam" value="<?=$seragam1?>"  placeholder="" id="" class="form-control">
                    <input type="hidden" name="seragam" value="<?=$seragam->id_seragam?>"  placeholder="" id="" class="form-control">
                
            </div>
            <div class="form-group">
                <label class="control-label" for="">
                    BIAYA SPP
                </label>
                    <input type="text" readonly name="biaya_spp" value="<?=$spp1?>"  placeholder="" id="" class="form-control">
                    <input type="hidden" name="spp"  value="<?=$spp->id_spp?>"  placeholder="" id="" class="form-control">
                
            </div>

            <div class="form-group">
                <label class="control-label" for="">
                    TOTAL BIAYA
                </label>
                    <input type="text" readonly  value="<?=number_format($total,0,',','.')?>"  placeholder="" id="" class="form-control">
                    <input type="hidden" name="total"  value="<?=$total?>"  placeholder="" id="" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Save</button>

    


<?php if ($nama) { ?>
    

            <div class="form-group ">
                <label class="col-sm-2 control-label" for="nama_siswa">
                    SISWA
                </label>
                <div class="col-sm-9">
                    <input class="form-control" disabled value="<?=$nama->nama_siswa;?>" id="nama_siswa">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="pil_1">
                    JURUSAN
                </label>
                <div class="col-sm-9">
                    <input type="text"  disabled value="<?=pilihan_jurusan($nama->pil_jur);?>"  placeholder="" id="pil_1" class="form-control">
                    <input type="hidden" value="<?=$nama->pil_jur?>" id="data-j">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="gelombang">
                    GELOMBANG
                </label>
                <div class="col-sm-9">
                    <input type="text" disabled value="<?=$nama->nama_gelombang;?>"  placeholder="" id="" class="form-control">
                    <input type="hidden" value="<?=$nama->id_gelombang?>" id="data-g">
                </div>
            </div>

            <?php 
                $jur = $nama->pil_jur;
                $gel = $nama->id_gelombang;
                $pendaftaran = $this->db->query("select * from tb_biaya_pendaftaran where id_jurusan = $jur AND id_gelombang = $gel  ")->row();
                $pengembangan = $this->db->query("select * from tb_pengembangan where id_jurusan = $jur AND id_gelombang = $gel  ")->row();
                $seragam = $this->db->query("select * from tb_seragam where id_jurusan = $jur AND id_gelombang = $gel  ")->row();
                $spp = $this->db->query("select * from tb_spp where id_jurusan = $jur AND id_gelombang = $gel  ")->row();

                $pendaftaran1 = (!empty($pendaftaran->biaya_pendaftaran)) ? $pendaftaran->biaya_pendaftaran : 0 ;
                $pengembangan1 = (!empty($pengembangan->biaya_pengembangan)) ? $pengembangan->biaya_pengembangan : 0 ;
                $seragam1 = (!empty($seragam->biaya_seragam)) ? $seragam->biaya_seragam : 0 ;
                $spp1 = (!empty($spp->biaya_spp)) ? $spp->biaya_spp : 0 ;

                $total = $pendaftaran1+$pengembangan1+$seragam1+$spp1;
            ?>


            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th>No</th>
                            <th>Nama</th>
                            <th>Biaya</th>
                            <th class="text-right">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><?=$pendaftaran->nama_pendaftaran ?? 'Kosong';?></td>
                            <td><?=$pendaftaran1;?></td>
                            
                            <td class="text-right"><?=number_format($pendaftaran1,0,',','.');?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?=$pengembangan->nama_pengembangan ?? 'Kosong';?></td>
                            <td><?=$pengembangan1;?></td>
                            
                            <td class="text-right"><?=number_format($pengembangan1,0,',','.');?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><?=$seragam->nama_seragam ?? 'Kosong' ;?></td>
                            <td><?=$seragam1;?></td>
                            
                            <td class="text-right"><?=number_format($seragam1,0,',','.');?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><?=$spp->nama_spp ?? 'Kosong';?></td>
                            <td><?=$spp1;?></td>
                            
                            <td class="text-right"><?=number_format($spp1,0,',','.');?></td>
                        </tr>
                        <tr class="text-right">
                            <td colspan="3">Total Biaya</td>
                            <td><?=number_format($total,0,',','.');?></td>
                        </tr>
                        <tr class="text-right">
                            <td colspan="3">Potongan
                                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal" type="button">{+}potongan</button> 
                            </td>
                            <td><div id="potongan"></div></td>
                        </tr>
                        <tr class="text-right">
                            <td colspan="3">Total Akhir</td>
                            <td><input class='form-control' readonly value=""></td>
                        </tr>
                        <tr class="text-right">
                            <td colspan="3">Dibayarkan</td>
                            <td>
                                <input class="form-control" type="text" value="" >
                            </td>
                        </tr>
                    </tbody>
                </table>
            
            </div>
            

<?php } else {
    echo "<h3>Maaf Belum Lulus Wawancara</h3>";
}
 ?>

 <script>
 $(document).ready(function(){
     

 });
 </script>

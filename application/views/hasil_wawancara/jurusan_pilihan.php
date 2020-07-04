
            <div class="form-group ">
                <label class="col-sm-2 control-label" for="nama_siswa">
                    SISWA
                </label>
                <div class="col-sm-9">
                    <input class="form-control" value="<?=$nama->nama_siswa;?>" id="nama_siswa">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="pil_1">
                    PILIHAN 1
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=pilihan_jurusan($nama->pil_1);?>"  placeholder="" id="pil_1" class="form-control">
                    
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="pil_2">
                    PILIHAN 2
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=pilihan_jurusan($nama->pil_2);?>"  placeholder="" id="pil_2" class="form-control">
                </div>
            </div>


            <div class="form-group ">
                <label class="col-sm-2 control-label" for="pil_3">
                    PILIHAN 3
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?=pilihan_jurusan($nama->pil_3);?>"  placeholder="" id="pil_3" class="form-control">
                </div>
            </div>
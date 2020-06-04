
<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Login - Sistem Informasi Penerimaan Akademik</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <!-- <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/bootstrap/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?=base_url('template');?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url('template');?> /font-awesome/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/fonts/style.css"> -->
        <link rel="stylesheet" href="<?=base_url('template/');?>assets/css/main.css">
        <!-- <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/css/main-responsive.css"> -->
        <link rel="stylesheet" href="<?=base_url('template');?>/assets/css/main-responsive.css">
        <!-- <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/iCheck/skins/all.css"> -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>template/clip-one/bower_components/iCheck/skins/all.css" />
        <!-- <link rel="stylesheet" href="<?=base_url('template');?>/assets/plugin/iCheck/skins/all.css"> -->
        <link rel="stylesheet" href="<?=base_url('template');?>/assets/plugin/bootstrap-colorpalette.css">
        <link rel="stylesheet" href="<?=base_url('template');?>/assets/plugin/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?=base_url('template');?>/assets/css/theme_light.css" type="text/css" id="skin_color">
        <link rel="stylesheet" href="<?=base_url('template');?>/assets/css/print.css" type="text/css" media="print"/>
        <!--[if IE 7]>
        <link rel="stylesheet" href="<?=base_url('template');?>/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body class="login example2">
        <div class="main-login col-sm-8 col-sm-offset-2">
            <div class="logo"> PENDAFTARAN SISWA BARU </div>
                
            <!-- start: REGISTER BOX -->
            <div class="box-login">
                <?=showFlashMessage();?>
                <h3 class="text-warning">
                   Silahkan isi form berikut:
                </h3>
                <br>
                <br>
                <form class="form-register" method="post" action="<?=base_url('pendaftaran/simpan')?>">
                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                    </div>
                    <fieldset>
                        <div class="form-group row">
                                <div class="col-sm-4">
                                        <label for="no_daftar"  style="padding-right: unset;" class="col-sm-5 control-label">No Pendaftaran</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="no_daftar" class="form-control" id="no_daftar" placeholder="No Pendaftaran" value="<?=$no_daftar ?? $input->no_daftar;?>" readonly>
                                        </div>
                                </div>
                                
                                <div class="col-sm-4">
                                        <label for="gelombang" class="col-sm-5 control-label">Gelombang</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="gelombang" class="form-control" id="gelombang" placeholder="Gelombang" value="<?=$gelombang[0]->nama_gelombang ?? $input->gelombang?>" readonly>
                                            <input type="hidden" name="id_gelombang" value="<?=$gelombang[0]->id_gelombang ?? $input->id_gelombang ?>" >
                                        </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="tanggal" class="col-sm-5 control-label">Tanggal</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" value="<?=date('Y-m-d');?>" readonly>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="form-group row has-feedback <?= setValidationStyle('full_name') ?>">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="full_name" id="nama" placeholder="Nama Siswa" value="<?=$input->full_name ?? '';?>">
                                <?= setValidationIcon('full_name') ?>
                                <?= form_error('full_name');?>
                            </div>
                        </div>
                        <div class="form-group row <?= setValidationStyle('gender') ?>">
                            <label for="nama" class="col-sm-2 control-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" class="grey" value="L" name="gender"  <?php echo  set_radio('gender', 'L' , isset($input->gender)  AND $input->gender == 'L'  ? TRUE : FALSE ); ?>>
                                            Laki-laki
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" class="grey"  value="P" name="gender" <?php echo  set_radio('gender','P',  isset($input->gender) AND $input->gender == 'P' ? TRUE : FALSE ); ?>>
                                            Perempuan
                                        </label>
                                    </div>
                                    
                                    <?= setValidationIcon('gender') ?>
                                    <?= form_error('gender');?>
                                </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row <?= setValidationStyle('tempat_lahir') ?>">
                                    <label for="nama" class="col-sm-4 control-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                                            <?= setValidationIcon('tempat_lahir') ?>
                                            <?= form_error('tempat_lahir');?>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            
                                <div class="form-group row <?= setValidationStyle('tanggal_lahir') ?>">
                                    <label for="nama" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" value="<?=$input->tanggal_lahir??''; ?>" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                            <?= setValidationIcon('tanggal_lahir') ?>
                                            <?= form_error('tanggal_lahir');?>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row <?= setValidationStyle('no_hp') ?>">
                            <label for="nama" class="col-sm-2 control-label">No HP</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" value="<?=$input->no_hp??'';?>" name="no_hp" placeholder="No Hp"> 
                                    <?= setValidationIcon('no_hp') ?>
                                    <?= form_error('no_hp');?>
                                </div>
                        </div>
                        <div class="form-group row <?= setValidationStyle('email') ?>">
                            <label for="nama" class="col-sm-2 control-label">E-Mail</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" value="<?=$input->email??'';?>" name="email" placeholder="Email"> 
                                    <?= setValidationIcon('email') ?>
                                    <?= form_error('email');?>
                                </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group row <?= setValidationStyle('agama') ?>">
                                    <label for="nama" class="col-sm-4 control-label"> Agama</label>
                                        <div class="col-sm-8">
                                            
                                                <select id="my-select" class="form-control" name="agama">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Khatolik">Khatolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Khonghucu">Khonghucu</option>
                                                </select> 
                                                <?= setValidationIcon('agama') ?>
                                            <?= form_error('agama');?>
                                        </div>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row <?= setValidationStyle('nik') ?>">
                                    <label for="nama" class="col-sm-2 control-label"> NIK</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="<?=$input->nik??'';?> " name="nik" placeholder="NIK">
                                        <?= setValidationIcon('nik') ?>
                                        <?= form_error('nik');?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row <?= setValidationStyle('asal_sekolah') ?>">
                            <label for="nama" class="col-sm-2 control-label">Asal Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?=$input->asal_sekolah??'';?>" name="asal_sekolah" placeholder="Asal sekolah"> 
                                <?= setValidationIcon('asal_sekolah') ?>
                                    <?= form_error('asal_sekolah');?>
                            </div>
                        </div>
                        <div class="form-group row <?= setValidationStyle('username') ?>">
                            <label for="nama" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?=$nput->username??'';?>" name="username" placeholder="Username"> 
                                <?= setValidationIcon('username') ?>
                                    <?= form_error('username');?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group row <?= setValidationStyle('password') ?>">
                                    <label for="nama" class="col-sm-4 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" value="<?=$input->password??''?>" id="password" name="password" placeholder="Password"> 
                                        <?= setValidationIcon('password') ?>
                                        <?= form_error('password');?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row  <?= setValidationStyle('password_again') ?>">
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control" value="<?=$input->password_again??'';?>" name="password_again" placeholder="Ulangi Password">
                                        <?= setValidationIcon('password_again') ?>
                                        <?= form_error('password_again');?>
                                    </div>
                                </div>
                            </div>

                        
                        </div>

                        <fieldset>
                            <legend class="text-left" style="font-size:16px;">Pilihan Jurusan</legend>
                            <div class="form-group row <?= setValidationStyle('pilihan1') ?>"  >
                                <label for="nama" class="col-sm-2 control-label">Pilihan 1</label>
                                <div class="col-sm-10">
                                    <?= form_dropdown('pilihan1', getDropdownList('tb_jurusan',['id_jurusan','nama_singkat']), $input->pilihan1?? '', ['class' => 'form-control', 'autofocus' => 'autofocus']) ?> 
                                        <?= setValidationIcon('pilihan1') ?>
                                        <?= form_error('pilihan1');?>
                                </div>
                            </div>
                            <div class="form-group row <?= setValidationStyle('pilihan2') ?>" >
                                <label for="nama" class="col-sm-2 control-label">Pilihan 2</label>
                                <div class="col-sm-10">
                                    <?= form_dropdown('pilihan2', getDropdownList('tb_jurusan',['id_jurusan','nama_singkat']),$input->pilihan2?? '', ['class' => 'form-control', 'autofocus' => 'autofocus']) ?>
                                        <?= setValidationIcon('pilihan2') ?>
                                        <?= form_error('pilihan2');?>
                                </div>
                            </div>
                            <div class="form-group row <?= setValidationStyle('pilihan3') ?>" >
                                <label for="nama" class="col-sm-2 control-label">Pilihan 3</label>
                                <div class="col-sm-10">
                                    <?= form_dropdown('pilihan3', getDropdownList('tb_jurusan',['id_jurusan','nama_singkat']), $input->pilihan3?? '', ['class' => 'form-control', 'autofocus' => 'autofocus']) ?>
                                        <?= setValidationIcon('pilihan3') ?>
                                        <?= form_error('pilihan3');?>
                                </div>
                            </div>
                        </fieldset>
                        
                        
                        <div class="form-actions">
                            <a class="btn btn-light-grey go-back" href="<?=base_url();?>">
                                <i class="fa fa-circle-arrow-left"></i> Back
                            </a>
                            <button type="submit" class="btn btn-bricky pull-right">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- end: REGISTER BOX -->
            <!-- start: COPYRIGHT -->
            <div class="copyright">
                2020 &copy; skindra corporate.
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/respond.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/excanvas.min.js"></script>
        <script type="text/javascript" src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
        <!--<![endif]-->
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/blockUI/jquery.blockUI.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/iCheck/jquery.icheck.min.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/less/less-1.5.0.min.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/js/main.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="<?php echo base_url()?>template/clip-one/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="<?php echo base_url()?>template/clip-one/assets/js/login.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                Main.init();
                Login.init();
            });
        </script>
    </body>
    <!-- end: BODY -->
</html>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <title>SISFO AKADEMIK</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="Responsive Admin Template build with Twitter Bootstrap and jQuery" name="description" />
        <meta content="ClipTheme" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />
        <link type="text/css" rel="stylesheet" href="<?=base_url('template');?>/bower_components/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=base_url('template');?> /font-awesome/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?=base_url('template');?>/assets/fonts/clip-font.min.css" />
        <link type="text/css" rel="stylesheet" href="<?=base_url('template');?>/bower_components/iCheck/skins/all.css" />
        <link type="text/css" rel="stylesheet" href="<?=base_url('template');?>/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />
        <link type="text/css" rel="stylesheet" href="<?=base_url('template');?>/bower_components/sweetalert/dist/sweetalert.css" />
        <link type="text/css" rel="stylesheet" href="<?=base_url('template');?>/assets/css/main.min.css" />
        <link type="text/css" rel="stylesheet" href="<?=base_url('template');?>/assets/css/main-responsive.min.css" />
        <link type="text/css" rel="stylesheet" media="print" href="<?=base_url('template');?>/assets/css/print.min.css" />
        <link type="text/css" rel="stylesheet" id="skin_color" href="<?=base_url('template');?>/assets/css/theme/light.min.css" />
        <script src="<?=base_url('template');?>/jquery.min.js"></script>
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <link href="<?=base_url('template');?>/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>

    <body>

        <!-- start: HEADER -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <!-- start: TOP NAVIGATION CONTAINER -->
            <div class="container">
                <div class="navbar-header">
                    <!-- start: RESPONSIVE MENU TOGGLER -->
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="clip-list-2"></span>
                    </button>
                    <!-- end: RESPONSIVE MENU TOGGLER -->
                    <!-- start: LOGO -->
                    <a class="navbar-brand" href="index.html">
                        SMK MUH 3 KARANGANYAR
                    </a>
                    <!-- end: LOGO -->
                </div>
                <div class="navbar-tools">
                    <!-- start: TOP NAVIGATION MENU -->
                    <ul class="nav navbar-right">
                        <!-- end: MESSAGE DROPDOWN -->
                        <!-- start: USER DROPDOWN -->
                        <li class="dropdown current-user">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                                <img width='35' src="<?=base_url('uploads/user.png');?>" class="circle-img" alt="">
                                <span class="username"><?php echo $this->session->userdata('username') ?></span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user" aria-hidden="true"></i> &nbsp;My Profile
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="utility_lock_screen.html">
                                        <i class="clip-locked"></i> &nbsp;Lock Screen
                                    </a>
                                </li>
                                <li>

                                    <?php
                                    echo anchor('auth/logout', '<i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;Log Out');
                                    ?>

                                </li>
                            </ul>
                        </li>
                        <!-- end: USER DROPDOWN -->
                    </ul>
                    <!-- end: TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- end: TOP NAVIGATION CONTAINER -->
        </div>
        <!-- end: HEADER -->
        <!-- start: MAIN CONTAINER -->
        <div class="main-container">
            <div class="navbar-content">
                <!-- start: SIDEBAR -->
                <div class="main-navigation navbar-collapse collapse">
                    <!-- start: MAIN MENU TOGGLER BUTTON -->
                    <div class="navigation-toggler">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>  
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <!-- end: MAIN MENU TOGGLER BUTTON -->
                    <!-- start: MAIN NAVIGATION MENU -->
                    <ul class="main-navigation-menu">
                        <?php if ($level == 'siswa') { ?>
                            <li class="">
                                <a href="#" class="text-center" style="font-size: 1.5em;background-color: #d7f78bc4;font-weight: 600;" >
                                    <span class="title">
                                    Siswa
                                    </span>
                                </a>
                            </li>
                            <li class="active"><a href="<?php echo base_url() ?>/auth/logout"><i class="fa fa-tachometer"></i><span class="title">Dashboard</a></li>
                            <li><a href="<?php echo base_url() ?>/auth/logout"><i class="fa fa-user-circle"></i><span class="title">Profile</a></li>
                            <li><a href="<?php echo base_url() ?>/auth/logout"><i class="fa fa-book"></i><span class="title">Ujian Akademik</a></li>
                            <li><a href="<?php echo base_url() ?>/auth/logout"><i class="fa fa-file-text-o"></i><span class="title">Hasil Seleksi</a></li>
                            <li><a href="<?php echo base_url() ?>/auth/logout"><i class="fa fa-credit-card"></i><span class="title">Pembayaran</a></li>
                        <?php } ?>
                        <!-- background-color: #8bf79cc4;
font-weight: 600; -->
                        <?php $tabel = $this->session->userdata('tabel'); if ($tabel == 'personal') { 
                            
                            if ($level == 'admin') {
                                $level_login = 'Administrator';
                            } elseif ($level == 'kepsek') {
                                $level_login = 'Kepala Sekolah';
                            } elseif ($level == 'bendahara') {
                                $level_login = 'Bendahara';
                            } elseif ($level == 'panitia') {
                                $level_login = 'Personal';
                            } else {
                                $level_login = '';
                            }    
                        ?>
                            
                            <?php if ($level == 'admin') {
                                $this->load->view('navigation_menu/admin');
                            } elseif ($level == 'panitia') {
                                $this->load->view('navigation_menu/panitia');
                            } elseif ($level == 'kepsek') {
                                $this->load->view('navigation_menu/kepsek');
                            
                            } elseif ($level == 'bendahara') {
                                $this->load->view('navigation_menu/bendahara');
                            }
                             ?>

                        <?php } ?>
                        
                        <li class="active_open"><a href="<?php echo base_url() ?>/auth/logout"><i class="fa fa-sign-out"></i><span class="title">LOGOUT</span></a></li>
                        

                    </ul>
                    <!-- end: MAIN NAVIGATION MENU -->
                </div>
                <!-- end: SIDEBAR -->
            </div>

            <!-- start: PAGE -->
            <div class="main-content">
                <!-- start: PANEL CONFIGURATION MODAL FORM -->
                <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title">Panel Configuration</h4>
                            </div>
                            <div class="modal-body">
                                Here will be a configuration form
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Save changes
                                </button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- end: SPANEL CONFIGURATION MODAL FORM -->
                <div class="container">
                    <!-- start: PAGE HEADER -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- start: PAGE TITLE & BREADCRUMB -->
                            <ol class="breadcrumb">
                                <?=$heading;?>
                                <li class="search-box">
                                    <form class="sidebar-search">
                                        <div class="form-group">
                                            <input type="text" placeholder="Start Searching...">
                                            <button class="submit">
                                                <i class="clip-search-3"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                            </ol>
                            <!-- end: PAGE TITLE & BREADCRUMB -->
                        </div>
                    </div>
                    <!-- end: PAGE HEADER -->
                    <!-- start: PAGE CONTENT -->
                    <div class="row">

                        <?php echo $contents; ?>

                        <!-- end: PAGE CONTENT-->
                    </div>
                </div>
                <!-- end: PAGE -->
            </div>
            <!-- end: MAIN CONTAINER -->
            <!-- start: FOOTER -->
            <div class="footer">
                <div class=" text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; clip-one by cliptheme.
                </div>
                <div class="" style="position: absolute;
margin-top: -24px;
margin-left: 1282px;">
                    <span class="go-top"><i class="clip-chevron-up"></i></span>
                </div>
            </div>
            <!-- end: FOOTER -->
            <div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title">Event Management</h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                                Close
                            </button>
                            <button type="button" class="btn btn-danger remove-event no-display">
                                <i class='fa fa-trash-o'></i> Delete Event
                            </button>
                            <button type='submit' class='btn btn-success save-event'>
                                <i class='fa fa-check'></i> Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start: MAIN JAVASCRIPTS -->
            <!--[if lt IE 9]>
                <script src="<?=base_url('template');?>/bower_components/respond/dest/respond.min.js"></script>
                <script src="<?=base_url('template');?>/bower_components/flotjs/excanvas.min.js"></script>
                <script src="<?=base_url('template');?>/bower_components/jquery-1.x/dist/jquery.min.js"></script>
                <![endif]-->
            <!--[if gte IE 9]><!-->

            <script type="text/javascript" src="<?=base_url('template');?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?=base_url('template');?>/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
            <script type="text/javascript" src="<?=base_url('template');?>/bower_components/blockUI/jquery.blockUI.js"></script>
            <script type="text/javascript" src="<?=base_url('template');?>/bower_components/iCheck/icheck.min.js"></script>
            <script type="text/javascript" src="<?=base_url('template');?>/bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
            <script type="text/javascript" src="<?=base_url('template');?>/bower_components/jquery.cookie/jquery.cookie.js"></script>
            <script type="text/javascript" src="<?=base_url('template');?>/bower_components/sweetalert/dist/sweetalert.min.js"></script>
            <script type="text/javascript" src="<?=base_url('template');?>/assets/js/min/main.min.js"></script>
            <!-- end: MAIN JAVASCRIPTS -->
            <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
            <!-- <script src="<?=base_url('template');?>/bower_components/flotjs/jquery.flot.js"></script> -->
            <script src="<?=base_url('template');?>/bower_components/flotjs/jquery.flot.min.js"></script>

            <script src="<?=base_url('template');?>/bower_components/flotjs/jquery.flot.pie.js"></script>
            <script src="<?=base_url('template');?>/bower_components/flotjs/jquery.flot.resize.js"></script>
            <script src="<?=base_url('template');?>/assets/plugin/jquery.sparkline.min.js"></script>
            <script src="<?=base_url('template');?>/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
            <script src="<?=base_url('template');?>/bower_components/jqueryui-touch-punch/jquery.ui.touch-punch.min.js"></script>
            <script src="<?=base_url('template');?>/bower_components/moment/min/moment.min.js"></script>
            <script src="<?=base_url('template');?>/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
            <script src="<?=base_url('template');?>/assets/js/min/index.min.js"></script>
            <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

            <script>
                jQuery(document).ready(function() {
                    Main.init();
                    Index.init();
                });

                /* Menu */
                
            <?php 
    
            if ( isset($menu) ) { ?>
                $('#<?=$menu?>').addClass("active open");
            <?php 
            }
                if (isset($sub_menu)) {
                    echo "$('#$sub_menu').addClass('active')";
                }
            

            ?>
            </script>


    </body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png'?>" sizes="16x16" href="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>">
    <title>Hotelu - Hotel Management System</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'/assets/bootstrap/dist/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url().'/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css'?>" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url().'/assets/plugins/bower_components/toast-master/css/jquery.toast.css'?>" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url().'/assets/plugins/bower_components/morrisjs/morris.css'?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url().'/assets/plugins/bower_components/chartist-js/dist/chartist.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'/assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css'?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url().'/assets/css/animate.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'/assets/css/style.css'?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url().'/assets/css/colors/default.css'?>" id="theme" rel="stylesheet">
    <!-- my custom CSS -->
    <link href="<?php echo base_url().'/assets/css/admin-style.css'?>" id="theme" rel="stylesheet">

    <!-- SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.min.css"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <?php if($this->session->flashdata('admin') != ''){
        echo '<script> swal("Welcome to Admin Page!") </script>';
    }?>

    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is light logo icon--><img src="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>" alt="home" class="admin-logo"/>
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is light logo text--><img src="<?php echo base_url().'/assets/plugins/images/admin-text-dark.png'?>" alt="home" class="light-logo"/>
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" role="button" data-toggle="dropdown"> 
                            <img src="<?php echo base_url().'/assets/plugins/images/users/varun.jpg'?>" alt="user-img" width="36" class="img-circle">
                            <b class="hidden-xs">AdityaEM</b>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('C_Akun')?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo site_url('MDashboard_C')?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('MKamar_C')?>" class="waves-effect"><i class="fa fa-building fa-fw" aria-hidden="true"></i>Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('MStaff_C')?>" class="waves-effect"><i class="fa fa-group fa-fw" aria-hidden="true"></i>Staff</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('MTamu_C')?>" class="waves-effect"><i class="fa fa-male fa-fw" aria-hidden="true"></i>Tamu</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('MTransaksi_C')?>" class="waves-effect"><i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i>Transaksi</a>
                    </li>
                    <li>
                        <a href="aaa" class="waves-effect"><i class="fa fa-spin fa-cog fa-fw" aria-hidden="true"></i>Pengaturan</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Jumlah Pengunjung</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">1350</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Akses Page</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Pengunjung Terdaftar</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">456</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Grafik Transaksi</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-info"></i>Online</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Offline</h5> </li>
                            </ul>
                            <div id="ct-visits" style="height: 405px;"></div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>November 2018</option>
                                    <option>Oktober 2018</option>
                                    <option>September 2018</option>
                                    <option>Agustus 2018</option>
                                    <option>July 2018</option>
                                </select>
                            </div>
                            <h3 class="box-title">Transaksi Terbaru</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NAME</th>
                                            <th>TIPE</th>
                                            <th>STATUS</th>
                                            <th>TANGGAL</th>
                                            <th>HARGA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Amadia</td>
                                            <td class="txt-oflo">Deluxe</td>
                                            <td class="text-success">Lunas</td>
                                            <td class="txt-oflo">2018-11-24</td>
                                            <td><span class="text-success">Rp 150000</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Melati</td>
                                            <td class="txt-oflo">Family</td>
                                            <td class="text-info">Dipesan</td>
                                            <td class="txt-oflo">2018-11-27</td>
                                            <td><span class="text-info">Rp 235000</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Amaryllis</td>
                                            <td class="txt-oflo">Suite</td>
                                            <td class="text-success">Lunas</td>
                                            <td class="txt-oflo">2018-11-24</td>
                                            <td><span class="text-success">Rp 750000</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Camellia</td>
                                            <td class="txt-oflo">Standard</td>
                                            <td class="text-danger">Batal</td>
                                            <td class="txt-oflo">2018-11-22</td>
                                            <td><span class="text-danger">Rp 300000</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">Marigold</td>
                                            <td class="txt-oflo">Family</td>
                                            <td class="text-success">Lunas</td>
                                            <td class="txt-oflo">2018-11-21</td>
                                            <td><span class="text-success">Rp 165000</span></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">Phlox</td>
                                            <td class="txt-oflo">Deluxe</td>
                                            <td class="text-info">Dipesan</td>
                                            <td class="txt-oflo">2018-11-14</td>
                                            <td><span class="text-info">Rp 330000</span></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">Primrose</td>
                                            <td class="txt-oflo">Suite</td>
                                            <td class="text-danger">Batal</td>
                                            <td class="txt-oflo">2018-11-09</td>
                                            <td><span class="text-danger">Rp 150000</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Comments</h3>
                            <div class="comment-center p-t-10">
                                <div class="comment-body">
                                    <div class="user-img"> <img src="<?php echo base_url().'/assets/plugins/images/users/pawandeep.jpg'?>" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5><span class="time">10:20 AM   20  may 2016</span>
                                        <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> <a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Approve</a><a href="javacript:void(0)" class="btn-rounded btn btn-default btn-outline"><i class="ti-close text-danger m-r-5"></i> Reject</a>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <div class="user-img"> <img src="<?php echo base_url().'/assets/plugins/images/users/sonu.jpg'?>" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5><span class="time">10:20 AM   20  may 2016</span>
                                        <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span>
                                    </div>
                                </div>
                                <div class="comment-body b-none">
                                    <div class="user-img"> <img src="<?php echo base_url().'/assets/plugins/images/users/arijit.jpg'?>" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit singh</h5><span class="time">10:20 AM   20  may 2016</span>
                                        <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        CHAT LISTING
                                    </div>
                                    <div class="panel-body">
                                        <ul class="chatonline">
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url().'/assets/plugins/images/users/varun.jpg'?>" alt="user-img" class="img-circle"> <span>Eri Simanjuntak<small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url().'/assets/plugins/images/users/genu.jpg'?>" alt="user-img" class="img-circle"> <span>Budi Dila Sibutar-butar<small class="text-warning">Away</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url().'/assets/plugins/images/users/ritesh.jpg'?>" alt="user-img" class="img-circle"> <span>Fredli Harahap<small class="text-danger">Busy</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url().'/assets/plugins/images/users/arijit.jpg'?>" alt="user-img" class="img-circle"> <span>Kevin Dio Zebua<small class="text-muted">Offline</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url().'/assets/plugins/images/users/govinda.jpg'?>" alt="user-img" class="img-circle"> <span>Rinanta Febby<small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url().'/assets/plugins/images/users/hritik.jpg'?>" alt="user-img" class="img-circle"> <span>Jean Dalimunthe<small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url().'/assets/plugins/images/users/varun.jpg'?>" alt="user-img" class="img-circle"> <span>Diandra Mendrofa<small class="text-success">online</small></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'/assets/plugins/bower_components/jquery/dist/jquery.min.js'?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'/assets/bootstrap/dist/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'/assets/bootstrap/bootstrap.min.js'?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js'?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url().'/assets/js/jquery.slimscroll.js'?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'/assets/js/waves.js'?>"></script>
    <!--Counter js -->
    <script src="<?php echo base_url().'/assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js'?>"></script>
    <script src="<?php echo base_url().'/assets/plugins/bower_components/counterup/jquery.counterup.min.js'?>"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url().'/assets/plugins/bower_components/chartist-js/dist/chartist.min.js'?>"></script>
    <script src="<?php echo base_url().'/assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js'?>"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url().'/assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js'?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'/assets/js/custom.min.js'?>"></script>
    <script src="<?php echo base_url().'/assets/js/dashboard1.js'?>"></script>
    <script src="<?php echo base_url().'/assets/plugins/bower_components/toast-master/js/jquery.toast.js'?>"></script>
</body>

</html>

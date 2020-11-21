<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/6f8449c327.js"></script>
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-heart"></i> <span>SI SMK</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png"
                                alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Roy</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Menu Utama </a></li>
                                <li><a><i class="fa fa-database"></i>Sumber Data<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('landing') }}">Informasi Sekolah</a></li>
                                        <li><a href="{{ route('landing') }}">Data Guru & Karyawan</a></li>
                                        <li><a href="{{ route('kelas.index') }}">Data Kelas & Jurusan</a></li>
                                        <li><a href="{{ route('rombel.index') }}">Data Rombel</a></li>
                                        <li><a href="{{ route('landing') }}">Data Siswa</a></li>
                                        <li><a href="{{ route('landing') }}">Data Lainnya</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i>CBT Panel<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('landing') }}">Dashboard CBT</a></li>
                                        <li><a href="{{ route('landing') }}">Mata Pelajaran</a></li>
                                        <li><a href="{{ route('landing') }}">Bank Soal</a></li>
                                        <li><a href="{{ route('landing') }}">Pengaturan Ujian</a></li>
                                        <li><a href="{{ route('landing') }}">Set Waktu</a></li>
                                        <li><a href="{{ route('landing') }}">Reset Login Peserta</a></li>
                                        <li><a href="{{ route('landing') }}">Form Cetak</a></li>
                                        <li><a href="{{ route('landing') }}">Analisa hasil ujian</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-money"></i>Pembiayaan<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('landing') }}">Dashboard Pembiayaan</a></li>
                                        <li><a href="{{ route('landing') }}">Pemasukan</a></li>
                                        <li><a href="{{ route('landing') }}">Pengeluaran</a></li>
                                        <li><a href="{{ route('landing') }}">SPP</a></li>
                                        <li><a href="{{ route('landing') }}">Pembiayaan Lain</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-fire"></i>E -Voting<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('landing') }}">Dashboard E - Voting</a></li>
                                        <li><a href="{{ route('landing') }}">Data Pemilih</a></li>
                                        <li><a href="{{ route('landing') }}">Manajemen Kandidat</a></li>
                                        <li><a href="{{ route('landing') }}">Pengaturan</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i>PPDB Online<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('landing') }}">Dashboard PPDB</a></li>
                                        <li><a href="{{ route('landing') }}">Pengaturan</a></li>
                                        <li><a href="{{ route('landing') }}">Gelombang Pendaftaran</a></li>
                                        <li><a href="{{ route('landing') }}">Proses Seleksi</a></li>
                                        <li><a href="{{ route('landing') }}">Pendaftar Diterima</a></li>
                                        <li><a href="{{ route('landing') }}">Pendaftar Tidak Diterima</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-wrench"></i>Lainnya<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('roleuser.index') }}">Manajemen User</a></li>
                                        <li><a href="{{ route('landing') }}">Backup Database</a></li>
                                        <li><a href="{{ route('landing') }}">Kosongkan Table</a></li>
                                        <li><a href="{{ route('landing') }}">Informasi Tambahan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png"
                                        alt="">Roy
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->

            @yield('content')
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-left">
                    <p>Sistem Informasi Sekolah V.0.0.1 <strong>Made with <i class="fa fa-heart"></i> by:
                            Roynaldi</strong></p>
                </div>
                <div class="pull-right">
                    <p>Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a></p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    @yield('js')
    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js')}} -->
    <script src="{{ asset('vendors/Chart.js') }}/dist/Chart.min.js')}}"></script>
    <!-- gauge.js')}} -->
    <script src="{{ asset('vendors/gauge.js') }}/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    @yield('script')
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js') }}"></script>

    @include('sweetalert::alert')
</body>

</html>

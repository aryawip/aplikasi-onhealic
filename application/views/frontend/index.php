<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Medical Template">
    <meta name="keywords" content="Medical, medihere, Doctor, HTML5, Bootstrap, Popular, custom, clinic, health-care, template, theme" />
    <meta name="author" content="Mostafiz">
    <!-- Favicon -->
    <link rel="icon" href="../onhealic/assets/images/logo-onhealic.png">
    <title>On-Healic | Online Health Clinic</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../onhealic/assets/css/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../onhealic/assets/css/bootstrap.min.css">
    <!-- preloader css -->
    <link rel="stylesheet" href="../onhealic/assets/css/introLoader.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="../onhealic/assets/css/animate.css" type="text/css" />
    <!-- owl carousel styles -->
    <link rel="stylesheet" href="../onhealic/assets/css/owl.carousel.css" type="text/<ca>#</ca>ss" />
    <!-- date picker css -->
    <link rel="stylesheet" href="../onhealic/assets/css/datepicker.css">
    <!-- main style -->
    <link rel="stylesheet" href="../onhealic/assets/css/style.css">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' rel='stylesheet' type='text/css'>
    <!-- modernizr -->
    <script src="../onhealic/assets/js/modernizr.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Document Wrapper
    ============================================= -->
    <main id="wrapper">

        <!-- // Preloader markup -->
        <div id="element" class="introLoading"></div>

        <!-- Header
        ============================================= -->
        <header id="header" class="navbar-fixed-top">
            <div id="header-wrap">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo ============================================= -->
                                <div id="logo">
                                    <a href="<?php echo base_url('home')?>" class="medihere-logo"><img src="../onhealic/assets/images/onhealic2.jpg" alt="OnHealic Logo" title="On-Healic"></a>
                                </div>
                                <!-- #logo end -->
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <!-- unordered list starts here -->
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?php echo base_url('home')?>">Home</a></li>
                                    <li><a href="<?php echo base_url('klinikp')?>">Klinik</a></li>
                                    <li class="dropdown">
                                        <a>Layanan</a>
                                         <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url('layanan')?>">Ambil No Antrian</a></li>
                                            <li><a href="<?php echo base_url('infoantrian')?>">Informasi Antrian</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url('contact')?>">Tentang Kami</a></li> <!-- form dalam oontact us bisa digunakan untuk form pengambilan nomor antrian -->
                                    <li><a href="<?php echo base_url('login')?>">Admin</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </header>
        <!-- #header end -->

        <!--  slider section-->
        <section class="slider" id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../onhealic/assets/images/slide.jpg" alt="#" />
                        <div class="carousel-caption">
                            <h1 class="animated rotateInUpRight">Selamat Datang di On-Healic!</h1>
                            <br>
                            <p class="animated bounceInDown">On-Healic dapat membantu anda untuk mengambil nomor antrian dengan mudah serta anda dapat mengetahui informasi antrian </p>
                            <!-- <a class="animated tada" href="#">read more</a> -->
                        </div>
                    </div>
                    <div class="item">
                        <img src="../onhealic/assets/images/doctor.jpg" alt="#" />
                        <div class="carousel-caption">
                            <h1 class="animated bounceInLeft">Layanan Kami</h1>
                            <br>
                            <p class="animated bounceInRight">Mengambil nomor antrian rumah sakit tanpa harus datang terlebih dahulu. Ambil nomor antrian anda di bagian layanan dan dapatkan infromasi antrian anda di bagian informasi antrian</p>
                            <!-- <a class="animated bounceInUp" href="#">read more</a> -->
                        </div>
                    </div>
                    <div class="item">
                        <img src="../onhealic/assets/images/doctor3.jpg" alt="#" />
                        <div class="carousel-caption">
                            <h1 class="animated lightSpeedIn">Klinik</h1>
                            <br>
                            <p class="animated slideInDown">Untuk mengetahui informasi mengenai klinik dan jadwal dokter bisa dilihat di bagian klinik. </p>
                            <!-- <a class="animated rotateIn" href="#">read more</a> -->
                        </div>
                    </div>
                    <div class="item">
                        <img src="../onhealic/assets/images/doctor22.jpg" alt="#" />
                        <div class="carousel-caption">
                            <h1 class="animated zoomIn">Tentang Kami</h1>
                            <br>
                            <p class="animated rollIn">Untuk informasi lebih lanjut silahkan menghubungi kontak yang tertera di bagian tentang kami dan silahkan beri masukan untuk kami.</p>
                            <!-- <a class="animated zoomInUp" href="#">read more</a> -->
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" area-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right" area-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- slider ends -->

    <!-- Jquery and javascript files -->
    <script type="text/javascript" src="../onhealic/assets/js/jquery-2.1.1.js"></script>
    <!-- date picker js -->
    <script type="text/javascript" src="../onhealic/assets/js/datepicker.js"></script>
    <!-- bootstrap 3.3.6 js -->
    <script type="text/javascript" src="../onhealic/assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js-->
    <script type="text/javascript" src="../onhealic/assets/js/owl.carousel.js"></script>
    <!-- smooth scroll js -->
    <script type="text/javascript" src="../onhealic/assets/js/smoothscroll.js"></script>
    <!-- preloader js -->
    <script type="text/javascript" src="../onhealic/assets/js/jquery.introLoader.pack.min.js"></script>
    <!-- custom scripts -->
    <script type="text/javascript" src="../onhealic/assets/js/script.js"></script>
</body>

</html>

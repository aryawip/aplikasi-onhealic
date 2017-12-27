<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Medical Template">
    <meta name="keywords" content="Medical, medihere, Doctor, HTML5, Bootstrap, Popular, custom, clinic, health-care, template, theme" />
    <meta name="author" content="Mostafiz">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('../onhealic/assets/images/logo-onhealic.png');?>">
    <title>On-Healic | Online Health Clinic</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('../onhealic/assets/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('../onhealic/assets/css/bootstrap.min.css');?>">
    <!-- preloader css -->
    <link rel="stylesheet" href="<?php echo base_url('../onhealic/assets/css/introLoader.min.css');?>">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php echo base_url('../onhealic/assets/css/animate.css');?>" type="text/css" />
    <!-- owl carousel styles -->
    <link rel="stylesheet" href="<?php echo base_url('../onhealic/assets/css/owl.carousel.css');?>" type="text/<ca>#</ca>ss" />
    <!-- main style <--><a href="#"></a></-->
    <link rel="stylesheet" href="<?php echo base_url('../onhealic/assets/css/style.css');?>">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' rel='stylesheet' type='text/css'>
    <!-- modernizr -->
    <script src="<?php echo base_url('../onhealic/assets/js/modernizr.js');?>"></script>
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
                                    <a href="<?php echo base_url('home')?>" class="medihere-logo"><img src="<?php echo base_url('../onhealic/assets/images/onhealic2.jpg')?>" alt="OnHealic logo" title="medihere"></a>
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

        <!-- Blog page banner -->
        <section id="banner" class="banner text-center">
            <div class="container">
                <div class="row">
                    <br>
                    <br>
                    <h1>Informasi Nomor Antrian</h1>
                    <p>Melihat informasi nomor antrian dengan melakukan pencarian menggunakan NIK Anda!</p>
                </div>
            </div>
        </section>
        <!-- banner ends -->

        <!-- about section -->
        <section class="about" id="about">
            <div class="container abcontainer">
                <div class="contact">
                    <div class="container">
                        <div class="page-nav">
                        <span class="heading-nav"><a href="<?php echo base_url('home')?>">Home</a> | Layanan | Informasi Antrian</span>
                        <div class="row text-center">
                        <div class="col-md-12">
                            <div class="service-heading">
                                <h2>Daftar Antrian</h2>
                                <form class="form-inline" action="<?php echo base_url('infoantrian/search');?>" method="post">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="search" id="search" placeholder="Masukkan NIK anda" required>
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-info">Cari</button>
                                </form>
                                <br><br>
                                <table border="1" class="table table-hover">
                                  <tr>
                                    <th>Nomor Antrian</th>
                                    <th>Id Dokter</th>
                                    <th>NIK Pasien</th>
                                    <th>Jam Periksa</th>
                                    <th>Status</th>
                                  </tr>
                                        <?php
                                        if( ! empty($antrian)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                        foreach($antrian as $data){
                                          echo "<tr>
                                          <td>".$data->no_antrian."</td>
                                          <td>".$data->ddokter."</td>
                                          <td>".$data->dpasien."</td>
                                          <td>".$data->jam_antri."</td>
                                          <td>".$data->status."</td>
                                          </tr>";
                                        }
                                      }else{ // Jika data siswa kosong
                                        echo "<tr>
                                        <td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                      }
                                      ?>
                                </table>       
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section> 
        <br><br>  

        <!-- footer starts -->
         <footer class="footer">
            <div id="back-top"><br>
                <a class="back-top" href="#banner"><i class="fa fa-angle-up"></i></a>
            </div>
            <div class="footer-bottom text-center">
                <p>Copyright &copy; 2017 <a href="#"></a> . Kelompok ASIX</p>
            </div>
        </footer>
        <!-- footer ends here -->
    </main>
    <!-- main page ends -->


    <!-- Jquery and javascript files -->
    <script type="text/javascript" src="<?php echo base_url('../onhealic/assets/js/jquery-2.1.1.js');?>"></script>
    <!-- bootstrap 3.3.6 js -->
    <script type="text/javascript" src="<?php echo base_url('../onhealic/assets/js/bootstrap.min.js');?>"></script>
    <!-- owl carousel js-->
    <script type="text/javascript" src="<?php echo base_url('../onhealic/assets/js/owl.carousel.js');?>"></script>
    <!-- smooth scroll js -->
    <script type="text/javascript" src="<?php echo base_url('../onhealic/assets/js/smoothscroll.js');?>"></script>
    <!-- preloader js -->
    <script type="text/javascript" src="<?php echo base_url('../onhealic/assets/js/jquery.introLoader.pack.min.js');?>"></script>
    <!-- custom scripts -->
    <script type="text/javascript" src="<?php echo base_url('../onhealic/assets/js/script.js');?>"></script>

</body>
</html>
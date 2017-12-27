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
    <link rel="stylesheet" href="../onhealic/assets/css/bootstrap.min.css">
    <!-- preloader css -->
    <link rel="stylesheet" href="../onhealic/assets/css/introLoader.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="../onhealic/assets/css/animate.css" type="text/css" />
    <!-- owl carousel styles -->
    <link rel="stylesheet" href="../onhealic/assets/css/owl.carousel.css" type="text/<ca>#</ca>ss" />
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
                                    <a href="<?php echo base_url('home')?>" class="medihere-logo"><img src="../onhealic/assets/images/onhealic2.jpg" alt="OnHealic logo" title="On-Healic"></a>
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
                    <br> <!-- kaau ada cara yang lebih efisien daripada banyakin tag br -->
                    <h1>KLINIK</h1>
                    <p>Anda bisa melihat klinik kami dan jadwal dokter disini!</p>
                </div>
            </div>
        </section>

        <!-- banner ends -->

        <!-- services -->
        <section class="service">
            <div class="container">
                <div class="page-nav">
                    <span class="heading-nav"><a href="#">Home</a> | Klinik</span>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="service-heading">
                            <h2>Klinik Kami</h2>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque suscipit aliquam, pariatur vitae iste quisquam, assumenda. </p> -->
                        </div>
                        <div class="row">
                            <div class="col-md-12 single-services">
                                <!-- service 1 -->
                                 <div class="col-md-4 col-sm-6">
                                    <div class="single-service service-4">
                                        <span></span>
                                        <h3>Anak</h3>
                                        <p>(101)</p>
                                    </div>
                                </div>
                                
                                <!-- service 2 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service service-2">
                                        <span></span>
                                        <h3>Klinik Gigi dan Mulut</h3>
                                        <p>(102)</p>
                                    </div>
                                </div>
                                <!-- service 3 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service service-3">
                                        <span></span>
                                        <h3>Telinga Hidung Tenggorokan</h3>
                                        <p>(103)</p>
                                    </div>
                                </div>
                                <!-- service 4 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service service-1">
                                        <span></span>
                                        <h3>Penyakit Dalam</h3>
                                        <p>(104)</p>
                                    </div>
                                </div>
                                <!-- service 5 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service service-5">
                                        <span></span>
                                        <h3>Dokter Umum</h3>
                                        <p>(105)</p>
                                    </div>
                                </div>
                                <!-- service 6 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service service-6">
                                        <span></span>
                                        <h3>Radiologi</h3>
                                        <p>(106)</p>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-heading">
                                <hr>
                                <h2>Jadwal Dokter</h2>
                                <br><br>
                                <table border="1" class="table table-hover">
                                      <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Senin</th>
                                        <th>Selasa</th>
                                        <th>Rabu</th>
                                        <th>Kamis</th>
                                        <th>Jumat</th>
                                        <th>Sabtu</th>
                                        <th>Minggu</th>
                                        <th>Kode Klinik</th>
                                      </tr>
                                        <?php
                                      if( ! empty($dokter)){ // Jika data dokter tidak sama dengan kosong, artinya jika data dokter ada
                                        foreach($dokter as $data){
                                          echo "<tr>
                                          <td>".$data->id_dokter."</td>
                                          <td>".$data->nama_dokter."</td>
                                          <td>".$data->senin."</td>
                                          <td>".$data->selasa."</td>
                                          <td>".$data->rabu."</td>
                                          <td>".$data->kamis."</td>
                                          <td>".$data->jumat."</td>
                                          <td>".$data->sabtu."</td>
                                          <td>".$data->minggu."</td>
                                          <td>".$data->dklinik."</td>
                                          </tr>";
                                        }
                                      }else{ // Jika data dokter kosong
                                        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                      }
                                      ?>
                            </table>           
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <br><br><br>

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
    <script type="text/javascript" src="../onhealic/assets/js/jquery-2.1.1.js"></script>
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

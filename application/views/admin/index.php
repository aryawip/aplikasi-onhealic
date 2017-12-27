<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    
    <link rel="icon" href="../onhealic/assets/images/logo-onhealic.png">
    <title>On-Healic | Online Health Clinic</title>

    <!-- Bootstrap core CSS -->
    <link href="../onhealic/assets/backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../onhealic/assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../onhealic/assets/backend/css/style.css" rel="stylesheet">
    <link href="../onhealic/assets/backend/css/style-responsive.css" rel="stylesheet">
    


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              
            <!--logo start-->
            <a href="#" class="logo"><b>Database On-Healic</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu"> </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Tabel Data</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('klinik')?>">Data Klinik</a></li>
                          <li><a  href="<?php echo base_url('dokter')?>">Data Dokter</a></li>
                          <li><a  href="<?php echo base_url('outpatient')?>">Data Outpatient</a></li>
                          <li><a  href="<?php echo base_url('antrian')?>">Data Antrian</a></li>
                          <li><a  href="<?php echo base_url('adminuser')?>">Data Admin</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                      <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <h4><i class="fa fa-angle-right"></i> Data Admin</h4>
                              <hr>
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                               </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <?php
                                if( ! empty($admin)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                  foreach($admin as $data){
                                    echo "<tr>
                                    <td>".$data->id."</td>
                                    <td>".$data->username."</td>
                                    <td>".$data->password."</td>
                                    
                                    </tr>";
                                  }
                                }else{ // Jika data admin kosong
                                  echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                }
                                ?>
                                </tr>
                              </tbody>
                          </table>
                          
                          </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

        </section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../onhealic/assets/backend/js/jquery.js"></script>
    <script src="../onhealic/assets/backend/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../onhealic/assets/backend/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../onhealic/assets/backend/js/jquery.scrollTo.min.js"></script>
    <script src="../onhealic/assets/backend//jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../onhealic/assets/backend/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    
    <link rel="icon" href="<?php echo base_url('../onhealic/assets/images/logo-onhealic.png');?>">
    <title>On-Healic | Online Health Clinic</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('../onhealic/assets/backend/css/bootstrap.css');?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('../onhealic/assets/backend/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('../onhealic/assets/backend/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('../onhealic/assets/backend/css/style-responsive.css');?>" rel="stylesheet">
    


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
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Tambah Data Klinik</h4>
                      <div class="form-horizontal style-form" >
                      <div style="color: red;"><?php echo validation_errors(); ?></div>
                            <?php echo form_open("klinik/tambah"); ?>
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="input_kode" value="<?php echo set_value('input_kode'); ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="input_nama" value="<?php echo set_value('input_nama'); ?>">
                              </div>
                            </div>
                          
                            <input type="submit" name="submit" value="Simpan" class="btn btn-theme">
                            <a href="<?php echo base_url('klinik'); ?>"><input type="button" value="Batal" class="btn btn-theme"></a>
                          <?php echo form_close(); ?>
                    </div>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
    </section>
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('../onhealic/assets/backend/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('../onhealic/assets/backend/js/bootstrap.min.js');?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('../onhealic/assets/backend/js/jquery.dcjqaccordion.2.7.js');?>"></script>
    <script src="<?php echo base_url('../onhealic/assets/backend/js/jquery.scrollTo.min.js');?>"></script>
    <script src="<?php echo base_url('../onhealic/assets/backend//jquery.nicescroll.js');?>" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url('../onhealic/assets/backend/js/common-scripts.js');?>"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>

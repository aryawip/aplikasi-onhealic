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
      MAIN CONTENTclass="form-control"
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Ubah Data Outpatient</h4>
                      <div class="form-horizontal style-form">
                      <div style="color: red;"><?php echo validation_errors(); ?></div>
                            <?php echo form_open("outpatient/ubah/".$outpatient->no_ktp); ?>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="input_ktp" value="<?php echo set_value('input_ktp', $outpatient->no_ktp); ?>" readonly>
                              </div>
                              </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="input_nama" value="<?php echo set_value('input_nama', $outpatient->nama); ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="input_tgl" value="<?php echo set_value('input_tgl', $outpatient->tanggal_lahir); ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <select name="input_jk" class="form-control">
                                    <option value="p"<?php echo set_radio('jenis_kelamin','p',($outpatient->jenis_kelamin == "Laki-laki")? true : false); ?>>Laki-Laki</option>
                                    <option value="w"<?php echo set_radio('jenis_kelamin','w',($outpatient->jenis_kelamin == "Perempuan")? true : false); ?>>Perempuan</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="input_alamat" value="<?php echo set_value('input_alamat', $outpatient->alamat); ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Telepon</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="input_telp" value="<?php echo set_value('input_telp', $outpatient->no_telp); ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keluhan</label>
                              <div class="col-sm-10">
                                 <input type="textarea"  class="form-control"name="input_keluhan" value="<?php echo set_value('input_keluhan', $outpatient->keluhan); ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Dokter</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="input_dokter" value="<?php echo set_value('input_dokter', $outpatient->ddokter); ?>" readonly>
                              </div>
                            </div>
                            <input type="submit" name="submit" value="Ubah" class="btn btn-theme">
                            <a href="<?php echo base_url('outpatient'); ?>"><input type="button" value="Batal" class="btn btn-theme"></a>
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

<html>
  <head>
    <link rel="icon" href="../onhealic/assets/images/logo-onhealic.png">
    <title> On-Healic | Online Health Clinic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
   
  </head>
  <body style="background-color: #F0F8FF">
    <h1>Form Ubah Data Outpatient</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("outpatient/ubah/".$outpatient->no_ktp); ?>
      <table cellpadding="8">
        <tr>
          <td>No KTP</td>
          <td><input type="text" name="input_ktp" value="<?php echo set_value('input_ktp', $outpatient->no_ktp); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $outpatient->nama); ?>"></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><input type="date" name="input_tgl" value="<?php echo set_value('input_tgl', $outpatient->tanggal_lahir); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="radio" name="input_jk" value="p"<?php echo set_radio('jenis_kelamin','p',($outpatient->jenis_kelamin == "Laki-laki")? true : false); ?>>Laki-laki<input type="radio" name="input_jk" value="w"<?php echo set_radio('jenis_kelamin','w',($outpatient->jenis_kelamin == "Perempuan")? true : false); ?>>Perempuan</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="input_alamat" value="<?php echo set_value('input_alamat', $outpatient->alamat); ?>"></td>
        </tr>
        <tr>
          <td>No Telepon</td>
          <td><input type="text" name="input_telp" value="<?php echo set_value('input_telp', $outpatient->no_telp); ?>"></td>
        </tr>
        <tr>
          <td>Keluhan</td>
          <td><input type="textarea" name="input_keluhan" value="<?php echo set_value('input_keluhan', $outpatient->keluhan); ?>"></td>
        </tr>
        <tr>
          <td>ID Dokter</td>
          <td><input type="text" name="input_dokter" value="<?php echo set_value('input_dokter', $outpatient->ddokter); ?>" readonly></td>
        </tr>


      </table>
        
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url('outpatient'); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>
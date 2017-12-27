<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="../onhealic/assets/images/logo-onhealic.png">
 	<title>On-Healic | Online Health Clinic</title>
  	<link rel="stylesheet" href="../onhealic/assets/css/login.css">
  	<link rel="stylesheet" href="../onhealic/assets/css/introLoader.min.css">
</head>

<body>
	<div id="element" class="introLoading"></div>

	<div class = "logo">
		<img src ="../onhealic/assets/images/logo2onhealic.png" title="On-Healic">
	</div><br>
	<div class="page-nav">
        <span class="heading-nav"><a href="<?php echo base_url('home')?>">Home</a> | Admin</span>
    </div>
  	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Selamat datang, <span>Admin!</span></div>
    </div><br>
    <!-- Form login admin -->
  	<div class="login">
			<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
				<input type="text" name="username" placeholder="username" required>
				<input type="password" name="password" placeholder="password" required>
				<input type="submit" value="Login">
			</form>
		</div>

    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src="../onhealic/assets/js/prefixfree.min.js"></script>
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
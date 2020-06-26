<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
   .company_logo {
  font-size: 15px;
  margin: 0;
  padding: 0;
  letter-spacing: 1px;
  font-weight: 800;
}


.container-login10 {
  width: 100%;  
  min-height: 70vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;

  position: relative;
  z-index: 1;
}

.container-login10::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-image: url("<?php echo base_url('assets/img/bg2.png');?>");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}



</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RoyalRichs</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/venobox/venobox.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v2.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:info@royalrichs.com"><span style="color:black">info@royalrichs.com</span></a>
        <i class="icofont-phone"></i><a href="tel:+91 7020009117"><span style="color:black">+91 7020009117</span></a>
      </div>
      <div class=" ">
        <a href="https://twitter.com/ShekharSinha4u" class="twitter"><i class="icofont-twitter" style="color:#DC143C"></i></a>
        <a href="https://www.facebook.com/ShekharTechnical" class="facebook"><i class="icofont-facebook" style="color:#DC143C" ></i></a>

      </div>
    </div>
  </div>
<br><br>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:#187bcd">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="<?php echo site_url('Main_controller/index');?>" style="font-size:30px"><b>RoyalRichs <br><span style="font-size:12px">Stock Market & Economic Analysis</span></b></a></h1>

        &nbsp; &nbsp; &nbsp;&nbsp;


      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          <li><a href="<?php echo site_url('Main_controller/index');?>"><b>Home</b></a></li>
          <li class="drop-down"><a href="#"><b>Services</b></a>
          <ul>
                <li><a href="<?php echo site_url('Main_controller/Robo_controller');?>">ALGO/ROBO/MT4</a></li>
                <li><a href="<?php echo site_url('Main_controller/Training_controller');?>">TRANING & WORKSHOP</a></li>
                <li><a href="<?php echo site_url('Main_controller/Demate_controller');?>">DEMATE A/C (ALICE BLUE)</a></li>
                <li><a href="<?php echo site_url('Main_controller/Donate_plants_controller');?>">DONATE PLANTS & HELP NEEDY</a></li>
            </ul>
          </li>

          <li><a href="<?php echo site_url('Main_controller/Portfolio_view_page_controller');?>"><b>Portfolio</b></a></li>
          <li><a href="<?php echo site_url('Main_controller/Result_view_controller');?>"><b>Results</b></a></li>
          <li><a href="<?php echo site_url('Main_controller/Team_controller');?>"><b>Our Team</b></a></li>
          <li><a href="<?php echo site_url('Main_controller/About_us_controller');?>"><b>About us</b></a></li>
          <li><a href="<?php echo site_url('Main_controller/Contact_us_view_controller');?>"><b>Contact</b></a></li>
           <li><a href="#" data-toggle="modal" data-target="#myModal"><b>Login</b></a></li>
           <!--li><a href="#" data-toggle="modal" data-target="#myModal1"><b>Signup</b></a></li-->

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->











<!--=====================Login Header=====================================================-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V11</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/Login_assets/images/icons/favicon.ico');?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login_assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login_assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login_assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login_assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login_assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login_assets/css/util.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login_assets/css/main.css');?>">
<!--===============================================================================================-->
</head>


<!---============= Login Header Ends============================================-->
















<!--=======Login modal starts=================================================-->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:#B22222">&times;</button>
        </div>
        <div class="modal-body">
            
  <div class="limiter">
    <div class="container-login10">
      <div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">


        <!--form class="login100-form" action="<?php //echo site_url('Main_controller/Login_controller');?>"-->
          <span class="login100-form-title p-b-55">
            Login
          </span>

              <?php
                 echo form_open('Login_controller/index');
                 echo validation_errors();
                 if (isset($msg))
                 echo '<p>'.$msg.'</p>';

            ?>

          <div class="wrap-input100 m-b-16" >
            <input class="input100" type="text" name="email" id="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-envelope"></span>
            </span>
          </div>

          <div class="wrap-input100  m-b-16" >
            <input class="input100" type="password" name="pwd"  id="pwd"  placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>

          <div class="contact100-form-checkbox m-l-4">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              <span class="txt3">Remember me</span>
            </label>
          </div>
          
          <div class="container-login100-form-btn p-t-25">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-left w-full p-t-15">
            <a class="txt50 bo1 hov1" href="<?php echo site_url('Main_controller/forget_pwd_controller');?>" >
              Forgot password?           
            </a>
          </div>

          <div class="text-center w-full p-t-15">
            <span class="txt3">
              Not a member?
            </span>

            <a class="txt50 bo1 hov1" href="<?php echo site_url('Main_controller/Signup_controller');?>" >
              Sign up now             
            </a>
          </div>
        <!--/form-->
        <?php 
           echo form_close(); 
        ?>
      </div>

    </div>
  </div>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#b2b2b2 ">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!--==================Login Modal ends========================================================-->



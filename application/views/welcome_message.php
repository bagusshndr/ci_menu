<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Tasty Coffee</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="<?php echo base_url('assets/assets/css/font-awesome.css" rel="stylesheet'); ?>">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/assets/css/bootstrap.css" rel="stylesheet'); ?>">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/slick.css'); ?>">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/bootstrap-datepicker.css'); ?>">   
     <!-- Gallery Lightbox -->
    <link href="<?php echo base_url('assets/assets/css/magnific-popup.css" rel="stylesheet'); ?>"> 
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url('assets/assets/css/theme-color/default-theme.css" rel="stylesheet'); ?>">     

    <!-- Main style sheet -->
    <link href="<?php echo base_url('assets/style.css" rel="stylesheet'); ?>"> 

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
          <a class="navbar-brand" href="index.html">Tasty<span>Coffee</span></a> 

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <!-- <li><a href="index.html">HOME</a></li>
            <li><a href="#mu-about-us">ABOUT US</a></li>                        -->
            <!-- <li><a href="#mu-restaurant-menu">MENU</a></li>                        -->
            <!-- <li><a href="#mu-reservation">RESERVATION</a></li>                       
            <li><a href="#mu-gallery">GALLERY</a></li>
            <li><a href="#mu-chef">OUR CHEFS</a></li> 
            <li><a href="#mu-contact">CONTACT</a></li>  -->
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

  <?php
  $this->load->view($content);
  ?>

 

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="<?php echo base_url('assets/assets/js/jquery.min.js'); ?>"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url('assets/assets/js/bootstrap.js'); ?>"></script>  
  <!-- Slick slider -->
  <script type="text/javascript" src="<?php echo base_url('assets/assets/js/slick.js'); ?>"></script>
  <!-- Counter -->
  <script type="text/javascript" src="<?php echo base_url('assets/assets/js/simple-animated-counter.js'); ?>"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="<?php echo base_url('assets/assets/js/jquery.magnific-popup.min.js'); ?>"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="<?php echo base_url('assets/assets/js/bootstrap-datepicker.js'); ?>'); ?>"></script>
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="<?php echo base_url('assets/assets/js/app.js'); ?>"></script>
 
  <!-- Custom js -->
  <script src="<?php echo base_url('assets/assets/js/custom.js'); ?>'); ?>"></script>

  </body>
</html>
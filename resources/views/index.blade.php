<!DOCTYPE html>
  <head>
   	<title>Gloss Template</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
 	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'> 

   	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
   	<link rel="stylesheet" href="css/templatemo_misc.css">
	<link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <script src="js/js/jquery-1.11.1.min.js"></script>  <!-- lightbox -->
	<script src="js/templatemo_custom.js"></script> <!-- lightbox -->

</head>
  <body>
    <div class="menu">
      <div class="container">
    	 <div class="row">
			   <div class="templatemo_topwrapper shadow">
            	<div class="col-sm-4">
                	<div class="templatemo_webtitle">PORTFOLIO</span></div>
                </div>
                <div class="col-sm-8">
                	<nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="top-menu">
              <div class="collapse navbar-collapse main_menu" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="{{ route('home') }}"><span class="fa fa-home"></span>HOME</a></li>
                  <li><a href="{{ route('about') }}"><span class="fa fa-users"></span>ABOUT</a></li>
                  <li><a href="{{ route('contact') }}"><span class="fa fa-envelope"></span>CONTACT</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
                </div>
            </div>
   	  </div>
      </div>
      </div>
    <div id="menu-container">  
    <div class="content homepage" id="menu-1">  
  	<div class="container">
        <div class="row">
        <div class="templatemo_homewrapper shadow">
        	<div class="templatemo_hometop_bg">
            	<div class="col-md-6">
            	<div class="templemo_hometop_img"><img src="https://image.flaticon.com/icons/png/512/114/114675.png" alt="templatemo home image"></div>
            </div>
            <div class="col-md-6"><br><br><br>
                <div class="templatemo_hometop_subtitle"></div>
                <h3>{{ __('lang.welcome')}}</h3>
                <h3>{{ __('lang.title')}}</h3>
                <h3>{{ __('lang.body')}}</h3>
            </div>
            <div class="clear"></div>
            </div>       		
        </div>
        </div>
        <div class="clear"></div>
   </div>
   </div>
  
                     
  </body>
</html>
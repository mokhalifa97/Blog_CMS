
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Aviato E-Commerce Template">
  
  <meta name="author" content="Themefisher.com">

  <title>@yield('title','Airspace | Blog Agency')</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{'assets/website/plugins/bootstrap/css/bootstrap.min.css'}}">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="{{'assets/website/plugins/Ionicons/css/ionicons.min.css'}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{'assets/website/plugins/animate-css/animate.css'}}">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="{{'assets/website/plugins/magnific-popup/dist/magnific-popup.css'}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{'assets/website/plugins/slick-carousel/slick/slick.css'}}">
  <link rel="stylesheet" href="{{'assets/website/plugins/slick-carousel/slick/slick-theme.css'}}">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{'assets/website/css/style.css'}}">
  <link rel="shortcut icon" href="{{ 'assets/website/images/logo.png' }}" />
</head>

<body id="body">

    <!-- Header Start -->
    <header class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- header Nav Start -->
                    <nav class="navbar">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="{{route('index')}}">
                                    <img src="{{'assets/website/images/logo.png'}}" alt="Logo">
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('service')}}">Service</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                                </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
                </div>
                </header><!-- header close -->



                <div id="app">
                    <main class="">
                        @yield('content')
                    </main>
                </div>


<!-- footer Start -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-manu">
					<ul>
						<li><a href="{{route('about')}}">About Us</a></li>
						<li><a href="{{route('contact')}}">Contact us</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
						<li><a href="{{route('pricing')}}">Pricing Table</a></li>
					</ul>
				</div>
				<p class="copyright">Copyright 2018 &copy; Design & Developed by <a href="http://www.themefisher.com">themefisher.com</a>. All rights reserved.
					<br>
					Get More <a href="https://themewagon.com/theme_tag/free/" target="_blank">Free Bootstrap Templates</a>
				</p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- <script src="js/jquery.counterup.js"></script> -->
    
    <!-- Main jQuery -->
   
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!--  -->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Mixit Up JS -->
    <script src="plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- <script src="plugins/count-down/jquery.lwtCountdown-1.0.js"></script> -->
    <script src="plugins/SyoTimer/build/jquery.syotimer.min.js"></script>


    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>


    
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    

    <script src="js/script.js"></script>
    



  </body>
  </html>
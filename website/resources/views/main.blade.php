<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Martha's Rooms</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <script src="js/jquery.js"></script>
    

</head>

<body>
  <header id="header">

       <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
            </button>
          <div class="navbar-brand">
            <a href='/welcome'><img src="./img/logo.png" alt="logo"></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="/welcome" class="active">Home</a></li>
              <li role="presentation"><a href='/about'>About Us</a></li>
              <li role="presentation" class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Rooms<span class="caret"></span></a> 
                  <div class="dropdown-content">
                    <a href='/northcambridge'>North Cambridge</a>
                    <a href='/montinola'>Montinola</a>
                  </div>
              </li>
              <li role="presentation"><a href='/gallery'>Gallery</a></li>
              <li role="presentation"><a href='/contactus'>Contact Us</a></li>
              <li role="presentation"><a href='/book'>Book Now</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
  
  @yield('content')
  
  <footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>About Us</h4>
        <p>Come and experience Baguio City with Martha's Rooms. Martha's Rooms offers you a Condominium experience in a affordable Price. </p>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>  Bareng Drive, Bakakeng Sur Rd, Baguio, Benguet</li>
            <li><i class="fa fa-phone fa"></i>   0915 557 0221 (Globe) / 0999 325 9114 (Smart)</li>
            <li><i class="fa fa-envelope fa"></i> info@martharooms.com</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="text-center">
          <h4>Quick Links</h4>
          <div class="list-links">
            <a href="/welcome" class="active">Home</a>
            <a href="/about">About Us</a>
            <a href="/rooms">Rooms</a>
            <a href="/gallery">Gallery</a>
            <a href="/contact">Contact Us</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="">
          <h4>Subscribe</h4>
          <p>Subscribe today to be informed with our promo, rates, and happenings, just simply input your email.</p>
          <div class="btn-gamp">
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
          </div>
          <div class="btn-gamp">
            <a type="submit" class="btn btn-default">Subscribe</a>
          </div>

        </div>
      </div>

    </div>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div class="copyright">
          2018 Copyright &copy; Martha's Rooms. All Rights Reserved.
          <div class="credits">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
</body>

</html>

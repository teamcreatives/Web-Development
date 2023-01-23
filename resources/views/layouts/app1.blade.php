<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tiidy Up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="server/img/cleantech-logo.png" rel="icon">
  <link href="server/img/cleantech-logo.png" rel="tiidy-up-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="server/vendor/aos/aos.css" rel="stylesheet">
  <link href="server/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="server/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="server/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="server/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="server/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="server/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('images/landing_page/cleantech-logo-1.png') }}" alt="Logo" width="60" height="50" class="d-inline-block align-text-bottom">
                </div>
                <div class="col mt-3 ">
                    <h1><a href="{{ route('homepage')}}">TiidyUp</a></h1>
                </div>
            </div>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="server/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li> --}}
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
            {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        {{-- <div class="header-social-links d-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div> --}}

      </div>
    </header><!-- End Header -->

    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <img src="{{ asset('images/landing_page/cleantech-logo-1.png')}}" alt="" class="img-fluid" width="60" height="50">
              <p>
                Experience the magic <br>of a sparkling clean <br>home with our reliable <br>and efficient cleaning <br>services
              </p>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>About</h4>
            <ul>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li> --}}
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Laundary And Dry Cleaning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Residential Cleaning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sanitation And Disinfection</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Commercial Cleaning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Janitorial Cleaning</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            {{-- <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> --}}

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tiidy Up</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Designed by <a href="https://bootstrapmade.com/">team creative, ICTYEP 2022</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="server/vendor/aos/aos.js"></script>
  <script src="server/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="server/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="server/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="server/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="server/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="server/js/main.js"></script>

</body>

</html>

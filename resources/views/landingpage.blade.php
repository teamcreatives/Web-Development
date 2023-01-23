@extends('layouts.app1')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div>
                        <h1 style="font-family: Poppins">We make your<br>Offices and Homes<br><span
                                style="color: #0894D4">clean, safe</span>
                            and<br> <span style="color: #0894D4">healthy</span></h1>
                        <h2>Leave the house cleaning chores to us. Let us do the dirty work, so you don't have to.</h2>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    {{-- <img src="server/img/hero-img.png" class="img-fluid" alt=""> --}} <img src="{{ asset('images/landing_page/Group 15168.png') }}" alt=""
                        class="img-fluid float-end" width="350">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="{{ asset('images/landing_page/Group 15222.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3 style="color: #055980">Convenient, Comfortable And<br> Professional <span
                                    class="text-dark">Cleaning Service<br> Delivery</span></h3>
                            <p class="fst-italic mt-4">
                                Tidy up is a professional cleaning service based in Asaba that offers a range of services
                                including Residential cleaning,Laundry and dry cleaning, and a broad range of other cleaning
                                services. Our team of experienced professionals uses high-quality products and techniques to
                                ensure customer satisfaction and offer a 100% satisfaction guarantee.
                            </p>
                            <div class="row mt-5">
                                <div class="col mx-auto">
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i> Expert cleaners.</li>
                                        <li><i class="bi bi-check-circle"></i> Prompt customer care response.</li>
                                        <li><i class="bi bi-check-circle"></i> Offers subscription plan.</li>
                                    </ul>
                                </div>

                                <div class="col mx-auto">
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i> Professional staffs.</li>
                                        <li><i class="bi bi-check-circle"></i> Online booking and payment.</li>
                                        <li><i class="bi bi-check-circle"></i> 99% security guarantee.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        {{-- <section id="features" class="features">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item" data-aos="fade-up">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    <h4>Modi sit est</h4>
                                    <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                    <h4>Unde praesentium sed</h4>
                                    <p>Voluptas vel esse repudiandae quo excepturi.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                    <h4>Pariatur explicabo vel</h4>
                                    <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                    <h4>Nostrum qui quasi</h4>
                                    <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <figure>
                                    <img src="server/img/features-1.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <figure>
                                    <img src="server/img/features-2.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <figure>
                                    <img src="server/img/features-3.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <figure>
                                    <img src="server/img/features-4.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section --> --}}

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Services</h2>
                    <h3 class="text-center" style="font-family: poppins">Offering The Best Services To <br>Our Clients</h3>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 offset-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                        <div class="icon-box icon-box-white">
                            <div class="icon"><img src="{{ asset('images/landing_page/laundry-cloth.png') }}"
                                    alt="" width="80" class="img-fluid"></div>
                            <h4 class="title" style="font-family: poppins">Laundry And Dry Cleaning</h4>
                            <p class="description">We Offer Top Quality Laundry And Dry Cleaning Services Using Advanced
                                Equipment And Environmentally Friendly Products.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box1 icon-box-white">
                            <div class="icon"><img src="{{ asset('images/landing_page/residential.png') }}" alt=""
                                    width="80" class="img-fluid"></div>
                            <h4 class="title">Residential <br>Cleaning</h4>
                            <p class="description">We Use Environmentally Friendly Products And Advanced Techniques To
                                Ensure That Every Surface And Crevice Of Your Home Is Sparkling Clean.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box icon-box-white">
                            <div class="icon"><img src="{{ asset('images/landing_page/window.png') }}" alt=""
                                    width="80" class="img-fluid"></div>
                            <h4 class="title">Sanitation And <br>Disinfection</h4>
                            <p class="description">We Use Environmentally Friendly Products And Advanced
                                Techniques To Ensure That Every Surface And Crevice Of Your Home Is Sparkling
                                Clean.</p>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-6 col-lg-3 offset-lg-3 mt-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box icon-box-white">
                            <div class="icon"><img src="{{ asset('images/landing_page/commercial.png') }}" alt="" width="80"
                                class="img-fluid"></div>
                            <h4 class="title">Commercial<br>Cleaning</h4>
                            <p class="description">We Understand That A Clean Work Environment Is Essential
                                For The Health And Of Employees And Customers, As Well As The Overall Success Of A Business.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box icon-box-white">
                            <div class="icon"><img src="{{ asset('images/landing_page/janitor.png') }}" alt="" width="80"
                                class="img-fluid"></div>
                            <h4 class="title">Janitorial<br>Cleaning</h4>
                            <p class="description">We Offer A Range Of Services, Including Dusting And Wiping
                                Down Surfaces, Vacuuming And Mopping Floors, Sanitizing Restrooms, And Emptying
                                Trash Bins..
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
    {{--  <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>App</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="server/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                </div>
                <div class="portfolio-links">
                  <a href="server/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

          </div>

        </div>
    </section>  --}} <!-- End Portfolio Section -->

    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <img src="{{ asset('images/landing_page/Group 15285.png') }}" alt="" class="img-fluid">
        </div>
    </div>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Team</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-sm-5">
              <div class="member" data-aos="zoom-in">
                <div class="pic"><img src="{{ asset('images/landing_page/rectangle-87-bg.png') }}" alt=""
                    class="img-fluid"></div>
                <div class="member-info">
                  <h4>Grace Kate, 30years</h4>
                  <span>Cleaner</span>
                  <div class="social">
                    <p>A highly motivated and reliable cleaner with over
                        5 years of experience.</p>
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-sm-5">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="{{ asset('images/landing_page/rectangle-88.png') }}" alt=""
                    class="img-fluid"></div>
                <div class="member-info">
                  <h4>John Tega, 40 years</h4>
                  <span>Janitor</span>
                  <div class="social">
                    <p>A reliable and skilled janitor with
                        over 10 years of experience in the field.</p>
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-sm-5">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="{{ asset('images/landing_page/rectangle-89-bg.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Olu Balogun, 35years</h4>
                  <span>Dry Cleaner</span>
                  <div class="social">
                    <p>Meet Balogun, with over 15 years of experience in
                        the industry.</p>
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="sponsors" class="clients">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Sponsors</h2>
            <p>our contributors</p>
          </div>

          <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo" data-aos="zoom-in">
                <img src="server/img/clients/DS_LOGO.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo" data-aos="zoom-in" data-aos-delay="100">
                <img src="server/img/clients/zenith-bank.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo" data-aos="zoom-in" data-aos-delay="150">
                <img src="server/img/clients/deltastategov.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo" data-aos="zoom-in" data-aos-delay="200">
                <img src="server/img/clients/min_of_sci_and_tech.jpg" class="img-fluid" alt="">
              </div>
            </div>

            {{-- <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo" data-aos="zoom-in" data-aos-delay="250">
                <img src="server/img/clients/client-5.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo" data-aos="zoom-in" data-aos-delay="300">
                <img src="server/img/clients/client-6.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo" data-aos="zoom-in" data-aos-delay="350">
                <img src="server/img/clients/client-7.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="client-logo">
                <img src="server/img/clients/client-8.png" class="img-fluid" alt="">
              </div> --}}
            </div>

          </div>

        </div>
      </section><!-- End Clients Section -->

    </main><!-- End #main -->
@endsection

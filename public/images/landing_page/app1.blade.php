<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tidy up</title>
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/index.css') }}">
</head>

<body>
    <!-- ======= Header ======= -->
    <header class="sticky-top">

        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ asset('images/landing_page/cleantech-logo-1.png') }}" alt="Logo" width="65"
                        height="50" class="d-inline-block align-text-bottom">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end nav-pill fs-6" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mb-2 mb-lg-0 me-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#aboutUs">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#ourServices">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#contactUs">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer class="text-light" style="background-color: #033B55;">
        <div class="row mx-5 pt-5">
            <div class="col-md-3 col-sm-6 mb-3">
                <img src="{{ asset('images/landing_page/cleantech-logo-1.png') }}" alt="logo" class="img-fluid"
                    width="65">
                <p>
                    Experience the magic <br>of a sparkling clean <br>home with our reliable <br>and efficient cleaning
                    <br>services
                </p>
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="navbar ">
                            <a href="#" class="nav-link p-0 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg></a>
                            <a href="#" class="nav-link p-0 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                            </svg></a>
                            <a href="#" class="nav-link p-0 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg></a>
                            <a href="#" class="nav-link p-0 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3 col-sm-6 mb-3">
                <p class="fw-bold">About Us</p>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#aboutUs" class="nav-link p-0 text-light">About Us</a></li>
                    <li class="nav-item mb-2"><a href="#ourCleaners" class="nav-link p-0 text-light">Our Cleaners</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#testimonial" class="nav-link p-0 text-light">Testimonials</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6 mb-3" id="contactUs">
                <p class="fw-bold">Contact Us</p>
                <ul class="navbar-nav">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-clock" viewBox="0 0 16 16">
                            <path
                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg> Services Available 24/7</a>
                    </li>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="tel:08064835272" class="nav-link p-0 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" /></svg> 08064835272, 08068452732</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="mailto:tidyup@gmail.com" class="nav-link p-0 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" /></svg> TidyUp@gmail.com</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link p-0 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" /></svg> Innovation Hub, Okpanam road Asaba</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 d-flex justify-content-end">
                <ul class="nav flex-column">
                    <p class="fw-bold">Our Services</p>
                    <li class="nav-item mb-2"><a href="#laun" class="nav-link p-0 text-light">Laundry and Dry Cleaning</a></li>
                    <li class="nav-item mb-2"><a href="#resi" class="nav-link p-0 text-light">Residential  Cleaning</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#sani" class="nav-link p-0 text-light">Sanitation and Disinfection</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#comm" class="nav-link p-0 text-light">Commercial cleaning</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#jani" class="nav-link p-0 text-light">Janitorial Cleaning</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="d-flex flex-column flex-sm-row justify-content-center mt-2">
                <p>Copyright &copy; 2022 Tidy Up. All rights reserved.</p>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>

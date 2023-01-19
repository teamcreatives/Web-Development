@extends('layouts.app1')

@section('content')
    <div class="container-fluid">
        <div data-bs-spy="scroll" data-bs-target="#navbarToggleDemo01" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
            {{-- <h4 id="scrollspyHeading1">First heading</h4>
            <p>...</p> --}}

            {{-- large & medium --}}
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xm-6 mt-3">
                    <h1 class="fw-bold">We make your<br>Offices and Homes<br><span style="color: #0894D4">clean, safe</span>
                        and<br> <span style="color: #0894D4">healthy</span></h1>
                    <div class="row mt-5">
                        <div class="col-md-6 col-sm-6 col-xm-6">
                            <a href="#" class=""><img src="{{asset('images/landing_page/512x512google.png')}}" alt="" class="img-fluid" width="200"></a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xm-6">
                            <a href="#" class=""><img src="{{asset('images/landing_page/512x512app.png')}}" alt="" class="img-fluid" width="200"></a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid col-md-6 col-sm-6 col-xm-6 mt-3">
                    <img src="{{ asset('images/landing_page/Group 15168.png') }}" alt=""
                        class="img-fluid float-end" width="400">
                </div>
            </div>
            {{-- _____________________________________________ --}}

            {{-- about us --}}
            <div class="row mt-5" id="aboutUs">
                <div class="col-md-6">
                    <img src="{{ asset('images/landing_page/Group 15222.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 col-sm-6 col-xm-6 mt-3">
                    <h5 style="color: #0677AA;" class="text-about-us">About Us</h5><br>
                    <h4 class="fw-bold" style="color: #055980">Convenient, Comfortable And<br> Professional <span
                            class="text-dark">Cleaning Service<br> Delivery</span></h4><br>
                    <p>Tidy up is a professional cleaning service based in Asaba that offers a range of services including
                        Residential cleaning,Laundry and dry cleaning, and a broad range of other cleaning services. Our
                        team of experienced professionals uses high-quality products and techniques to ensure customer
                        satisfaction and offer a 100% satisfaction guarantee.</p><br>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xm-6">
                            <ul>
                                <li>Expert cleaners</li>
                                <li>Prompt customer care response</li>
                                <li>Offers subscription plan</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xm-6">
                            <ul>
                                <li>Professional staffs</li>
                                <li>Online booking and payment</li>
                                <li>99% security guarantee</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- _______________________________________________________ --}}

            {{-- Our Service --}}
            <div class="row" id="ourServices">
                <div class="col-md-6 col-sm-12 mt-5 mx-auto">
                    <h5 style="color: #0677AA;" class="text-center">Our Services</h5>
                    <h3 class="text-center fw-bold">Offering The Best Services <br>To Our Clients</h3>
                </div>
            </div>

            <div class="row m-2">
                <div class="col-md-4 col-sm-12 col-xm-12 d-flex justify-content-center mb-2">
                    <div class="card mt-3 ps-4 pe-4 pt-5 pb-5 shadow d-flex mx-auto" style="height: 100%; width: 100%;">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xm-6 mx-auto">
                                <img src="{{ asset('images/landing_page/laundry-cloth.png') }}" alt="" width="150"
                                class="img-fluid p-3">
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Laundry And <br>Dry Cleaning</h5>
                            <p class="card-text text-center">We Offer Top Quality <br>Laundry And Dry Cleaning <br>Services
                                Using Advanced Equipment <br>And Environmentally Friendly Products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xm-12 d-flex justify-content-center mb-2">
                    <div class="card mt-3 ps-4 pe-4 pt-5 pb-5 shadow" style="background-color: #32BFFF; height: 100%; width: 100%;">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xm-6 mx-auto">
                                <img src="{{ asset('images/landing_page/residential.png') }}" alt="" width="150"
                                class="img-fluid d-flex justify-content-center p-3">
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Residential <br>Cleaning</h5>
                            <p class="card-text text-center">We Use Environmentally <br> Friendly Products And <br>Advanced Techniques To <br>Ensure That Every Surface And<br> Crevice Of Your Home Is <br>Sparkling Clean.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xm-12 d-flex justify-content-center mb-2">
                    <div class="card mt-3 ps-4 pe-4 pt-5 pb-5 shadow" style="height: 100%; width: 100%;">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xm-6 mx-auto">
                                <img src="{{ asset('images/landing_page/window.png') }}" alt="" width="150"
                                class="img-fluid d-flex justify-content-center p-3">
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Sanitation And <br>Disinfection</h5>
                            <p class="card-text text-center">We Use Environmentally <br> Friendly Products And <br>Advanced
                                Techniques To <br>Ensure That Every Surface And<br> Crevice Of Your Home Is <br>Sparkling
                                Clean.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12 offset-md-2 d-flex justify-content-center mb-2">
                    <div class="card mt-3 me-0 ps-3 pe-3 pt-5 pb-5 shadow" style="height: 100%; width: 92%;">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xm-6 mx-auto">
                                <img src="{{ asset('images/landing_page/commercial.png') }}" alt="" width="150"
                                class="img-fluid d-flex justify-content-center p-3">
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Commercial<br>Cleaning</h5>
                            <p class="card-text text-center">We Understand That A Clean Work <br>Environment Is Essential
                                For The Health And <br>Of Employees And Customers, As<br> Well As The Overall Success Of A
                                Business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-2">
                    <div class="card mt-3 ps-3 pe-3 pt-5 pb-5 ms-0 shadow d-flex justify-content-center" style="height: 100%; width: 92%;">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xm-6 mx-auto">
                                <img src="{{ asset('images/landing_page/janitor.png') }}" alt="" width="150"
                                class="img-fluid p-3">
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Janitorial<br>Cleaning</h5>
                            <p class="card-text text-center">We Offer A Range Of Services, <br>Including Dusting And Wiping
                                Down <br>Surfaces, Vacuuming And Mopping <br>Floors, Sanitizing Restrooms, And <br>Emptying
                                Trash Bins.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- _______________________________________________ --}}

            <div class="row mt-3">
                <div class="col-md-12 col-sm-12">
                    <div>
                        <img src="{{ asset('images/landing_page/Group 15285.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            {{-- _____________________ Our Cleaners________________________________ --}}

            <div class="row mt-5" id="ourCleaners">
                <div class="col-md-4 mx-auto">
                    <h5 class="text-center" style="color: #0677AA;">Our Cleaners</h5>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 col-sm-12">
                    <div class="card rounded-2 shadow" style="background-color: #033B55; height: 100%;">
                        <img src="{{ asset('images/landing_page/rectangle-87-bg.png') }}" alt=""
                            class="img-fluid card-img-top rounded-top">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #ffffff">Grace Kate ,30years</h5>
                            <p class="card-text" style="color: #09B2FF">Cleaner</p>
                            <p class="card-text" style="color: #ffffff">I highly motivated and reliable cleaner with over
                                5 years of experience in the industry. she takes pride in her work and have a strong
                                attention to detail, ensuring that every surface is left sparkling and every room is left
                                spotless.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card rounded-2 shadow" style="background-color: #033B55; height: 100%;">
                        <img src="{{ asset('images/landing_page/rectangle-88.png') }}" alt=""
                            class="img-fluid card-img-top rounded-top">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #ffffff">John Tega ,40 years</h5>
                            <p class="card-text" style="color: #09B2FF">Janitor</p>
                            <p class="card-text" style="color: #ffffff">Meet John, a reliable and skilled janitor with
                                over 10 years of experience in the field. He has a strong work ethic and takes great pride
                                in keeping buildings clean and well-maintained.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card rounded-2 shadow" style="background-color: #033B55; height: 100%;">
                        <img src="{{ asset('images/landing_page/rectangle-89-bg.png') }}" alt=""
                            class="img-fluid card-img-top rounded-top">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #ffffff">Olu Balogun ,35years</h5>
                            <p class="card-text" style="color: #09B2FF">Dry Cleaner</p>
                            <p class="card-text" style="color: #ffffff">"Meet Balogun,with over 15 years of experience in
                                the industry.He takes great care in handling her clients' garments and is always happy to
                                offer helpful tips and recommendations for maintaining their clothes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-3 d-flex justify-content-center">
                        <a href="" class="btn btn-custom-info text-center w-25">Find More</a>
                    </div>
                </div>
            </div>
            {{-- ____________________ Testimonial _____________________ --}}
            <div class="row">
                <div class="col-md-5 col sm 12">
                    <img src="{{ asset('images/landing_page/Group 15235.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 mt-5">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="d-flex justify-content-center" id="testimonial">
                                <h5 style="color: #0677AA;">Testimonial</h5>
                            </div>
                        </div>
                        <div class="col-md-10 mt-5 pt-2">
                            <h2 class="fw-bold">Hear from our Client</h2>
                            <div class="mt-5">
                                <p>“I recently used Tidy up Cleaning Services for a deep clean <br>of my home and I was extremely impressed with the level <br>of professionalism and attention to detail displayed by the <br>cleaning team. They arrived on time, were efficient and <br>thorough in their work, and left my home sparkling clean”</p>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-3 col-sm-3 col-xm-3 mx-0">
                                    <img src="{{asset('images/landing_page/Ellipse 14.png')}}" alt="" width="" class="img-fluid">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xm-9 mt-2" style="margin-left:-12%">
                                    <h5>Chief Collins Chuks</h5>
                                    <p>Residential Cleaning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

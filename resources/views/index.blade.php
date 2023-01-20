
@extends('layouts.app2')

@section('wrap')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="m-5 p-5 border border-light shadow-lg">


                  <div class="row justify-content-center">

                        <div class="col-lg-10 col-md-10 col-sm-12">

                              <div class="m-4">

                                <p> welcome <span class="text-muted h4">{{ $user->name}}</span></p>


                                <h1>We design digital products that help grow businesses</h1>
                                  <h2>We are team of talented designers making websites with Bootstrap</h2>
                                  <a href="{{ route('info')}}" class="btn btn-info text-white scrollto">Setting</a>


                              </div>

                        </div>

                  </div>

                  <div class="row  justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-12">

                        <div class="bg-light m-4 p-4">

                          <div class="card shadow-lg border border-white">


                              <div class="card-body">
                                <a href="{{ route('dry.cleaning')}}" class="btn text-dark"><h2>Dry Cleaning</h2></a>
                              </div>
                        </div>

                        </div>

                    </div>
                  </div>



                  <div class="row  justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-12">

                        <div class="bg-light m-4 p-4">

                            <div class="card shadow-lg border border-white">


                                  <div class="card-body">
                                    <a href="{{ route('home.cleaning')}}" class="btn text-dark"><h2>Home Cleaning</h2></a>
                                  </div>
                            </div>

                        </div>

                    </div>
                  </div>

                  <div class="row  justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-12">

                        <div class="bg-light m-4 p-4">

                            <div class="card shadow-lg border border-white">


                                  <div class="card-body">
                                    <a href="{{ route('home.cleaning')}}" class="btn text-dark"><h2>Commercial Cleaning</h2></a>
                                  </div>
                            </div>

                        </div>

                    </div>
                  </div>




        </div>
      </div>

    </div>
@stop

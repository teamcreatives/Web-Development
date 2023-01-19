@extends('layouts.app')

@section('content')

<div class="limiter">

    <div class="container">



            <div class="row justify-content-center">


                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="col-lg-8 col-md-8 col-sm-12">

                    <div class="bg-white border border-light shadow-lg m-5 p-4">

                        <div class="row justify-content-center">

                            <div class="col-lg-8 col-md-8 col-sm-12">

                                <div class="bg-white m-5 p-5">

                                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                                        @csrf


                                        <span class="login100-form-title">
                                            Sign Up
                                        </span>

                                        <div class="wrap-input100 validate-input">
                                            <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="name"  data-validate = "Name is required">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        @error('name')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror


                                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                            <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        @error('email')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror

                                        <div class="wrap-input100 validate-input" data-validate = "Phonenumber is required">
                                            <input class="input100 @error('phonenumber') is-invalid @enderror" type="text" name="phonenumber" placeholder="phonenumber">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>
                                        </div>


                                        @error('phonenumber')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror


                                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter Password">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>
                                        </div>


                                        @error('password')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror

                                        <div class="wrap-input100 validate-input" data-validate = "Password confirmation is required">

                                                <input class="input100 @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirm Password">
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                </span>

                                        </div>


                                        @error('password_confirmation')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror

                                        <div class="container-login100-form-btn mb-3">
                                            <button class="login100-form-btn">
                                                Register
                                            </button>
                                        </div>




                                            <div class="text-center mb-3">
                                                <p class="text-muted">Already have an account?</p>
                                                <a class="txt2" href="{{route('login')}}">
                                                    Sign In
                                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                                </a>
                                            </div>



                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



    </div>

</div>




@stop

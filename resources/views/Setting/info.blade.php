

@extends('layouts.app')

@section('content')

<div class="container">

        <div class="row  justify-content-center">

            <div class="col-lg-8 col-md-8 col-sm-12">

                <div class="bg-white border border-light shadow-lg m-5 p-4">

                    <div class="row justify-content-center">

                        <div class="col-lg-8 col-md-8 col-sm-12">

                            <div class="bg-white m-5 p-5">

                                    <ul class="list-group">

                                       <a class="btn btn-muted" href="{{ route('profile', $user->id)}}"><li class="list-group-item bg-light">Profile</li></a>
                                       <a class="btn btn-muted" href="{{ route('change-password', $user->id)}}"><li class="list-group-item bg-light">Change Password</li></a>
                                       <a class="btn btn-muted"><li class="list-group-item bg-light">View Order</li></a>
                                       <a class="btn btn-muted"><li class="list-group-item bg-light">A second item</li></a>
                                    </ul>

                                    <div class="row justify-content-center">

                                        <div class="col-lg-4 col-md-4 col-sm-12">

                                                <div class="">

                                                </div>

                                        </div>
                                        <div class="col-lg-8 col-md-4 col-sm-12">

                                            <div class="m-2">

                                                <a href="{{ route('home')}}" class="btn btn-primary text-white">
                                                    Back
                                                </a>


                                            </div>

                                        </div>


                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

</div>




  @stop

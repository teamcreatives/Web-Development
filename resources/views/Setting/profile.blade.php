@extends('layouts.app2')

@section('wrap')


<div class="container">

    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="bg-white border border-light m-5 p-5 shadow-lg">

                    <div class="row justify-content-center">

                        <div class="col-lg-6 col-md-6 col-sm-12">

                                <div class="m-3">


                                    @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                    @endif


                                                <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">

                                                            @csrf

                                                            <div class="mb-3">



                                                            </div>

                                                            <div class="mb-3">

                                                                <label for="name">Your Name</label>
                                                                <input type="text" class="form-control text-secondary" name="name" id="name" value="{{ $user->name }}">
                                                                @error('name')
                                                                <small class="alert alert-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>



                                                            <div class="mb-3">

                                                                <label for="phonenumber">PhoneNumber</label>
                                                                <input type="text" class="form-control text-secondary" name="phonenumber" id="phonenumber" value="{{ $user->phonenumber }}">

                                                            </div>
                                                            @error('phonenumber')
                                                            <small class="alert alert-danger">{{ $message }}</small>
                                                            @enderror

                                                            <div class="mb-3">

                                                                <label for="email">Email</label>
                                                                <input type="text" class="form-control text-secondary"  id="email" value="{{ $user->email }}"  readonly>


                                                            </div>




                                                            <div class="mb-3">

                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control text-secondary" name="address" id="address" value="">

                                                                @error('address')
                                                                <small class="alert alert-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>




                                                            <div class="mb-3">

                                                                <label for="status">Membership Status</label>
                                                                <input type="text" class="form-control text-secondary" name="status" id="status" value="">

                                                                @error('status')
                                                                <small class="alert alert-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>




                                                            <div class="row justify-content-center">

                                                                <div class="col-lg-4 col-md-4 col-sm-12">

                                                                        <div class="">

                                                                            <button class="btn btn-primary text-white">
                                                                                Save
                                                                            </button>
                                                                        </div>

                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">

                                                                    <div class="">

                                                                        <a href="{{ route('account')}}" class="btn btn-primary text-white">
                                                                            Back
                                                                        </a>


                                                                    </div>

                                                                </div>


                                                            </div>

                                                </form>



                                </div>

                        </div>

                    </div>

            </div>

        </div>

    </div>

</div>




@stop

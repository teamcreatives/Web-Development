
@extends('layouts.app2')

@section('wrap')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="m-5 p-5  border border-light shadow-lg">


            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-12">

                      <div class="m-4">

                        <p> welcome <span class="text-muted h4">{{ $user->name}}</span></p>



                          <a href="{{ route('account')}}" class="btn btn-info text-white scrollto mb-4">Setting</a>

                          <div class="mb-3">

                            <h4 class="text text-muted h-4">Dry Cleaning Service</h4>

                    </div>

                      </div>

                </div>

          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12">

                <div class="bg-light m-4 p-4">

                  <div class="card shadow-lg border border-white">


                      <div class="card-body">
                        <form action="{{ route('washing',$user->id)}}">

                          @csrf






                                <select class="form-select mb-3" name="select" aria-label="Default select example">


                                      @foreach ($services as $service)


                                          <option value="">{{$service->name}}</option>

                                      @endforeach


                                </select>


                              <input type="submit" class="btn btn-info text-white" name="book_user" value="Book Order">

                              <a href="{{ route('home')}}" class="btn btn-info text-white">Back</a>

{{--
                             <a href="{{ route('drycleaning.edit')}}" class="btn btn-info text-white">Edit</a>
                             <a href="{{ route('drycleaning.destroy')}}" class="btn btn-info text-white">Delete</a> --}}



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

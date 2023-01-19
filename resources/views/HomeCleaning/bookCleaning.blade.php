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


                                            <div class="mb-5"><h3>Book Cleaning</h3></div>

                                                <form action="" method="POST" enctype="multipart/form-data">

                                                    @csrf


                                                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">

                                                                    <label for="example" class="mb-2">Date: </label>
                                                                    <input placeholder="Select date" type="date" name="date" id="example" class="form-control mb-3">

                                                                    <i class="glyphicon glyphicon-calendar input-prefix" tabindex=0></i>

                                                                    @error('date')
                                                                    <small class="alert alert-danger">{{ $message }}</small>
                                                                    @enderror

                                                            </div>

                                                            <div id="time" class="md-form md-outline input-with-post-icon mb-3">

                                                                <label for="example" class="mb-2">Time: </label>
                                                                <input placeholder="Select time" type="time" name="time" id="datetimepicker" class="form-control">

                                                                <span class="glyphicon glyphicon-calendar input-prefix" tabindex=0></span>

                                                                @error('time')
                                                                <small class="alert alert-danger">{{ $message }}</small>
                                                                @enderror

                                                        </div>








                                                                <div class="col-lg-4 col-md-4 col-sm-12">

                                                                    <div class="">

                                                                        <a href="" class="btn btn-primary text-white">
                                                                            Book Cleaning
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


<script>
    $('#datetimepicker').datetimepicker({
        format: 'hh:mm:ss a'
    });
</script> 

@stop

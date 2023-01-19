@extends('layouts.app2')

@section('wrap')

    <div class="container">

            <div class="row justify-content-center">

                    <div class="col-lg-8 col-md-8 col-sm-12">

                            <div class="bg-white border border-light m-5 p-5 shadow-lg">

                                    <div class="row justify-content-center">

                                            <div class="col-lg-6 col-md-6 col-sm-12">

                                                    <div class="m-3">

                                                            <form action="{{ route('update-password') }}" method="POST">
                                                                @csrf

                                                                <div class="mb-3">
                                                                    <label for="oldPasswordInput" class="form-label">Old Password</label>
                                                                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                                                        placeholder="Xxxxxxxxx">
                                                                    @error('old_password')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="newPasswordInput" class="form-label">New Password</label>
                                                                    <input name="password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                                                        placeholder="Xxxxxxxxx">
                                                                    @error('new_password')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                                                    <input name="password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                                                        placeholder="Xxxxxxxxx">
                                                                </div>

                                                            </div>

                                                            <div class="card-footer">
                                                                <button class="btn btn-primary">Submit</button>
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

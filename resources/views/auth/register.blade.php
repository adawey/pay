
@extends('auth.publiclayout')

@section('content')
    <div class="container-fluid page_content">
        <form class="form" method="post" action="{{ route('register') }}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6  mt-4">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input name="f_name" type="text" placeholder="First Name">
                        </div>

                    </div>
                    <div class="col-md-6  mt-4">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input name="l_name" type="text" placeholder="Last Name">
                        
                        </div>
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input type="email" name="email" placeholder="Email">
                            
                            <div class="input_box_img_con">
                                <img src="{{URL::asset('assets/image/icons8-mail-50 1.png')}}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <select class="form-select" name="type" aria-label="Default select example">
                            <option selected> select your account type   </option>
                            <option value="1">user</option>
                            <option value="2">murch</option>
                          </select>
                    </div>
                </div>
                




                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input type="string" name="number" placeholder="Your phone number">
                            
                            <div class="input_box_img_con">
                                <img src="{{URL::asset('assets/image/icons8-mail-50 1.png')}}" alt="">
                            </div>
                        </div>
                        @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6  mt-4">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input name="password" type="password" placeholder="password" minlength="8">
                            <div class="input_box_img_con">
                                <img  src="{{URL::asset('assets/image/icons8-hide-30 1.png')}}" alt="">
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6  mt-4">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input name="password_confirmation" type="password" placeholder="Confirm password">
                        </div>
                    </div>
                </div>
                <span class="not">your password must be more than 8 characters</span>
                <div class="my-4" style="display: flex;align-items: center;justify-content: space-between;">
                    <div class="link_con">
                        <a href="{{ route('login') }}">Have an account ? <span style="text-decoration: underline;">Login</span></a>
                    </div>
                    <input type="submit" class="submit_btn" value="Create">
                </div>
            </div>
        </form>
    </div>

    @endsection




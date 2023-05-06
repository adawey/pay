
@extends('auth.publiclayout')
@section('page_title', 'new_account')
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <select class="form-select" name="type" aria-label="Default select example">
                            <option selected disabled> select account type   </option>
                            <option value="1">user</option>
                            <option value="2">murch</option>
                          </select>
                    </div>
                </div>
                




                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input name="number" type="number" maxlength="5" placeholder="Your phone number">
                            
                            <div class="input_box_img_con">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg>
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
                    <div class="link_con mt-3">
                        <a href="{{ route('login') }}">Have an account ? <span style="text-decoration: underline;">Login</span></a>
                    </div>
                    <div>
                        <input type="submit" class="submit_btn px-3 py-1 rounded" value="Create">
                    </div>
                </div>
            </div>
        </form>
    </div>

    @endsection




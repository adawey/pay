@extends('auth.publiclayout')

@section('page_title', 'Login')
@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"> -->
    <div class="container-fluid page_content">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf
            <div class="container">
                <div class="row mt-4 mx-3">
                    <div class="col-md-12">
                        <div class="input_box border-0" style="border: none;box-shadow: none;">
                            <input type="email" name="email" placeholder="Email" required>
                            <div class="input_box_img_con">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg>
                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row mx-3">
                    <div class="col-md-12  mt-4">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input name="password" type="password" placeholder="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <div class="input_box_img_con">
                                <img src="{{URL::asset('assets/image/icons8-hide-30 1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 ">
                    <div class=" d-flex justify-content-center mt-2">
                            <input type="submit" class="submit_btn px-5 py-1 rounded " value="Login">
                        </div>
                    <div class="my-4 d-flex align-items-center gap-5 justify-content-between text-decoration-underline">
                        <div class="link_con">
                            <a href="{{ route('password.request') }}">Forgot your password ?</a>
                        </div>
                        <div>
                            <div class="link_con text-decoration-underline">
                                <a class="createNew" href="{{ route('register') }}">Create new Account ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
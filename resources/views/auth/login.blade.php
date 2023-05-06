{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                               
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PaySpace') }}</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
</head>

<body>
    <div class="top_page_login">
        <span>Login Now</span>
    </div>
    <div class="container-fluid page_content">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="input_box" style="border: none;box-shadow: none;">
                            <input type="email" name="email" placeholder="Email" required>
                            <div class="input_box_img_con">
                                <img src="{{URL::asset('assets/image/icons8-mail-50 1.png')}}" alt="">
                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
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
                <div>
                    <div class="my-4 d-flex align-items-center justify-content-between text-decoration-underline">
                        <div class="link_con">
                            <a href="{{ route('password.request') }}">Forgot your password ?</a>
                        </div>
                        <div class="mt-3">
                            <input type="submit" class="submit_btn" value="Login">
                        </div>
                    </div>
                    <div class="m-0">
                        <div class="link_con text-decoration-underline">
                            <a class="createNew" href="{{ route('register') }}">Create new Account ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
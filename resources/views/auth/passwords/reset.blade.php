@extends('auth.publiclayout')


@section('content')




<div class="container-fluid page_content">
    <form class="form"  method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="container">
            <div class="row mt-4">
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="col-md-12">
                    <div class="input_box" style="border: none;box-shadow: none;">
                        <input type="email" name="email" placeholder="Email" required>
                        <div class="input_box_img_con">
                            <img src="{{URL::asset('assets/image/icons8-mail-50 1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="my-4 d-flex align-items-center justify-content-between text-decoration-underline">

                    <div class="mt-3">
                        <input type="submit" class="submit_btn" value="Login">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form >
                        @csrf

             

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection 

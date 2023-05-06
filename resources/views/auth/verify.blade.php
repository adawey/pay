 {{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}

@extends('auth.publiclayout')

@section('content')


<div class="container-fluid page_content">
    <form class="form"  method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <div class="container">
            <div class="row mt-4">
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
{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
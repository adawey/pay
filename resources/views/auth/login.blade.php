
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
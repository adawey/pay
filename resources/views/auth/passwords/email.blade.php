@extends('auth.publiclayout')


@section('content')

<div class="container-fluid page_content">
    @section('page_title', 'reset password')
    <form class="form"  method="POST" action="{{ route('password.email') }}">
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

                   
                    <div class="px-4 ">
                        <div class=" d-flex justify-content-center mt-2">
                                <input type="submit" class="submit_btn px-5 py-1 rounded " value="reset password">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


@endsection

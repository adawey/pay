
    @extends('layouts.app')

    @section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container-fluid page_content" style="min-height: 100vh;">

            <div class="container">
                <div class="row d-flex justify-content-center mt-5 mx-3">
                    <div class="col-md-6 col-12 text-center" style="border:1px solid #70d4d4; border-radius:15px; ">
                        <h1> {{ Auth::user()->balance }} </h1>
                        <p class="h5 text-secondary"> Current Balance </p>
                </div>
                <div class="mt-5" style="display: flex;align-items: center;justify-content: center;">
                    <a href="{{route('AddBalancePage')}}" type="button" class="btn btn-outline-success  py-3 px-4 fs-4 fw-bold">Recharge Money</a>
                </div>

                <div class="mt-3" style="display: flex;align-items: center;justify-content: center;">
                    <a href="{{route('sendMonyPage')}}" type="button" class="btn btn-outline-success py-3 px-5 fs-4 fw-bold">Send Money</a>
                </div>

                <div class="mt-3" style="display: flex;align-items: center;justify-content: center;">
                    <a href="{{route('reportPage')}}" type="button" class="btn btn-outline-success py-3 px-5 fs-4 fw-bold">Send Report</a>
                </div>

                <div class="mt-3" style="display: flex;align-items: center;justify-content: center;">
                    <a href="{{route('myPayment')}}" type="button" class="btn btn-outline-success py-3 px-5 fs-4 fw-bold">My Payment</a>
                </div>
            </div>
        </div>
       
    </div>


@endsection
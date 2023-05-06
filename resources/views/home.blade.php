
    @extends('layouts.app')

    @section('content')
    <div class="container-fluid page_content" style="min-height: 100vh;">
       
            <div class="container">
                <div class="row">
                <div style="text-align: center" class="col-md-6 col-12">
                    <h1> {{ Auth::user()->balance }} </h1>
                    <h5> my balance </h5>
                </div>
                
                <div class="my-5" style="display: flex;align-items: center;justify-content: center;">
                    <span id="pay_button" class="submit_btn"
                        style="background-color:#46B5B5;padding: 5px 30px;cursor: pointer;"> <a href="{{route('AddBalancePage')}}"> add mony </a> </span>
                </div>
            
                <div class="my-5" style="display: flex;align-items: center;justify-content: center;">
                    <span id="pay_button" class="submit_btn"
                        style="background-color:#46B5B5;padding: 5px 30px;cursor: pointer;"> <a href="{{route('sendMonyPage')}}"> send mony </a> </span>
                </div>
                <div class="my-5" style="display: flex;align-items: center;justify-content: center;">
                    <span id="pay_button" class="submit_btn"
                        style="background-color:#46B5B5;padding: 5px 30px;cursor: pointer;"> <a href="{{route('reportPage')}}"> send report </a> </span>
                </div>
                <div class="my-5" style="display: flex;align-items: center;justify-content: center;">
                    <span id="pay_button" class="submit_btn"
                        style="background-color:#46B5B5;padding: 5px 30px;cursor: pointer;"> <a href="{{route('myPayment')}}">myPayment </a> </span>
                </div>
            </div>
        </div>
       
    </div>


@endsection
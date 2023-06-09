
@extends('layouts.app')

@section('content')
<div class="container-fluid page_content" style="min-height: 100vh;">
    <form  class="form" method="post" action="{{ route('balance.verifyPay') }}">
        @csrf
        <div class="container">
             <div class="row mt-4 mx-3">
                <div class="col-md-12 ">
                    <div class="input_box" style="border: none;box-shadow: none;">
                        <input type="text" title="12 Digit code" required pattern="[0-9]{12}" maxlength=12 name="credit_card_number" placeholder="Enter your credit card number">
                    </div>
                </div>
            </div> 
            <div class="row mx-3">
                <div class="col-md-6  mt-4">
                    <div class="input_box" style="border: none;box-shadow: none;">
                        <input name="expiration_date" min="2018-03" type="month"  placeholder="Expiration date">
                    </div>
                </div>
                <div class="col-md-6  mt-4">
                    <div class="input_box" style="border: none;box-shadow: none;">
                        <input name="cvv" id="cvv" type="text" placeholder="CVV" title="3 Digit code" required pattern="[0-9]{3}" maxlength=3>
                    </div>
                </div>
            </div>
            <div class="row mx-3">
                <div class="col-md-12">
                    <div class="input_box mt-3" style="border: none; box-shadow: none;">
                        <input type="number" title="transfer amount" name="amount"
                            placeholder="Enter amount">
                    </div>
                </div>
            </div>

                <div class="mt-3" style="display: flex;align-items: center;justify-content: center;">
                    <button type="submit" class="btn btn-outline-success py-3 px-5 fs-4 fw-bold">Confirm</button>
                <button onClick="window.location = '{{ route('home') }}'" type="button" class="btn btn-outline-secondary py-3 px-5 fs-4 fw-bold ml-2" style="margin-left: 20px">cancle</button>

                </div>
        </div>
    </form>
</div>


@endsection
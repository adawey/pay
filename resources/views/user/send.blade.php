
@extends('layouts.app')

@section('content')
<div class="container-fluid page_content" style="min-height: 100vh;">
    <form  class="form" method="post" action="{{ route('sendMony.verifyPay') }}">
        @csrf
        <div class="container">
            
            <div class="row">
                <div class="col-md-6  mt-4">
                    <div class="input_box" style="border: none;box-shadow: none;">
                        <input name="phone_number" type="text"  placeholder="phone_number ">
                    </div>
                </div>
               
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <select class="form-select" name="type" aria-label="Default select example">
                        <option selected> select your pay Type    </option>
                        <option value="1"> friendly </option>
                        <option value="2"> salle some thing </option>
                      </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input_box mt-3" style="border: none; box-shadow: none;">
                        <input type="number" title="transfer amount" name="amount"
                            placeholder="Enter amount">
                    </div>
                </div>
            </div>
            <div class="my-5" style="display: flex;align-items: center;justify-content: center;">
                <button type="submit" >Confirm</button>
            </div>
        </div>
    </form>
</div>


@endsection
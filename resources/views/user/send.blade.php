
@extends('layouts.app')

@section('content')
<div class="container-fluid page_content" style="min-height: 100vh;">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form  class="form" method="post" action="{{ route('sendMony.verifyPay') }}">
        @csrf
        <div class="container">
            
            <div class="row mx-3">
                <div class="col-md-6 w-100 mt-4">
                    <div class="input_box " style="border: none;box-shadow: none;">
                        <input name="phone_number" type="text"  placeholder="phone_number ">
                    </div>
                </div>
               
            </div>

                <div class="row mx-3 mt-3">
                    <div class="col-md-12 ">
                        <select class="input p-3 w-100 fs-5" style="border: solid 1px #797fbb; box-shadow: none; border-radius: 10px ;" name="type" aria-label="Default select example" required>
                            <option selected disabled>select payment Type   </option>
                            <option value="1">Friendly</option>
                            <option value="2">Sell Something</option>
                          </select>
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
            </div>
        </div>
    </form>
</div>


@endsection
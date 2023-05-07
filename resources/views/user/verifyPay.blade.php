
@extends('layouts.app')

@section('content')
<div class="container-fluid page_content" style="min-height: 100vh;">
    <form  class="form" method="post" action="{{ route('balance.confirmBalance') }}">
        @csrf
        <div class="container">

            <input type="hidden" name="id" value="{{ $newPay->id }}">
            <div class="row">
                <div class="col-md-12">
                    <div class="input_box mt-3" style="border: none; box-shadow: none;">
                        <input type="number" title="code" name="code"
                            placeholder="Enter code">
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
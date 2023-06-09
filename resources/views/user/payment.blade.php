@extends('layouts.app')

@section('content')

<div class="container-fluid page_content" style="min-height: 100vh;">


           <div class="table-responsive text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">payment_number</th>
                        <th scope="col">amount</th>
                        <th scope="col">status</th>
                        <th scope="col">type</th>
                        <th scope="col">notes</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <th scope="row">{{ $payment->id }}</th>
                       
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->status }}</td>
                        <td>{{ $payment->type }}</td>
                        <td>{{ $payment->note }}</td>
                        <td>
                            @if($payment->status == "pending" &&  $payment->type == "sender")
                            <div class="d-flex justify-content-between">

                                
                                <form id="accept_{{$payment->id}}" action="{{ route('user.confirmPayment') }}" method="POST" style="display: none;" >
                               
                                    <input type="hidden" name="id" value="{{ $payment->id }}" />
                                    {{ csrf_field() }}
                                  
                                </form>


                                    <button type="button" class="btn btn-success px-2"  onclick="event.preventDefault();document.getElementById('accept_{{$payment->id}}').submit();">
                                        Approve
                                    </button>
                                    <button type="button" class="btn btn-danger "  onclick="event.preventDefault();document.getElementById('reject_{{$payment->id}}').submit();">
                                        <form id="reject_{{$payment->id}}" action="{{ route('user.RejectPayment') }}" method="POST" style="display: none;">
                                            <input type="hidden" name="id" value="{{ $payment->id }}">
                                            {{ csrf_field() }}
                                        </form>
                                        Decline
                                    </button>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
</div>
@endsection
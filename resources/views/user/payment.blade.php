@extends('layouts.app')

@section('content')

<div class="container-fluid page_content" style="min-height: 100vh;">
    <form id="payment_form" class="form" method="get" action="verifyPage.php">
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">payment_number</th>
                        <th scope="col">amount</th>
                        <th scope="col">status</th>
                        <th scope="col">type </th>
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
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </form>
</div>
@endsection
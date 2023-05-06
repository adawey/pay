@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row mx-3 mt-5 d-flex justify-content-center">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr class="bg-secondary">
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">payment_ID</th>
                        <th scope="col">amount</th>
                        <th scope="col">user_name</th>
                        <th scope="col">number</th>
                        <th scope="col">destination</th>
                        <th scope="col">type</th>
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($payments  as  $payment)
                    <tr>
                        <th scope="row">{{ $payment->id  }}</th>
                        <td>{{ $payment->amount  }}</td>
                        <td>{{ $payment->user->f_name ?? ''  }}</td>
                        <td>{{ $payment->number  }}</td>
                        <td>{{ $payment->destination  }}</td>
                        <td>{{ $payment->type  }}</td>
                        <td>{{ $payment->status  }}</td>
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@section('js')
<script>
    function myFunction() {
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete_user').submit();
        }
        })
        event.preventDefault();
    }

    
   </script>
@endsection
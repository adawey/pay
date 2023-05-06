@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row mx-3 mt-5 d-flex justify-content-center">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr class="bg-secondary">
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">merchant_ID</th>
                        <th scope="col">name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Balance</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($merchants  as  $merchant)
                    <tr>
                        <th scope="row">{{ $merchant->id  }}</th>
                        <td>{{ $merchant->f_name  }} {{ $merchant->l_name  }}</td>
                        <td>{{ $merchant->number  }}</td>
                        <td>{{ $merchant->email  }}</td>
                        <td>{{ $merchant->balance  }}</td>
                        <td>
                            {{-- <button type="button" class="btn btn-success">Success</button> --}}
                            <button type="button" class="btn btn-danger">delete</button>
                            
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
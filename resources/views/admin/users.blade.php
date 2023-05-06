@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row mx-3 mt-5 d-flex justify-content-center">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr class="bg-secondary">
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">customer_ID</th>
                        <th scope="col">name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Balance</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->f_name  }} {{ $user->l_name  }}</td>
                        <td>{{ $user->number }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->balance }}</td>
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
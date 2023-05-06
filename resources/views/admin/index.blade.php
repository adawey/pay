@extends('admin.layout')


@section('content')
<div class="container">
    <div class="row mx-3 mt-5 d-flex justify-content-center">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr class="bg-secondary">
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Balance</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">5</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
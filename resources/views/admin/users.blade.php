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
                        
                            <button type="button" onclick="return myFunction();" class="btn btn-danger">
                                <form id="delete_user" action="{{ route('admin.users.deleteUser') }}" method="POST" style="display: none;">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    {{ csrf_field() }}
                                </form>
                                delete
                            </button>
                            
                        </td>
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
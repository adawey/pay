@extends('layouts.app')


@section('content')

<div class="container-fluid page_content">
    <form class="form" method="POST" action="{{ route('storeReport') }}">
        @csrf
        <div class="form-group mt-3 mx-4">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" title="title" class="form-control mt-2" name="title"
                placeholder="Insert title">
        </div>
        <div class="mt-3 mx-4">
            <label for="selectMenu">Suggestions & Complaints</label>
            <select class="form-select mt-2 " aria-label="Default select example" name="status" id="selectMenu">
                <option disabled selected>Select here</option>
                <option value="review">Suggestion</option>
                <option value="report">Complaint</option>
            </select>
        </div>
        <div class="form-group mt-3 mx-4">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control mt-2" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mt-3" style="display: flex;align-items: center;justify-content: center;">
            <button type="submit" class="btn btn-outline-success py-3 px-5 fs-4 fw-bold">Confirm</button>
            <button onClick="window.location = '{{ route('home') }}'" type="button" class="btn btn-outline-secondary py-3 px-5 fs-4 fw-bold ml-2" style="margin-left: 20px">cancle</button>

        </div>
    </form>
</div>

@endsection
@extends('backend.partial.master')


@section('content')

    <h1>Add Blogs</h1>
    <form  method="post" action="{{ route('addblogsubmit') }}" class="text-capitalize" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="FAQ Name">User Name</label>
            <input type="text" name="name" id="name" placeholder="add Name" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">User Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="author">User Author</label>
            <input type="text" name="author" id="author" placeholder="Add Author" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">description</label><br>
           <textarea name="description" id="" cols="80" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add team user</button>
    </form>


@endsection


@push('script')

@endpush


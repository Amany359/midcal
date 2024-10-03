@extends('admin.layouts.master')

@section('content')
<div class="container">
    <a href="{{ route('admin.dashboard.views.index') }}" class="btn btn-success mb-3">Create New category</a>

    <form action="{{ route('admin.dashboard.views.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>
    

        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" name="language" class="form-control" id="language" placeholder="Enter language">
        </div>
        <div class="form-group">
            <label for="posts_img">Image</label>
            <input type="file" class="form-control" id="image" name="image" }}">
        </div>
        <div class="form-group">
            <label for="create_date">create_date</label>
            <input type="intger" name="create_date" class="form-control" id="create_date" >
        </div>

        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection

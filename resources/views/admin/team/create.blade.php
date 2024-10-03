@extends('admin.layouts.master')

@section('content')
<div class="container">
    <a href="{{ route('admin.dashboard.teams.index') }}" class="btn btn-success mb-3">Create New category</a>

    <form action="{{ route('admin.dashboard.teams.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
        </div>
        
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
